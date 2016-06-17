<?php

namespace App\Http\Controllers;

use App\Group;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class GroupController extends Controller
{
    //

    private $groupRepository;

    private $group;

    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
        $this->group = new Group();
    }

    public function index()
    {
        $groups = $this->groupRepository->fetchAll();

        return view('groups.index')->with(['groups' => $groups]);
    }


    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $validator = $this->group->validate($request->all());

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $this->groupRepository->saveNew($request->all());

        return redirect('groups')->with('success', "Group has been successfully created");
    }


}
