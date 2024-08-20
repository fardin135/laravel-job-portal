<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\SavedJob;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobDetailsController extends Controller
{
    public function show_job_details($id)
    {
        $job_details = Job::findOrFail($id);
        $required_skills = json_decode($job_details->required_skills);
        ($company_details_info = $job_details->company->completed_company_details ? $job_details->company->companyDetail->company_details : "No Data Available");

        return view('main_pages.job_details', compact('job_details', 'company_details_info', 'required_skills'));
    }
}
