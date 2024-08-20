<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\SavedJob;
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
            $jobs = Job::latest('created_at')->paginate(5);
        }

        $developers_count = Job::where('role', 'Developer')->count();
        $designers_count = Job::where('role', 'Designers')->count();
        $marketers_count = Job::where('role', 'Marketers')->count();
        $uiUx_count = Job::where('role', 'UI/UX')->count();
        $others_count = Job::where('role', 'Others')->count();
        return view('main_pages.jobs', compact('jobs', 'developers_count', 'designers_count', 'marketers_count', 'uiUx_count', 'others_count'));
    }

        public function savedJob(Request $request)
        {
            if (Auth::user()->user_role === "Candidate") {
                $jobInfo = Job::find($request->job_id);
                $saved_job = new SavedJob;
                $saved_job->user_id = Auth::id();
                $saved_job->candidate_id = Auth::user()->candidate->id;
                $saved_job->company_id = $jobInfo->company->id;
                $saved_job->job_id = $jobInfo->id;
                $saved_job->save();

                return redirect()->back()->with('success', 'Successfully Liked The Job!!!');
            } else {
                return redirect()->back()->with('error', 'Sorry!!! Only candidates can apply to a job ');
            }
        }

            public function storeJobApplication(Request $request)
            {
                if (Auth::user()->user_role === "Candidate") {
                    $jobInfo = Job::find($request->job_id);
                    $application = new Application;
                    $application->user_id = Auth::id();
                    $application->candidate_id = Auth::user()->candidate->id;
                    $application->company_id = $jobInfo->company->id;
                    $application->job_id = $jobInfo->id;
                    // dd($application);
                    $application->save();

                    return redirect()->back()->with('success', 'Congratulation!!! Successfully Applied');
                } else {
                    return redirect()->back()->with('error', 'Sorry!!! Only candidates can apply to a job ');
                }
            }
        
                public function savedJobDestroy(Request $request)
                {
                    $job_id = $request->job_id;
                    $job = SavedJob::where('job_id', $job_id);
                    $job->delete();
                    return redirect()->back()->with('success', 'Successfully Unliked The Job!!!');
                }
                    public function storeJobApplicationDestroy(Request $request)
                    {
                        $job = Application::where('job_id', $request->job_id);
                        $job->delete();
                        return redirect()->back()->with('success', 'Successfully Removed The Application!!!');
                    }

}
