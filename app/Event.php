<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Event extends Model
{
    //

    public function rules()
    {
        return [
            'event_type' => 'required|integer',
            'theme' => 'required|string',
            'description' => 'required|string',
            'event_date' => 'required',
            'venue' => 'required|string',
            'ministering' => 'required|string',
        ];
    }

    public function validate($event)
    {
        return Validator::make($event, $this->rules());
    }
}
