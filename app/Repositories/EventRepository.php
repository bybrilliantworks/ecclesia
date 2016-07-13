<?php
/**
 * Created by PhpStorm.
 * User: jidesakin
 * Date: 7/9/16
 * Time: 12:20 AM
 */

namespace App\Repositories;


use App\Event;

class EventRepository
{
    
    private $event;
    
    public function __construct()
    {
        $this->event = new Event();
    }
    
    public function fetchAll()
    {
        return $this->event
            ->join('event_types', 'events.event_type_id', '=', 'event_types.id')
            ->select('events.*', 'event_types.name as event_type')
            ->get();
    }
    
    
    public function saveNew($event)
    {
        $this->event->event_type_id = $event['event_type'];
        $this->event->theme = $event['theme'];
        $this->event->description = $event['description'];
        $this->event->venue = $event['venue'];
        $this->event->ministering = $event['ministering'];
        $this->event->event_date = $event['event_date'];
        
        $this->event->save();
        
        return $this->event;
        
    }

}