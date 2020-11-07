<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(){
        $Applicant=Applicant::all();

        return view('applicant_list')->with('applicant_list', $Applicant);
    }
    public function show($id){
        $Applicant = Applicant::findOrFail($id);
        return view('post')->with('applicant_list',$Applicant);
    }
    public function edit($id){
        $Applicant=Applicant::findOrFail($id);
        return view('edit')->with('applicant_list',$Applicant);
    }
    public function update(Request $request, $id)
    {
        $Applicant = Applicant::findOrFail($id);
        $Applicant->update($request->all());
        return redirect()->back();
    }
    public function save (Request $request){
        request()->validate([
            'name'=> 'required',
            'surname'=> 'required',
            'position'=> 'required',
            'phone' => 'required',
            'is_hired'=> 'required'
        ]);

    }
}
