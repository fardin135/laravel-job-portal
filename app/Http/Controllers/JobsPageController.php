<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsPageController extends Controller
{
    public function jobs(Request $request, $category = null)
    {
        $search = $request['search'] ?? '';

        if ($search != '') {
            $jobs = Job::where("job_title", "LIKE", "%" . $search . "%")->paginate(5);
        } elseif ($category) {
            $jobs = Job::where("role", "LIKE", "%" . $category . "%")->paginate(5);
        } else {
            $jobs = Job::paginate(5);
        }

        $developers_count = Job::where('role', 'Developer')->count();
        $designers_count = Job::where('role', 'Designers')->count();
        $marketers_count = Job::where('role', 'Marketers')->count();
        $uiUx_count = Job::where('role', 'UI/UX')->count();
        $others_count = Job::where('role', 'Others')->count();
        return view('1_pages.jobs', compact('jobs', 'developers_count', 'designers_count', 'marketers_count', 'uiUx_count', 'others_count'));
    }
    public function storeJobsApplication(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        } else {
            $job_table = Job::find($request->job_id);
            $application = new Application;
            $application->job_id = $request->job_id;
            $application->candidate_id = Auth::user()->candidate->id;
            $application->company_user_id = $job_table->company->id; //$job_table->company->id;
            // dd($application);
            $application->save();
            return redirect()->back()->with('success', 'data Inserted Successfully');
        }
    }
}
