<?php

namespace App\Http\Controllers;

use App\Event;
use App\Repositories\EventRepository;
use App\Repositories\EventTypeRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    //
    private $eventRepository;
    private $eventTypeRepository;

    private $event;

    public function __construct(EventTypeRepository $eventTypeRepository, EventRepository $eventRepository)
    {
        $this->eventTypeRepository = $eventTypeRepository;
        $this->eventRepository = $eventRepository;
        $this->event = new Event();

    }

    public function index()
    {
        $data['events'] = $this->eventRepository->fetchAll();
        $data['event_types'] = $this->eventTypeRepository->fetchAll();

        return view('events.index')->with(compact('data'));
    }


    public function create()
    {
        $data['event_types'] = $this->eventTypeRepository->fetchAll();

        return view('events.create')->with('data', $data);

    }

    public function store(Request $request)
    {
        $validator = $this->event->validate($request->all());

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $event = $this->eventRepository->saveNew($request->all());

        return redirect('events')->with('success', 'Event ' . $event->theme  . ' has been successfully created');
    }

    public function show($id)
    {


    }

    public function destroy($id)
    {

    }


    public function attendance($id)
    {
        
        $event = $this->eventRepository->getEventAttendance($id);
        
        return view('events.attendance')->with('event', $event);

    }


    public function checkIn(Request $request)
    {
        
        $validator = Validator::make($request->only(['event_id', 'member_id']), ['event_id' => 'required|integer', 'member_id' => 'required|integer']);

        if ($validator->fails())
        {
            return back()->with('failure', 'Oops! An error occurred');
        }

        $this->eventRepository->saveAttendance($request->get('event_id'), $request->get('member_id'));

        return redirect('events/' . $request->get('event_id') . '/attendance')->with('success', 'Attendance has been recorded');

    }

    public function undoCheckIn(Request $request)
    {
        $validator = Validator::make($request->only(['event_id', 'member_id']), ['event_id' => 'required|integer', 'member_id' => 'required|integer']);

        if ($validator->fails())
        {
            return back()->with('failure', 'Oops! An error occurred');
        }

        $this->eventRepository->removeAttendance($request->get('event_id'), $request->get('member_id'));

        return redirect('events/' . $request->get('event_id') . '/attendance')->with('success', 'Attendance has been recorded');

    }



}
