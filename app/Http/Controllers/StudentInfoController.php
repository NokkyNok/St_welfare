<?php

namespace App\Http\Controllers;

use App\Student_info;
use Auth;
use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Student.st_info');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $info = new Student_info();

        $info->name = $request->name;
        $info->reg = $request->reg;
        $info->birth = $request->birth;
        $info->idcard = $request->idcard;
        $info->p1 = $request->p1;
        $info->p2 = $request->p2;
        $info->county = $request->county;
        $info->sub = $request->sub;
        $info->add1 = $request->add1;
        $info->add2 = $request->add2;
        $info->course = $request->course;
        $info->school = $request->school;
        $info->dep = $request->dep;
        $info->year = $request->year;
        $info->email = Auth::user()->email;

        $info->save();
        return redirect()->back()->with('success','Personal updates added succesfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student_info  $student_info
     * @return \Illuminate\Http\Response
     */
    public function show(Student_info $student_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student_info  $student_info
     * @return \Illuminate\Http\Response
     */
    public function edit(Student_info $student_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student_info  $student_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student_info $student_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student_info  $student_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student_info $student_info)
    {
        //
    }
}
