@extends('layout/sidebar')
@section('block')
    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
        <div class="page-title">
            <div class="float-left">
                <h1 class="title">Users</h1>
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
    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title float-left">All Users</h2>
                <div class="actions panel_actions float-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                <div class="team-member ">
                                    <div class="row margin-0">
                                        <div class="team-img ">
                                            <img class="img-fluid rounded-circle"
                                                 src="data/students/student-1.jpg" alt="">
                                        </div>
                                        <div class="team-info">
                                            <h4>
                                                <a href="uni-user-profile.php?userId="/>
                                            </h4>
                                            <span class='team-member-edit'><a
                                                    href="uni-user-edit.php?userId="><i
                                                        class='fa fa-pencil icon-xs'></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
