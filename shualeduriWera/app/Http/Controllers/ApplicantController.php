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
    public function update(Request $request, $id){
        request()->validate([
            'name'=>'required',
            'surname'=>'required',
            'position'=>'required',
            'phone'=>'required'
        ]);
        $applicant = Applicant::findOrFail($id);
        $applicant->update($request->all());
        return redirect()->back();
    }
}
