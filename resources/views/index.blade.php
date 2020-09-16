@extends('layout/sidebar')
@section('block')
    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
        <div class="page-title">
            <div class="float-left">
                <h1 class="title">StarStruck Date App</h1>
            </div>
        </div>
        <div class="float-right d-none">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('index') }}"><i class="fa fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="{{ route('users') }}">Users</a>
                </li>
                <li class="active">
                    <strong>All Users</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 col-md-12 col-12">
        <a href="{{ route('users') }}" class="btn btn-danger">Users</a>
    </div>
@stop
