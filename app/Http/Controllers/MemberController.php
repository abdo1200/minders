<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showallmember']);
    }
    
    public function showallmember()
    {
        $members=Member::all();
        return view('/allmember',compact('members'));
    }

    public function index()
    {
        $members=Member::all();
        return view('members.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'phone_number'=>'required',
            'gmail'=>'required',
            'postion'=>'required'
        ]);
        $member=new Member();
        $member->name=$request->name;
        $member->image=$request->image;
        $member->phone_number=$request->phone_number;
        $member->gmail=$request->gmail;
        $member->postion=$request->postion;
        $member->save();

        return redirect('/members/index.blade.php');
    }


    public function edit($id)
    {
        $member=Member::find($id);
        return view('members.edit',compact('member'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'phone_number'=>'required',
            'gmail'=>'required',
            'postion'=>'required'
        ]);
        $member =Member::find($id);
        $member->name=$request->name;
        $member->image=$request->image;
        $member->phone_number=$request->phone_number;
        $member->gmail=$request->gmail;
        $member->postion=$request->postion;
        $member->save();
        return redirect('/members/index.blade.php');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member =Member::find($id);
        $member->delete();

        return redirect('/members/index.blade.php');
    }
}
