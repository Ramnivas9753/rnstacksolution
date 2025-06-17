<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;
use App\Models\Admin\Feature;
use App\Models\Admin\Gallery;
use App\Models\Admin\Faq;
use App\Models\Admin\Services;
use App\Models\Admin\Slider;
use App\Models\Admin\Testimonial;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index($bcat_id = "")
    {
        $slider = Slider::where('status', 1)->get();
        $service = Services::where('status', 1)->latest()->limit(3)->get();
        $testimonial = Testimonial::where('status', 1)->latest()->get();
        $gallery = Gallery::where(['status' => 1])->latest()->limit(6)->get();
        // $blog = Blog::where(['status' => 1])->latest(5);

        if ($bcat_id == null) {
            $blog = Blog::where(['status' => 1])->latest()->paginate(4);
        } else {
            $blog = Blog::where(['status' => 1, 'category_id' => $bcat_id])->latest(4)->paginate(6);
        }
        $resent_blog = Blog::where(['status' => 1])->latest()->limit(4)->get();
       
        if ($bcat_id == null) {
            $product = Product::where(['status' => 1])->latest()->paginate(4);
        } else {
            $product = Product::where(['status' => 1, 'category_id' => $bcat_id])->latest(4)->paginate(6);
        }
        $resent_product = Product::where(['status' => 1])->latest()->limit(4)->get();

        return view('frontend.index', ['sliders' => $slider, 'services' => $service, 'gallerys' => $gallery, 'testimonials' => $testimonial, 'blogs' => $blog, 'resent_blog' => $resent_blog, 'products' => $product, 'resent_product' => $resent_product]);
    }


    // Pages  About
    public function about()
    {
        $feature = Feature::where('status', 1)->latest()->get();
        $gallery = Gallery::where(['status' => 1])->latest()->limit(6)->get();
        return view('frontend.pages.about', ['features' => $feature, 'gallerys' => $gallery]);
    }


    // Term-Coditions
    // public function shop()
    // {
    //     return view('frontend.pages.shop');
    // }
    // public function shopDetails()
    // {
    //     return view('frontend.pages.shopDetails');
    // }

    public function shop() 
    {
        // Fetch all shops with status = 1, ordered by the latest
        $shops = Shop::where('status', 1)->latest()->paginate(6); // Assuming your model is Shop
        return view('frontend.pages.shop', ['shops' => $shops]);
    }
    


//     public function shopDetails($slug)
// {
//     return view('frontend.pages.shopDetails', compact('slug'));
// }


    

    // In IndexController

    // public function shop($id, $slug)
    // {
    //     // Logic to fetch shop details based on $id and $slug
    //     // You can pass these to a view or process them as needed.
    //     return view('frontend.pages.shop', compact('id', 'slug'));
    // }

    // public function shopDetails($slug)
    // {
    //     // Logic to fetch shop details based on $slug
    //     // Pass the $slug to a view or use it for further processing
    //     return view('frontend.pages.shopDetails', compact('slug'));
    // }



    public function termCondition()
    {
        return view('frontend.pages.term_condition');
    }

    public function privacyPolicy()
    {
        return view('frontend.pages.privacy');
    }


    public function contact()
    {
        $faq = Faq::where(['status' => 1])->get();
        $gallery = Gallery::where(['status' => 1])->latest()->limit(6)->get();
        return view('frontend.pages.contact', ['faqs' => $faq, 'gallerys' => $gallery]);
    }
    
    public function productEnquiry()
    {
        $faq = Faq::where(['status' => 1])->get();
        $gallery = Gallery::where(['status' => 1])->latest()->limit(6)->get();
        return view('frontend.pages.productEnquiry', ['faqs' => $faq, 'gallerys' => $gallery]);
    }

    public function invest()
    {

        return view('frontend.pages.invest');
    }

    public function gallery()
    {
        $gallery = Gallery::where(['status' => 1])->latest()->limit(10)->get();

        return view('frontend.pages.gallery', ['gallerys' => $gallery]);
    }

    public function offers()
    {

        return view('frontend.pages.offers');
    }
    public function rooms()
    {
        $service = Services::where('status', 1)->latest()->get();

        return view('frontend.pages.rooms', ['services' => $service]);
    }
    public function booking()
    {

        return view('frontend.pages.booking');
    }


    //Services
    public function services()
    {
        $service = Services::where(['status' => 1])->get();

        return view('frontend.services.services', ['services' => $service]);
    }

    public function serviceDetails($slug)
    {
        $service_details = Services::where(['status' => 1, 'slug' => $slug])->first();
        if (!isset($service_details)) {
            return redirect()->route('front.index')->with('error', 'Accomodition Not Found');
        }

        return view('frontend.pages.room_details', ['service_details' => $service_details]);
    }


    // Blogs
    public function blog($bcat_id = "")
    {
        if ($bcat_id == null) {
            $blog = Blog::where(['status' => 1])->latest()->get();
            // $blog = Blog::where(['status' => 1])->latest()->paginate(6);
        } else {
            $blog = Blog::where(['status' => 1, 'category_id' => $bcat_id])->latest()->get();
            // $blog = Blog::where(['status' => 1, 'category_id' => $bcat_id])->latest()->paginate(6);
        }
        return view('frontend.services.blog', ['blogs' => $blog]);
    }

    public function blogDetails($slug)
    {
        $gallery = Gallery::where(['status' => 1])->latest()->limit(6)->get();
        $blog_details = Blog::where(['status' => 1, 'slug' => $slug])->first();
        if (!isset($blog_details)) {
            return redirect()->route('front.index')->with('error', 'Blog Not Found');
        }
        $blog_category = BlogCategory::where(['status' => 1])->get();
        $resent_blog = Blog::where(['status' => 1])->latest()->limit(4)->get();

        return view('frontend.services.blog_details', ['blog_details' => $blog_details, 'blog_category' => $blog_category, 'gallerys' => $gallery, 'resent_blog' => $resent_blog]);
    }

    // ====================

        // Blogs
        public function product($bcat_id = "")
        {
            if ($bcat_id == null) {
                $product = Product::where(['status' => 1])->latest()->get();
                // $blog = Blog::where(['status' => 1])->latest()->paginate(6);
            } else {
                $product = Product::where(['status' => 1, 'category_id' => $bcat_id])->latest()->get();
                // $blog = Blog::where(['status' => 1, 'category_id' => $bcat_id])->latest()->paginate(6);
            }
            return view('frontend.services.product', ['products' => $product]);
        }
    
        // public function productDetails($slug)
        // {
        //     $gallery = Gallery::where(['status' => 1])->latest()->limit(6)->get();
        //     $product_details = Product::where(['status' => 1, 'slug' => $slug])->first();
        //     if (!isset($blog_details)) {
        //         return redirect()->route('front.index')->with('error', 'Product Not Found');
        //     }
        //     $product_category = productCategory::where(['status' => 1])->get();
        //     $resent_product = Product::where(['status' => 1])->latest()->limit(4)->get();
    
        //     return view('frontend.services.product_details', ['product_details' => $product_details, 'product_category' => $product_category, 'gallerys' => $gallery, 'resent_product' => $resent_product]);
        // }

        public function productDetails($slug)
{
    $gallery = Gallery::where(['status' => 1])->latest()->limit(6)->get();
    $product_details = Product::where(['status' => 1, 'slug' => $slug])->first();

    // Agar product nahi mila to home page par redirect karna
    if (!$product_details) {
        return redirect()->route('front.index')->with('error', 'Product Not Found');
    }

    $product_category = productCategory::where(['status' => 1])->get();
    $resent_product = Product::where(['status' => 1])->latest()->limit(4)->get();

    return view('frontend.services.product_details', [
        'product_details' => $product_details,
        'product_category' => $product_category,
        'gallerys' => $gallery,
        'resent_product' => $resent_product
    ]);
}

    // ====================


    // public function searchDoctor(Request $request)
    // {    
    //     $doctor_search = Doctor::where('title','LIKE',"%{$request->search}%")->where('status', 1)->latest()->paginate(12);

    //     return view('frontend.department.doctor', ['doctor'=>$doctor_search,'search'=>$request->search]);
    // }

    // public function searchData(Request $request)
    // {
    //     $doctor_search = Doctor::where('title','like','%' .$request->search. '%')->where(['status'=>1])->select('id','department_id','title','designation','slug')->get();
    //     //  dd(count($doctor_search));

    //     $result = '';
    //     if(count($doctor_search)>0)
    //     {
    //         $result .= '<ul class="p-2 list-group list-group-flush">
    //                         <h4 >Doctors</h4>
    //                     </ul>';
    //         foreach ($doctor_search as  $doctor) {
    //             $department = Department::whereIn('id', json_decode($doctor->department_id))->pluck('title');

    //             $result .= '<li class="list-group-item">
    //                 <a href="'.route('front.doctor_detail', ['doctor_slug' => $doctor->slug]).'">
    //                     <p class="mb-1">' . $doctor->title .'</p>
    //                     <small>' . $department->implode(', ') . '</small>
    //                     <small>' . $doctor->designation . '</small>
    //                 </a>
    //             </li>';
    //         }
    //     }else{
    //         echo "<b>Record not matched!</b>";
    //     }
    //     echo $result;
    // }

}