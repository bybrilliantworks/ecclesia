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
            <h3>Events</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('/events')}}">Events</a></li>
                    <li class="active">Attendance</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">{{$event->theme}}</h4>
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="attendanceTable" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>Member's Name</th>
                                        <th>In Attendance?</th>
                                        <th>Check-in Time </th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Member's Name</th>
                                        <th>In Attendance?</th>
                                        <th>Check-in Time </th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($event->attendance as $attendance)
                                        <tr>
                                            <td>{{$attendance->member_name}}</td>

                                            <td>
                                                @if ($attendance->checkin_time !== null)
                                                    <span class="badge badge-success">Yes</span>
                                                @else

                                                    <span class="badge badge-default">No</span>
                                                @endif
                                            </td>

                                            <td>{{$attendance->checkin_time}}</td>

                                            <td>
                                                @if ($attendance->checkin_time !== null)
                                                    <a href="{{url('events/attendance/remove_checkin?event_id=' . $event->id . '&member_id=' . $attendance->id)}}" class="btn btn-xs btn-warning" > <i class="fa fa-sign-out"></i> Undo Check-in</a>
                                                @else
                                                    <a href="{{url('events/attendance/check_in?event_id=' . $event->id . '&member_id=' . $attendance->id)}}" class="btn btn-xs btn-default" > <i class="fa fa-sign-in"></i> Check-in</a>

                                                @endif

                                                    {{--<div class="btn-group">--}}
                                                    {{--<a href="{{url('events/check_in?event_id=' . $event->id . '&member_id=' . $attendance->id)}}" class="btn btn-xs btn-default" > <i class="fa fa-sign-in"></i> Check In</a>--}}
                                                    {{--<button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                                        {{--<span class="caret"></span>--}}
                                                        {{--<span class="sr-only">Toggle Dropdown</span>--}}
                                                    {{--</button>--}}
                                                    {{--<ul class="dropdown-menu">--}}
                                                        {{--<li><a href="{{url('events/' . $event->id . '/edit')}}">Edit</a></li>--}}
                                                        {{--<li role="separator" class="divider"></li>--}}
                                                        {{--<li><a href="{{url('events/' . $event->id . '/delete')}}">Delete</a></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
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

    </div>

@endsection


@section('scripts')


    <script src="{{url('assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
    <script src="{{url('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{url('assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
    <script src="{{url('assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('assets/js/modern.min.js')}}"></script>
    <script src="{{url('assets/js/pages/attendance.js')}}"></script>

@endsection

