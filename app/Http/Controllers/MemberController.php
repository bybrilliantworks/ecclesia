<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Services\Member\MemberServiceInterface as MemberService;

class MemberController extends Controller
{
    private $memberService;

    public function __construct(MemberService $memberService)
    {
        $this->middleware('auth');
        $this->memberService = $memberService;
    }

    public function index()
    {
        $members = $this->memberService->fetchAll();

        return view('members.index')->with(['members' => $members]);
    }

    public function show(int $id)
    {
        $member = $this->memberService->getMember($id);
        return view('members.view')->with(['member' => $member]);
    }

    public function create()
    {
        return view('members.create');
    }

    public function edit(int $id)
    {
        $member = $this->memberService->getMember($id);

        return view('members.edit')->with(['member' => $member]);
    }

    public function store(StoreMemberRequest $request)
    {
        $member = $this->memberService->createMember($request->all());

        return redirect('members')->with('info', "Member has been created");
    }

    public function update(UpdateMemberRequest $request, int $id)
    {
        $member = $this->memberService->updateMember($request->all(), $id);

        return \redirect('members')->with('success', 'Member has been updated');
    }

}
