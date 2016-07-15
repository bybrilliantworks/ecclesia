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
                    <li class="active">Overview</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">All Events</h4>
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="eventsTable" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>Theme</th>
                                        <th>Event Type</th>
                                        <th>Date </th>
                                        <th>Venue</th>
                                        <th>Tithe</th>
                                        <th>Offering</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Theme</th>
                                        <th>Event Type</th>
                                        <th>Date </th>
                                        <th>Venue</th>
                                        <th>Tithe</th>
                                        <th>Offering</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($data['events'] as $event)
                                        <tr>
                                            <td>{{$event->theme}}</td>
                                            <td>{{$event->event_type_id}}</td>
                                            <td>{{$event->event_date}}</td>
                                            <td>{{$event->venue}}</td>
                                            <td>{{$event->total_offering}}</td>
                                            <td>{{$event->total_tithe}}</td>

                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{url('events/' . $event->id . '/attendance')}}" class="btn btn-xs btn-default">Attendance</a>
                                                    <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{url('events/' . $event->id . '/edit')}}">Edit</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="{{url('events/' . $event->id . '/delete')}}">Delete</a></li>
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
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">All Events Types</h4>
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="eventTypesTable" class="display table dataTable" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($data['event_types'] as $event_type)
                                        <tr>
                                            <td>{{$event_type->name}}</td>
                                            <td>{{$event_type->description}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-xs btn-default">View</button>
                                                    <button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{url('members/' . $event_type->id . '/edit')}}">Edit</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="{{url('members/' . $event_type->id . '/delete')}}">Delete</a></li>
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

    </div>

@endsection


@section('scripts')


    <script src="{{url('assets/plugins/jquery-mockjax-master/jquery.mockjax.js')}}"></script>
    <script src="{{url('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{url('assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
    <script src="{{url('assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('assets/js/modern.min.js')}}"></script>
    <script src="{{url('assets/js/pages/events.js')}}"></script>

@endsection
