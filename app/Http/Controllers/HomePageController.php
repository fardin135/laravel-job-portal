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
        $latestJobs = Job::latest('created_at')->paginate(5);
        $developers = Job::where('role', 'Developer')->count();
        $designers = Job::where('role', 'Designers')->count();
        $marketers = Job::where('role', 'Marketers')->count();
        $uiUx = Job::where('role', 'UI/UX')->count();
        $others = Job::where('role', 'Others')->count();
        return view('main_pages.home', compact('latestJobs', 'developers', 'designers', 'marketers', 'uiUx', 'others'));
    }
}

