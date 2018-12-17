<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

class Group extends Model
{
    //

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'email' => 'email'
    ];

    public function validate($data)
    {
        return Validator::make($data, $this->rules);
    }

    public function primarayMembers()
    {
        $this->hasMany('App\Member', 'primary_department_id');
    }

    public function secondaryMembers()
    {
        $this->hasMany('App\Member', 'secondary_department_id');
    }
}
