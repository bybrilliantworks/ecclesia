<?php

namespace App\Http\Controllers;

use App\Event;
use App\Repositories\EventRepository;
use App\Repositories\EventTypeRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

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
    

}
