@extends('admin.layouts.main')
@section('page_title','Add Product')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($product)) Edit @else Add @endif Product</h4>
                <p><a href="{{route('admin.product')}}" class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.product_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($product)) value="{{$product->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-6">
                                <p>Author Name<span class="text-danger">*</span></p>
                                <select name="staff_id" id="single-select" class="form-control" required>
                                    @foreach ($staff as $post)
                                        <option @if(isset($product)) @if($product['staff_id']==$post->id) selected @endif @endif value="{{$post->id}}">{{$post->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <p>Category Name<span class="text-danger">*</span></p>
                                <select name="category_id" id="single-select" class="form-control" required>
                                    @foreach ($product_category as $post)
                                        <option @if(isset($product)) @if($product['category_id']==$post->id) selected @endif @endif value="{{$post->id}}">{{$post->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" @if(isset($product)) value="{{$product->title}}" @endif class="form-control" placeholder="Enter a title.." required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="col-xl-6">
                                <label class="col-form-label" for="price">Price<span class="text-danger">*</span></label>
                                <input type="number" name="price" id="price" @if(isset($product)) value="{{$product->price}}" @endif class="form-control" placeholder="Enter a price.." required>
                                <div class="invalid-feedback">Please enter price.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="date">Date<span class="text-danger">*</span></label>
                                <input type="date" name="date" id="date" @if(isset($product)) value="{{$product->date}}" @endif class="form-control" placeholder="Enter a date.." required>
                                <div class="invalid-feedback">Please enter a date.</div>
                            </div>
                            <div class="col-xl-6">
                                <label for="image" class="col-form-label">Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" @if(!isset($product)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use 700*700px sizes image</strong></small>
                                <div class="invalid-feedback">Please enter a image.</div>
                                <embed src="@if(isset($product)) {{ url('storage/app/'.$product->image)}}" alt="{{$product->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" >
                            </div>
                            <div class="col-xl-6">
                                <label for="image2" class="col-form-label">Image2<span class="text-danger">*</span></label>
                                <input type="file" name="image2" id="image2" @if(!isset($product)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use 700*700px sizes image</strong></small>
                                <div class="invalid-feedback">Please enter a image.</div>
                                <embed src="@if(isset($product)) {{ url('storage/app/'.$product->image2)}}" alt="{{$product->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" >
                            </div>
                            <div class="col-xl-6">
                                <label for="image3" class="col-form-label">Image3<span class="text-danger">*</span></label>
                                <input type="file" name="image3" id="image3" @if(!isset($product)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use 700*700px sizes image</strong></small>
                                <div class="invalid-feedback">Please enter a image.</div>
                                <embed src="@if(isset($product)) {{ url('storage/app/'.$product->image3)}}" alt="{{$product->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" >
                            </div>
                            <div class="col-xl-6">
                                <label for="image4" class="col-form-label">Image4<span class="text-danger">*</span></label>
                                <input type="file" name="image4" id="image4" @if(!isset($product)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use 700*700px sizes image</strong></small>
                                <div class="invalid-feedback">Please enter a image.</div>
                                <embed src="@if(isset($product)) {{ url('storage/app/'.$product->image4)}}" alt="{{$product->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" >
                            </div>
                            <div class="col-xl-6">
                                <label for="image5" class="col-form-label">Image5<span class="text-danger">*</span></label>
                                <input type="file" name="image5" id="image5" @if(!isset($product)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This image is visible in site image. <strong class="text-danger">Use 700*700px sizes image</strong></small>
                                <div class="invalid-feedback">Please enter a image.</div>
                                <embed src="@if(isset($product)) {{ url('storage/app/'.$product->image5)}}" alt="{{$product->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" >
                            </div>
                            <div class="col-xl-6">
                                <label for="banner" class="col-form-label">Banner<span class="text-danger">*</span></label>
                                <input type="file" name="banner" id="banner" @if(!isset($product)) required @endif class="form-control">
                                {{-- <br> --}}
                                <small class="">This banner is visible in site banner. <strong class="text-danger">Use 1920*640px sizes banner</strong></small>
                                <div class="invalid-feedback">Please enter a banner.</div>
                                <embed src="@if(isset($product)) {{ url('storage/app/'.$product->banner)}}" alt="{{$product->title}}" @endif class="img-thumbnail" width="20%"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
                            </div>
                            
                            <div class="col-xl-12">
                                <label class="col-form-label" for="short_description">Short Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="short_description" id="editor1" rows="5" placeholder="What would you like to see?" required>@if(isset($product)) {{$product->short_description}} @endif</textarea>
                                <div class="invalid-feedback">Please enter a short description.</div>
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label" for="long_description">Long Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="long_description" id="editor2" rows="5" placeholder="What would you like to see?" required>@if(isset($product)) {{$product->long_description}} @endif</textarea>
                                <div class="invalid-feedback">Please enter a long description.</div>
                            </div>
                            <div class="my-3 row">
                                <div class="col-xl-6">
                                    <label class="col-form-label" for="meta_title">Meta Title<span class="text-danger">*</span></label>
                                    <input type="text" name="meta_title" id="meta_title" @if(isset($product)) value="{{ $product->meta_title }}" @endif class="form-control" placeholder="Enter a meta title.." required>
                                    <div class="invalid-feedback">Please enter a meta title.</div>
                                </div>
                                <div class="col-xl-6">
                                    <label class="col-form-label" for="meta_keyword">Meta Keyword<span class="text-danger">*</span></label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" @if(isset($product)) value="{{ $product->meta_keyword }}" @endif class="form-control" placeholder="Enter a meta keywords.." required>
                                    <div class="invalid-feedback">Please enter a meta keywords.</div>
                                </div>
                                <div class="col-xl-12">
                                    <label class="col-form-label" for="meta_desc">Meta Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="meta_desc" id="meta_desc" rows="5" placeholder="What would you like to see?" required>@if(isset($product)){{ $product->meta_desc }}@endif</textarea>
                                    <div class="invalid-feedback">Please enter a meta description.</div>
                                </div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($product)) Update @else Submit @endif</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection