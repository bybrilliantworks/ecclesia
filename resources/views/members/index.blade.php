@extends('layouts.app')

@section('styles')


    <link href="{{url('assets/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{url('assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <div class="page-inner">

        <div class="page-title">
            <h3>Members</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="active">All Memebers</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">All members</h4>
                        </div>
                        <div class="panel-body">
                                @include('partials.errors')
                                @include('partials.failure')
                                @include('partials.success')
                                @include('partials.info')

                            <div class="table-responsive">
                                <table id="membersTable" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                        <th>Gender</th>
                                        <th>Birthday</th>
                                        <th>Marital Status</th>
                                        <th>Membership Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                        <th>Gender</th>
                                        <th>Birthday</th>
                                        <th>Marital Status</th>
                                        <th>Membership Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($members as $member)
                                    <tr>
                                        <td>{{$member->first_name . " " . $member->last_name}}</td>
                                        <td>{{$member->mobile_number}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->gender}}</td>
                                        <td>{{$member->birthday}}</td>
                                        <td>{{$member->marital_status}}</td>

                                        <td>
                                            @if($member->certified_code == '')
                                                <span class="badge badge-danger">Not Certified</span>
                                            @else
                                                <span class="badge badge-success">Certified {{ $member->certified_code }}</span>
                                            @endif

                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url('members/' . $member->id)}}" class="btn btn-xs btn-default">View</a>
                                                <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('members/' . $member->id . '/edit')}}">Edit</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="{{url('members/' . $member->id . '/delete')}}">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2015 © Made by Enthronement Tech.</p>
        </div>
    </div>

@endsection


@section('scripts')


    <script src="{{url('assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
    <script src="{{url('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{url('assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
    <script src="{{url('assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('assets/js/modern.min.js')}}"></script>
    <script src="{{url('assets/js/pages/members.js')}}"></script>

@endsection
