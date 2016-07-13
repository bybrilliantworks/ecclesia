@extends('layouts.app')

@section('styles')

    <link href="{{url('assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <div class="page-inner">

        <div class="page-title">
            <h3>Events</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li>Events</li>
                    <li class="active">Create new</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
             <div class="col-md-12">
                 @include('partials.errors')
                 @include('partials.failure')
                 @include('partials.success')
                 @include('partials.info')
             </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Create a new event</h4>
                        </div>
                        <div class="panel-body">

                            <form class="form form-horizontal" role="form" action="{{url('/events')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="eventType" class="control-label col-sm-2">Event Type</label>
                                    <div class="col-md-10">
                                        <select name="event_type" id="eventType" class="form-control col-md-6">
                                            <option value="">Please select the type of event</option>
                                            @foreach($data['event_types'] as $event_type)
                                                <option value="{{$event_type->id}}">{{$event_type->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="theme" class="control-label col-sm-2">Theme</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="theme" name="theme" value="{{old('theme')}}" placeholder="Theme of the service" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="control-label col-sm-2">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}" placeholder="Description" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="venue" class="control-label col-sm-2">Venue</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="venue" name="venue" value="{{old('venue')}}" placeholder="Venue" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ministering" class="control-label col-sm-2">Ministering</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ministering" name="ministering" value="{{old('ministering')}}" placeholder="Ministering" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="event_date" class="control-label col-sm-2">Date</label>
                                    <div class="col-sm-10">
                                        <input type="datetime-local" class="form-control" id="date" name="event_date" value="{{old('event_date')}}" placeholder="Date of Event" required>
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
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Create a new event type</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form form-horizontal" role="form" action="{{url('/event_types')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="eventType" class="control-label col-sm-2">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" placeholder="e.g. Sunday Service">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="et_description" class="control-label col-sm-2">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="et_description" name="description" value="{{old('description')}}" placeholder="Description" required>
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
