<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_info;
use App\Background;
use App\Curriculum;
use App\Accomodation;
use Auth;

class StudentController extends Controller
{

    public function info()
    {

        $info = Student_info::where('email',Auth::user()->email)->first();
        return view('Student.info',compact('info'));
    }

    public function edit($id)
    {
        $info = Student_info::find($id);
        return view('Student.edit',compact('info'));
    }

    public function update(Request $request, $id)
    {
        $info = Student_info::find($id);
        
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

        $info->save();

        return redirect()->back()->with('success','Update successful');
    }




    //Background info
    public function background()
    {
        
        return view('Student.parent_info');
    }
    public function parentalsubmit(Request $request)
    {
        $back = new Background();

        $back->parent = $request->parent;
        $back->contact = $request->contact;
        $back->siblings = $request->siblings;
        $back->residence = $request->residence;
        $back->femployment = $request->femployment;
        $back->memployment = $request->memployment;
        $back->salary = $request->salary;
        $back->email = Auth::user()->email;

        $back->save();

        return redirect()->back()->with('success','Background information has been succesfully received in our systme');
    }








    // co curriculum //
    public function cocu()
    {
        return view('Student.co');
    }

    public function co(Request $request)
    {
        $co = new Curriculum();

        $co->email = Auth::user()->email;
        $co->sport = $request->sport;
        $co->drama = $request->drama;
        $co->drama_category = $request->drama_category;

        $co->save();

        return redirect()->back()->with('success','Dram info added succesfully');
        
    }


    public function acc()
    {
        return view('Student.acc');
    }


    public function ac(Request $request)
    {
        $co = new Accomodation();

        $co->email = Auth::user()->email;
        $co->state = $request->state;
        $co->hostel = $request->hostel;
        

        $co->save();

        return redirect()->back()->with('success','Drama info added succesfully');
    }


    public function login()
    {
        return view('Student.login');
    }






    // student viewing info //
    public function viewb()
    {
        $p = Background::where('email',Auth::user()->email)->first();
        return view('Student.vback',compact('p'));
        
    }

    public function viewc()
    {
        $p = Curriculum::where('email',Auth::user()->email)->first();
        return view('Student.vcurr',compact('p'));
        
    }

    public function viewa()
    {
        $p = Accomodation::where('email',Auth::user()->email)->first();
        return view('Student.vacc',compact('p'));
    }




    public function dashboard()
    {
        return view('Student.board');
    }
        


    


}
