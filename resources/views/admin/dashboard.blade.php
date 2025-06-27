@extends('admin.layouts.main')
@section('page_title', 'Dashboard')

@section('body')
<div class="container-fluid px-md-5 px-3">
    <div class="mb-3 form-head d-flex align-items-center mb-sm-4">
        <div class="me-auto">
            <h2 class="text-primary font-w600">Dashboard</h2>
            <p class="mb-0">{{ business_setting('site_name') }} Admin Dashboard</p>
        </div>
        <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm"><i class="las la-user scale5 me-3"></i>{{Auth::user()->name}}</a>
    </div>
         <div class="row">
            <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $testimonial = \App\Models\Admin\Slider::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-primary fs-34 font-w600">{{$testimonial}}</h2>
                            <span>Slider</span>
                        </div>
                        <i class="flaticon-381-notepad fs-1" style="color:rgb(49, 0, 154);"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-gradient-color progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $service = \App\Models\Admin\Services::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-primary fs-34 font-w600">{{$service}}</h2>
                            <span>Our Services</span>
                        </div>
                        <i class="fa fa-cogs fs-1" style="color:rgb(49, 0, 154);"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-gradient-color progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $team = \App\Models\Admin\Testimonial::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-primary fs-34 font-w600">{{$team}}</h2>
                            <span>Team Members</span>
                        </div>
                        <i class="fa fa-users fs-1" style="color:rgb(49, 0, 154);"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-gradient-color progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $department = \App\Models\User\Contact::get()->count();
                            // $active = \App\Models\Admin\Services::where('status',1)->get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-primary fs-34 font-w600">{{$department}}</h2>
                            <span>Total Enquiry</span>
                        </div>
                        <i class="flaticon-381-controls-3 fs-1" style="color:rgb(49, 0, 154);"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-gradient-color progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                        <span class="sr-only">50% Complete</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $event = \App\Models\Admin\Gallery::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-primary fs-34 font-w600">{{$event}}</h2>
                            <span>Total Galleries</span>
                        </div>
                        <i class="fa fa-images fs-1" style="color:rgb(49, 0, 154);"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-gradient-color progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $blog = \App\Models\Admin\Blog::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-primary fs-34 font-w600">{{$blog}}</h2>
                            <span>Total Blogs</span>
                        </div>
                        <i class="fa fa-rss fs-1" style="color:rgb(49, 0, 154);"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-gradient-color progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        @php
                            $client = \App\Models\Admin\Feature::get()->count();
                        @endphp
                        <div class="media-body me-3">
                            <h2 class="text-primary fs-34 font-w600">{{$client}}</h2>
                            <span>Total Facilities</span>
                        </div>
                        <i class="flaticon-381-internet fs-1" style="color:rgb(49, 0, 154);"></i>
                    </div>
                </div>
                <div class="progress rounded-0" style="height:4px;">
                    <div class="progress-bar rounded-0 bg-gradient-color progress-animated" style="width: 100%; height:4px;"
                        role="progressbar">
                    </div>
                </div>
            </div>
        </div>
        
    </div> 
</div>
@endsection

@section('script')
@endsection
