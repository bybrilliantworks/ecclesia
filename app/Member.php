<?php

namespace App;

use App\Scopes\ChurchScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

class Member extends Model
{
    //
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    private $rules = [
        'firstName' => 'required|string|',
        'lastName' => 'required|string',
        'email' => 'required|email|unique:members,email',
        'address' => 'required|string',
        'birthday' => 'required|date',
        'maritalStatus' => 'required|string',
        'gender' => 'required|string',
        'dateJoined' => 'required|date',
        'mobileNumber' => 'required|string',
        'occupation' => 'required|string'
    ];

    public function validate(array $members)
    {
        return Validator::make($members, $this->rules);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ChurchScope);
    }


}
