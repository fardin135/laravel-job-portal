<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    //
    public function home()
    {
        $jobs = Job::all();
        $latestJobs = Job::latest('created_at')->take(5)->get();
        $developers = Job::where('role', 'Developer')->count();
        $designers = Job::where('role', 'Designers')->count();
        $marketers = Job::where('role', 'Marketers')->count();
        $uiUx = Job::where('role', 'UI/UX')->count();
        $others = Job::where('role', 'Others')->count();
        return view('1_pages.home', compact('jobs', 'latestJobs', 'developers', 'designers', 'marketers', 'uiUx', 'others'));
    }


    public function storeHomeApplication(Request $request)
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
    // // 'candidates.user_id
    // public function storeHomeApplication(Request $request)
    // {
    //     $user = Auth::user();
    //     if ($user && $user->candidate) {
    //         $candidate = $user->candidate;

    //         $application = new Application([
    //             'users_id' => $user->id,
    //             'candidates_id' => $candidate->id,
    //             'companies_id' => $request->input('companies_id'),
    //         ]);


    //         $application->save();

    //         redirect()->back()->with('inserted', 'Data Inserted to Application Table Successfully');
    //     } else {
    //         // Handle the case where the user has no associated candidate
    //         return redirect()->back()->with('error', 'User has no associated candidate');
    //     }
    // }

//                                     <form method="POST" action="{{ route('home.storeHomeApplication') }}">
//                                     @csrf
//                                     <input type="hidden" name="job_id" value="{{ $latestJob->id }}">
//                                     <button type="submit" class="btn btn-danger">Apply</button>
//                                 </form>
//                                 </a>
