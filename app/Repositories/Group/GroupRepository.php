<?php
/**
 * Created by PhpStorm.
 * User: jidesakin
 * Date: 6/17/16
 * Time: 6:47 PM
 */

namespace App\Repositories\Group;


use App\Group;
use App\Repositories\Group\GroupRepositoryInterface;

class GroupRepository implements GroupRepositoryInterface
{

    private $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    public function create(array $group)
    {
        $this->group->name = $group['name'];
        $this->group->church_id = auth()->user()->church_id;
        $this->group->description = $group['description'];
        $this->group->email = $group['email'];

        $this->group->save();

        return $this->group;
    }
    
    public function fetchAll()
    {
        return $this->group->all();
    }

}