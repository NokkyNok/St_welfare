<?php

namespace App\Http\Controllers;

use App\Student_info;
use Illuminate\Http\Request;
use App\Background;
use App\Curriculum;
use App\Accomodation;

class AdministratorController extends Controller
{


    public function m_student()
    {
        $info = Student_info::all();
        return view('Admin.m_stude',compact('info'));
    }

    public function b_student()
    {
        $info = Background::all();
        return view('Admin.m_back',compact('info'));
    }


    //viewing //
    public function background($id)
    {
        $back = Student_info::find($id);

        $info = Background::where('email',$back->email)->first();

        return view('Admin.Viewback',compact('info'));

    }

    public function sports($id)
    {
        $back = Student_info::find($id);

        $info = Curriculum::where('email',$back->email)->first();

        return view('Admin.Viewco',compact('info'));
        
    }

    public function accomodation($id)
    {
        $back = Student_info::find($id);

        $info = Accomodation::where('email',$back->email)->first();

        return view('Admin.Viewacc',compact('info'));
        
    }




    public function viewb()
    {
        $p = Background::all();
        return view('Admin.Background',compact('p'));
        
    }

    public function viewc()
    {
        $p = Curriculum::all();
        return view('Admin.Sport',compact('p'));
        
    }

    public function viewa()
    {
        $p = Accomodation::all();
        return view('Admin.Accomodation',compact('p'));
        
    }

   



    //deleting information on student//


    public function bdelete($id)
    {

        Background:: where('id',$id)->delete();
        return  redirect()->back()->with('success','This Background information deleted succesfully');
        
    }

    public function pdelete($id)
    {
        Personal:: where('id',$id)->delete();
        return  redirect()->back()->with('success','This Personal information deleted succesfully');
        
    }

    public function cdelete($id)
    {
        Curriculum:: where('id',$id)->delete();
        return  redirect()->back()->with('success','This Curriculum information deleted succesfully');
    }

    public function adelete($id)
    {
        Accomodation:: where('id',$id)->delete();
        return  redirect()->back()->with('success','This Accomodation information deleted succesfully');
        
    }



    // updating fields //

    public function backup($id)
    {
        $p = Background::find($id);
        return view('Admin.BackUp',compact('p'));

    }

    public function coup($id)
    {
        $p = Curriculum::find($id);
        return view('Admin.coUp',compact('p'));

    }

    public function Accup($id)
    {
        $p =  Accomodation:: find($id);
        return view('Admin.AccUp',compact('p'));

    }


public function breport()
    {
        $supply = Background::all();

		$output= '
		<h3 align="center">Background information data</h3>
		<table width="100%" style="border-collapse: collapse; border: 0px;">
		<tr>
		<th style="border: 1px solid; padding:12px;" width="20%">Stutend email</th>
		<th style="border: 1px solid; padding:12px;" width="30%">Guardian contact</th>
		<th style="border: 1px solid; padding:12px;" width="15%">Siblings</th>

	</tr>
		';
		foreach($supply as $supply)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$supply->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->contact.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->siblings.'</td>

      </tr>
      ';
     }
     $output .= '</table>';
		
	 $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($output);
     return $pdf->stream();

    }


    public function creport()
    {
        $supply = Curriculum::all();

		$output= '
		<h3 align="center">Curriculum welfare data</h3>
		<table width="100%" style="border-collapse: collapse; border: 0px;">
		<tr>
		<th style="border: 1px solid; padding:12px;" width="20%">Stutend email</th>
		<th style="border: 1px solid; padding:12px;" width="30%">sport</th>
		<th style="border: 1px solid; padding:12px;" width="15%">Drama Event</th>

	</tr>
		';
		foreach($supply as $supply)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$supply->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->sport.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->drama_category.'</td>

      </tr>
      ';
     }
     $output .= '</table>';
		
	 $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($output);
     return $pdf->stream();

    }

    public function areport()
    {
        $supply = Accomodation::all();

		$output= '
		<h3 align="center">Accomodation data</h3>
		<table width="100%" style="border-collapse: collapse; border: 0px;">
		<tr>
        <th style="border: 1px solid; padding:12px;" width="20%">email</th>
		<th style="border: 1px solid; padding:12px;" width="20%">state</th>
		<th style="border: 1px solid; padding:12px;" width="30%"> Hostel Name</th>
		

	</tr>
		';
		foreach($supply as $supply)
     {
      $output .= '
      <tr>
      <td style="border: 1px solid; padding:12px;">'.$supply->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->state.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supply->hostel.'</td>
       

      </tr>
      ';
     }
     $output .= '</table>';
		
	 $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($output);
     return $pdf->stream();

    }


}
