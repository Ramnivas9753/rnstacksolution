@extends('layouts.main')

@section('content-header')
<?php

// print_r(Auth::user()->is_admin);
?>
<div class="content-header">
    <div class="px-3 container-fluid px-md-5">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Welcome User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('body')
@php
// $arr = ["a"=>"info", "b"=>"success", "c"=>"warning", "d"=>"danger"];
@endphp
<div class="row">

</div>
@endsection
