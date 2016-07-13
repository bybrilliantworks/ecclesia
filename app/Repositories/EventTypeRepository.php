<?php
/**
 * Created by PhpStorm.
 * User: jidesakin
 * Date: 7/9/16
 * Time: 12:20 AM
 */

namespace App\Repositories;


use App\EventType;

class EventTypeRepository
{
    
    private $eventType;
    
    public function __construct()
    {
        $this->eventType = new EventType();   
    }
    
    
    public function fetchAll()
    {
        return $this->eventType->all();
    }
    
    
    public function saveNew($eventType)
    {
        $this->eventType->name = $eventType['name'];
        $this->eventType->description = $eventType['description'];
        $this->eventType->updated_at = $this->eventType->created_at = \Carbon\Carbon::now();
        
        $this->eventType->save();
        
        return $this->eventType;
    }

}