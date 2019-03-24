@extends('layouts.app')

@section('styles')

    <link href="{{url('assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <div class="page-inner">

        <div class="page-title">
            <h3>Users</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li>Users</li>
                    <li class="active">Create new</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Create a new admin user</h4>
                        </div>
                        <div class="panel-body">
                            @include('partials.errors')
                            @include('partials.failure')
                            @include('partials.success')
                            @include('partials.info')
                            <form class="form form-horizontal" role="form" action="{{url('/users')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="name" class="control-label col-sm-2">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{old('firstName')}}" placeholder="First name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="control-label col-sm-2">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{old('lastName')}}" placeholder="Last name" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email" class="control-label col-sm-2">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email address">
                                    </div>
                                </div>

                                <div class="form-actions pull-right">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

    </div>

@endsection


@section('scripts')


    <script src="{{url('assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
    <script src="{{url('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{url('assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
    <script src="{{url('assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('assets/js/modern.min.js')}}"></script>
    <script src="{{url('assets/js/pages/table-data.js')}}"></script>

@endsection
