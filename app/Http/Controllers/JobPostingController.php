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
        if (Auth::user()->user_role === 'Candidate') {
            return redirect()->back()->with('success', 'You have no permission to create a job');
        } else {
            return view('forms.jobPostingForm');
    }
    }

    public function insert_jobs(Request $request)
    {
            $data = $request->validate([
                'company_name' => 'required',
                'job_title' => 'required',
                'role' => 'required',
                'salary' => 'required',
            ]);
            $job = new Job;
            $job->user_id = Auth::user()->id;
            $job->company_id = Auth::user()->company->id;
            $job->company_name = $request->company_name;
            $job->job_title = $request->job_title;
            $job->role = $request->role;
            $job->job_type = $request->job_type;
            $job->vacancy = $request->vacancy;
            $job->deadline = $request->deadline;
            $job->required_skills = json_encode($request->required_skills);
            $job->location = $request->location;
            $job->description = $request->description;
            $job->responsibility = $request->responsibility;
            $job->qualifications = $request->qualifications;
            $job->salary = $request->salary;
            $job->save();
            return redirect()->route('jobs')->with('success', 'data Inserted Successfully');
    }
}

// Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, reiciendis! Temporibus dolorem iusto officia quo asperiores enim. Tempora, fuga facilis.
// Lorem ipsum dolor sit amet consectetur adipisicing elit. Non facere, tempore blanditiis distinctio eligendi laudantium. Officiis labore expedita nihil a assumenda earum. Esse fugit dolorum similique amet iure fuga modi.
