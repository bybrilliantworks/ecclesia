<?php

namespace App\Http\Controllers;

use App\EventType;
use App\Repositories\EventTypeRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class EventTypeController extends Controller
{
    //

    private $eventTypeRepository;
    private $eventType;


    public function __construct(EventTypeRepository $eventTypeRepository)
    {
        $this->eventTypeRepository = $eventTypeRepository;
        $this->eventType = new EventType();

    }


    public function store(Request $request)
    {
        $eventTypeData = $request->only(['name', 'description']);

        $validator = $this->eventType->validate($eventTypeData);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $this->eventTypeRepository->saveNew($eventTypeData);

        return redirect('events')->with('success', 'Event Type Created');
    }



}
