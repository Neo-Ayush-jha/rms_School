<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::all();
        return view("admin/manageResult",$data);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("insert");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ayush = $request->validate([
        //     'name' => 'required',
        //     'rollNo' => 'required',
        //     'reg_no' => 'required',
        //     'school_id' => 'required',
        //     'father_name' => 'required',
        //     'mother_name' => 'required',
        //     'maths' => 'required',
        //     'sci' => 'required',
        //     'sst' => 'required',
        //     'hindi' => 'required',
        //     'eng' => 'required',
        // ]);
        // Student::create($ayush);
        // return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // return view("view",['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // return view("edit",['studnet'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // $std = $student;
        // $std->student_name = $request->student_name;
        // $std->father_name = $request->father_name;
        // $std->mother_name = $request->mother_name;
        // $std->address = $request->address;
        // $std->contact = $request->contact;
        // $std->email = $request->email;
        // $std->dob = $request->dob;
        // $std->class = $request->class;
        // $std->save();
        // return redirect()->route("student.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // $student->destroy();
        // return redirect()->route('student.index');
    }
}
