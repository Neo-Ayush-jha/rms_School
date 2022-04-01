<?php

namespace App\Http\Controllers;

use App\Models\{School,User,Student};
// use App\Models\User;
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
        return view("admin/ ",$data);
    }

    public function home(Request $req){
        $user= User::where("email",session("user"))->first();
        $data["school"]= School::with("user")->where("user_id",$user->id)->first();
        return view("school/home" ,$data);
    }
    public function login(Request $request){
        if($request->method() == "POST"){
            $email= $request->email;
            $password= $request->password;

            $user = user::where([["email",$email],["userType",1]])->first();
            $user = User::where("email",$email)->first();

        if($user){
            // echo "email exist";
            if(Hash::check($password,$user->password)){
                $request->session()->put("user",$email);
                return redirect()->route('school.dashboard');
                // echo "lol";
            }
            else{
                echo "not password is good";
            }
        }
        else{
            echo "email not found";
        }
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

    public function insertResult(Request $request){
        // dd($request);
        if($request->method()=="POST"){
            $user = User::where("email",session("user"))->first();
            $school = School::where("user_id",$user->id)->first();
            
            $request->validate([
                'name'=>'required',
                'rollNo'=>'required',
                'reg_no'=>'required',
                'father_name'=>'required',
                'mother_name'=>'required',
                'maths'=>'required',
                'sci'=>'required',
                'sst'=>'required',
                'hindi'=>'required',
                'eng'=>'required',
            ]);
            
            
            $std= new Student();
            $std->name = $request->name;
            $std->rollNo = $request->rollNo;
            $std->reg_no = $request->reg_no;
            $std->father_name = $request->father_name;
            $std->mother_name = $request->mother_name;
            $std->maths = $request->maths;
            $std->sci = $request->sci;
            $std->sst = $request->sst;
            $std->eng = $request->eng;
            $std->hindi = $request->hindi;
            $std->school_id = $school->id;
            $std->save();
            
            return view("school/insertResult");
        }
        return view("school/insertResult");
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
