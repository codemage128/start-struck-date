@extends('layout/sidebar')
@section('block')
    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
        <div class="page-title">

            <div class="float-left">
                <h1 class="title">Add a User</h1>
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
                <h2 class="title float-left">Basic Info</h2>
                <div class="actions panel_actions float-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <form action="#" method="post">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">First Name</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" value="John Doe" class="form-control"
                                                   id="field-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Last Name</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" value="John Doe" class="form-control"
                                                   id="field-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-5">Date of Birth</label>
                                <span class="desc">e.g. "04/03/2015"</span>
                                <div class="controls">
                                    <input type="text" value="05/02/1985" class="form-control datepicker"
                                           data-format="mm/dd/yyyy" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-1">Email</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" value="email@example.com" class="form-control"
                                           id="field-3">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Phone</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="field-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">City</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="field-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Country</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="field-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Address line1</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="field-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Postal Code</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="field-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">State</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="field-1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop
