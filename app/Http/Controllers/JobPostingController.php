<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobPostingController extends Controller
{
    //
    public function form_view()
    {
        return view('1_forms.jobPostingForm');
    }

    public function insert_jobs(Request $request)
    {
        $data = $request->validate([
            'company_name' => 'required',
            'job_title' => 'required',
            'role' => 'required',
            'salary' => 'required',
        ]);
        $user = new Job;
        $user->company_id = Auth::user()->company->id;
        $user->company_name = $request->company_name;
        $user->job_title = $request->job_title;
        $user->role = $request->role;
        $user->required_skills = json_encode($request->required_skills);
        $user->location = $request->location;
        //$user->description = $request->description;
        $user->salary = $request->salary;
        $user->save();
        return redirect()->back()->with('success', 'data Inserted Successfully');
    }
}
