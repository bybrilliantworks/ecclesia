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






}