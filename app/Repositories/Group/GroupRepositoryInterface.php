<?php

namespace App\Repositories\Group;

interface GroupRepositoryInterface {

    public function create(array $group);

    public function fetchAll();

}