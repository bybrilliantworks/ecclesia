<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EventType extends Model
{
    //
    
    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string'
        ];
    }
    
    public function validate($eventType)
    {
        return Validator::make($eventType, $this->rules());
    }
}
