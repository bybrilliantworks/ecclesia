<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Member;
use Illuminate\Http\Request;
use App\Repositories\MemberRepository;


class MemberController extends Controller
{
    //
    private $memberRepository;
    private $member;

    public function __construct(MemberRepository $memberRepository)
    {
        $this->middleware('auth');
        $this->memberRepository = $memberRepository;
        $this->member = new Member();
    
    }

    public function index()
    {
        $members = $this->memberRepository->fetchAll();

        return view('members.index')->with(['members' => $members]);

    }
    
    public function create()
    {
        return view('members.create');
    }
    
    
    public function store(Request $request)
    {

        $validator = $this->member->validate($request->all());

        if ($validator->fails())
        {

            return back()->withErrors($validator)->withInput();
        }

        $this->memberRepository->saveNew($request->all());

        return redirect('members')->with('success', "Member has been created");
    }

}
