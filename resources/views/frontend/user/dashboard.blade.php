@extends('frontend.layouts.main')

@section('content')
    <section class="gallery">
        <div class="px-3 container-fluid px-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center gallery-top">
                        <h4>User Dashboard</h4>
                        <img loading="lazy" src="{{asset('frontend-assets/images/heartbeat.png')}}" alt="{{Auth::user()->name}}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
                        <p>{{Auth::user()->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
