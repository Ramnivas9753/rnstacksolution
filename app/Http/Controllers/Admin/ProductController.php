<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use App\Models\Admin\ProductCategory;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function category()
    {
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        $product_category = ProductCategory::all();
        return view('admin.product.product_category', ['product_category' => $product_category]);
    }

    public function dataCategory(Request $request)
    {
        $draw = $request->get('draw');      // Internal use
        $start = $request->get("start");     // where to start next records for pagination
        $rowPerPage = $request->get("length");    // How many recods needed per page for pagination

        $orderArray = $request->get('order');
        $columnNameArray = $request->get('columns');   // It will give us columns array
        $searchArray = $request->get('search');
        $columnIndex = $orderArray[0]['column'];   // This will let us know,
        // which column index should be sorted
        // 0 = id, 1 = title, 2 = email , 3 = created_at

        $columnName = $columnNameArray[$columnIndex]['data']; // Here we will get column name,
        // Base on the index we get

        $columnSortOrder = $orderArray[0]['dir'];          // This will get us order direction(ASC/DESC)
        $searchValue = $searchArray['value'];          // This is search value


        $totalFilter = DB::table('product_categories');
        if (!empty($searchValue)) {
            $totalFilter = $totalFilter->where('name', 'like', '%' . $searchValue . '%');
        }
        $totalFilter = $totalFilter->count();

        if (!empty($searchValue)) {
            $data = DB::table('product_categories');
            $data = $data->where('name', 'like', '%' . $searchValue . '%');
        }

        $data = DB::table('product_categories');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if (!empty($searchValue)) {
            $data = DB::table('product_categories');
            $data = $data->where('name', 'like', '%' . $searchValue . '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach ($data as $key => $item) {

            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_' . $item->id . '" type="checkbox" data-status="' . $item->status . '" onclick="changeStatus(' . "'product_categories', 'status'," . $item->id . ')" ';
            if ($item->status == 1) {
                $status .= 'checked';
            }
            $status .= '> </div>';
            $data[$key]->status = $status;

            $data[$key]->action = '<a href="' . route('admin.product_category_edit', ['id' => Crypt::encrypt($item->id)]) . '" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord(' . "'product_categories'," . $item->id . ')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';

            $data[$key]->id = $serial_num + 1;
            $serial_num++;
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $data,
        );
        return response()->json($response);
    }

    public function addCategory()
    {
        return view('admin.product.manage_product_category');

    }

    public function createCategory(Request $request)
    {
        if ($request->id == 0) {

            $product_category = new ProductCategory;

            $product_category->name = $request->name;
            $product_category->slug = str()->slug($request->name);
            $product_category->save();
        } else {
            $product_category = ProductCategory::find($request->id);

            $product_category->name = $request->name;
            $product_category->slug = str()->slug($request->name);
            $product_category->save();
        }
        return redirect(route('admin.product_category'))->with('message', 'product Category Added');
    }

    public function editCategory($id)
    {
        $id = Crypt::decrypt($id);
        $product_category = ProductCategory::find($id);

        return view('admin.product.manage_product_category', ['product_category' => $product_category]);
    }



    // // Products
    public function product()
    {
        // if (!checkAccess(52)) {
        //     return redirect()->back()->with('message', 'Access Denied');
        // }
        $product = Product::all();

        return view('admin.product.product', ['product' => $product]);
    }

    public function dataProduct(Request $request)
    {
        $draw = $request->get('draw');      // Internal use
        $start = $request->get("start");     // where to start next records for pagination
        $rowPerPage = $request->get("length");    // How many recods needed per page for pagination

        $orderArray = $request->get('order');
        $columnNameArray = $request->get('columns');   // It will give us columns array
        $searchArray = $request->get('search');
        $columnIndex = $orderArray[0]['column'];   // This will let us know,
        // which column index should be sorted
        // 0 = id, 1 = title, 2 = email , 3 = created_at

        $columnName = $columnNameArray[$columnIndex]['data']; // Here we will get column name,
        // Base on the index we get

        $columnSortOrder = $orderArray[0]['dir'];          // This will get us order direction(ASC/DESC)
        $searchValue = $searchArray['value'];          // This is search value


        $totalFilter = DB::table('products');
        if (!empty($searchValue)) {
            $totalFilter = $totalFilter->where('title', 'like', '%' . $searchValue . '%');
        }
        $totalFilter = $totalFilter->count();

        if (!empty($searchValue)) {
            $data = DB::table('products');
            $data = $data->where('title', 'like', '%' . $searchValue . '%');
        }

        $data = DB::table('products');
        $data = $data->skip($start)->take($rowPerPage);
        $data = $data->orderBy($columnName, $columnSortOrder);

        if (!empty($searchValue)) {
            $data = DB::table('products');
            $data = $data->where('title', 'like', '%' . $searchValue . '%');
        }

        $data = $data->get();
        $total = $data->count();
        $serial_num = 0;

        foreach ($data as $key => $item) {
            $data[$key]->category_id = getName($item->category_id, 'product_categories')->name;
            
            $data[$key]->staff_id = getName($item->staff_id, 'admins')->name;

            // ---------------
            // ---------------
            
            $data[$key]->image = 
            '<img loading="lazy" src="' . url('storage/app/' . $item->image) . '" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\'' . asset("assets/images/defaultimg.webp") . '\';">';
           
            $data[$key]->image2 = '<img loading="lazy" src="' . url('storage/app/' . $item->image2) . '" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\'' . asset("assets/images/defaultimg.webp") . '\';">';
            
            $data[$key]->image3 = '<img loading="lazy" src="' . url('storage/app/' . $item->image3) . '" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\'' . asset("assets/images/defaultimg.webp") . '\';">';
            
            $data[$key]->image4 = '<img loading="lazy" src="' . url('storage/app/' . $item->image4) . '" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\'' . asset("assets/images/defaultimg.webp") . '\';">';
            
            $data[$key]->image5 = '<img loading="lazy" src="' . url('storage/app/' . $item->image5) . '" height="80px" width="80px"
            onerror="this.onerror=null;this.src=\'' . asset("assets/images/defaultimg.webp") . '\';">';
            
            $data[$key]->banner = '<img loading="lazy" src="' . url('storage/app/' . $item->banner) . '" onerror="this.onerror=null;this.src=\'' . asset("assets/images/defaultimg.webp") . '\';" height="80px" width="80px">';

            $status = '<div class="mb-0 form-check form-switch form-check-md">
                <input class="form-check-input" id="tab_' . $item->id . '" type="checkbox" data-status="' . $item->status . '" onclick="changeStatus(' . "'products', 'status'," . $item->id . ')" ';
            if ($item->status == 1) {
                $status .= 'checked';
            }
            $status .= '> </div> ';
            $data[$key]->status = $status;

            $data[$key]->action = '<a href="' . route('admin.product_edit', ['id' => Crypt::encrypt($item->id)]) . '" class="shadow btn btn-primary btn-xs sharp"><i class="fa fa-pencil"></i></a>
                <a href="#" onclick="deleteRecord(' . "'products'," . $item->id . ')" class="shadow btn btn-danger btn-xs sharp me-1"><i class="fa fa-trash"></i></a>';

            $data[$key]->id = $serial_num + 1;
            $serial_num++;
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $data,
        );
        return response()->json($response);
    }

    public function addProduct()
    {
        $product_category = ProductCategory::where('status', 1)->select('id', 'name')->orderBy('name', 'ASC')->get();
        $staff = Admin::where('status', 1)->select('id', 'name')->orderBy('name', 'ASC')->get();

        return view('admin.product.manage_product')->with(['product_category' => $product_category, 'staff' => $staff]);
    }

    public function createProduct(Request $request)
    {
        if ($request->id == 0) {

            $product = new product;

            $product->slug = str()->slug($request->title);
            $product->category_id = $request->category_id;
            $product->staff_id = $request->staff_id;
            $product->title = $request->title;
            $product->price = $request->price;
            $product->meta_title = $request->meta_title;
            $product->meta_desc = $request->meta_desc;
            $product->meta_keyword = $request->meta_keyword;
            $product->date = $request->date;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            if ($request->hasfile('image')) {
                @unlink('storage/app/' . $product->image);
                $product->image = $request->file('image')->store('public/images/product');
            }
            if ($request->hasfile('image2')) {
                @unlink('storage/app/' . $product->image2);
                $product->image2 = $request->file('image2')->store('public/images/product');
            }
            if ($request->hasfile('image3')) {
                @unlink('storage/app/' . $product->image3);
                $product->image3 = $request->file('image3')->store('public/images/product');
            }
            if ($request->hasfile('image4')) {
                @unlink('storage/app/' . $product->image4);
                $product->image4 = $request->file('image4')->store('public/images/product');
            }
            if ($request->hasfile('image5')) {
                @unlink('storage/app/' . $product->image5);
                $product->image5 = $request->file('image5')->store('public/images/product');
            }
            if ($request->hasfile('banner')) {
                @unlink('storage/app/' . $product->banner);
                $product->banner = $request->file('banner')->store('public/images/product');
            }

            $product->save();
        } else {
            $product = Product::find($request->id);

            $product->meta_title = $request->meta_title;
            $product->meta_desc = $request->meta_desc;
            $product->meta_keyword = $request->meta_keyword;
            $product->slug = str()->slug($request->title);
            $product->category_id = $request->category_id;
            $product->staff_id = $request->staff_id;
            $product->title = $request->title;
            $product->price = $request->price;
            $product->date = $request->date;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            if ($request->hasfile('image')) {
                @unlink('storage/app/' . $product->image);
                $product->image = $request->file('image')->store('public/images/product');
            }
            if ($request->hasfile('image2')) {
                @unlink('storage/app/' . $product->image2);
                $product->image2 = $request->file('image2')->store('public/images/product');
            }
            if ($request->hasfile(key: 'image3')) {
                @unlink('storage/app/' . $product->image3);
                $product->image3 = $request->file('image3')->store('public/images/product');
            }
            if ($request->hasfile(key: 'image4')) {
                @unlink('storage/app/' . $product->image4);
                $product->image4 = $request->file('image4')->store('public/images/product');
            }
            if ($request->hasfile(key: 'image5')) {
                @unlink('storage/app/' . $product->image5);
                $product->image5 = $request->file('image5')->store('public/images/product');
            }
            if ($request->hasfile('banner')) {
                @unlink('storage/app/' . $product->banner);
                $product->banner = $request->file('banner')->store('public/images/product');
            }
            $product->save();
        }
        return redirect(route('admin.product'))->with('message', 'product  Added');
    }

    public function editProduct($id)
    {
        $id = Crypt::decrypt($id);
        $product = Product::find($id);
        $product_category = ProductCategory::where('status', 1)->select('id', 'name')->orderBy('name', 'ASC')->get();
        $staff = Admin::where('status', 1)->select('id', 'name')->orderBy('name', 'ASC')->get();

        return view('admin.product.manage_product', ['product' => $product, 'product_category' => $product_category, 'staff' => $staff]);
    }


}
