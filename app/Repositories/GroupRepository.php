<?php
/**
 * Created by PhpStorm.
 * User: jidesakin
 * Date: 6/17/16
 * Time: 6:47 PM
 */

namespace App\Repositories;


use App\Group;

class GroupRepository
{

    private $group;

    public function __construct()
    {
        $this->group = new Group();
    }

    public function saveNew($group)
    {
        $this->group->name = $group['name'];
        $this->group->church_id = auth()->user()->church_id;
        $this->group->description = $group['description'];

        $this->group->save();

        return $this->group;
    }
    
    public function fetchAll()
    {
        return $this->group->all();
    }

}