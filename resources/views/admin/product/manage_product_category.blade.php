@extends('admin.layouts.main')
@section('page_title','Add Product Category')

@section('body')
<div class=" container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" >
                <h4 class="card-title">@if(isset($product_category)) Edit @else Add @endif Product Category</h4>
                <p><a href="{{route('admin.product_category')}}" class="btn btn-dark btn-sm"><strong>-Back</strong></a></p>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('admin.product_category_create')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" @if(isset($product_category)) value="{{$product_category->id}}" @else value="0" @endif >
                        <div class="row">
                            <div class="col-xl-12">
                                <label class="col-form-label" for="name">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" @if(isset($product_category)) value="{{$product_category->name}}" @endif class="form-control" placeholder="Enter a name.." required>
                                <div class="invalid-feedback">Please enter a name.</div>
                            </div>
                                
                            <div class="my-3 col-lg-12 ms-auto">
                                <button type="submit" class="btn btn-primary btn-sm" required>@if(isset($product_category)) Update @else Submit @endif</button>
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