<?php
/**
 * Created by PhpStorm.
 * User: jidesakin
 * Date: 4/25/16
 * Time: 6:27 AM
 */

namespace App\Repositories;


use App\Member;

class MemberRepository
{
    private $member;

    public function __construct()
    {
        $this->member = new  Member();
    }
    
    public function fetchAll()
    {
        return $this->member->all();
    }

    public function saveNew(array $member)
    {
        
        
        $this->member->first_name = $member['firstName'];
        $this->member->last_name = $member['lastName'];
        $this->member->email = $member['email'];
        $this->member->address = $member['address'];
        $this->member->birthday = $member['birthday'];
        $this->member->marital_status = $member['maritalStatus'];
        $this->member->church_id = auth()->user()->church_id;
        $this->member->date_joined = $member['dateJoined'];
        $this->member->mobile_number = $member['mobile_number'];
        $this->member->occupation = $member['occupation'];
        
        $this->member->save();
        
        return $this->member;
        
    }






}