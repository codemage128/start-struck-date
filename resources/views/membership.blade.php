@extends('layout/sidebar')
@section('header')
    <style>
        .table-scrollable{
            overflow-x: auto;
        }
    </style>
@stop
@section('block')
    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
        <div class="page-title">

            <div class="float-left">
                <h1 class="title">Member ship</h1>
            </div>

            <div class="float-right d-none">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{ route('users') }}">users</a>
                    </li>
                    <li class="active">
                        <strong>Add user</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-xl-12 col-lg-12 col-12 col-md-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title float-left">User List</h2>
                <div class="actions panel_actions float-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="table-scrollable">
                    <table class="table table-bordered text-center">
                        <thead>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Email</th>
                        <th>Membership Status</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td>2020.09.14</td>
                            <td>admin@admin.com</td>
                            <td><span class="badge badge-md badge-primary">membership</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Admin2</td>
                            <td>2020.09.14</td>
                            <td>admin@admin.com</td>
                            <td><span class="badge badge-md badge-primary">membership</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@stop
