<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['schools'] = School::all();
        return view("admin/manageSchool",$data);
    }

    public function home(){
        return view("school/home");
    }
    public function login(Request $res){
        if($res->method() == "POST"){

        }

        return view("school/login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/insertSchool");
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
            'email'=>'required',
            'password'=>'required',
            'school_name'=>'required',
            'school_code'=>'required',
            'address'=>'required',
            'state'=>'required',
            'city'=>'required',
            'school_reg_no'=>'required',
            'est_year'=>'required',
        ]);
        
        $account = new User();
        $account->name=$request->name;
        $account->email=$request->email;
        $account->password=Hash::make($request->password);
        $account->userType=1;
        $userId=$account->save();

        $school = new School();
        $school->school_name=$request->school_name;
        $school->school_code=$request->school_code;
        $school->address=$request->address;
        $school->state=$request->state;
        $school->city=$request->city;
        $school->school_reg_no=$request->school_reg_no;
        $school->est_year=$request->est_year;
        $school->user_id=$userId;
        $school->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        // $school->delete();
    }
}
