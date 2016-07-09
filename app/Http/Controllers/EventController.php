<?php

namespace App\Http\Controllers;

use App\Event;
use App\Repositories\EventTypeRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class EventController extends Controller
{
    //

    private $eventRepository;

    private $event;

    public function __construct(EventTypeRepository $eventTypeRepository)
    {
        $this->eventRepository = $eventTypeRepository;
        $this->event = new Event();

    }


    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {


    }

    public function destroy($id)
    {

    }
    

}
