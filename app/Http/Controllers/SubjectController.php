<?php

namespace App\Http\Controllers;
use App\Models\subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{

    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['subjectItems' => subjects::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }

  
    public function createSubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubjectList = new subjects();
        $newSubjectList->subject_title = $request->sbj_title;
        $newSubjectList->subject_description = $request->sbj_descr;
        $newSubjectList->subject_price = $request->sbj_price;
        $newSubjectList->subject_learningHours = $request->sbj_learnHours;
        $newSubjectList->save();

        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }


    
}
