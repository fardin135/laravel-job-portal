<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyDashboardController extends Controller
{
    //
    public function company_dashboard()
    {
        $count_published_jobs = 0;
        if (Auth::user()->company) {
            $count_published_jobs = Auth::user()->company->jobs()->count();
        }
        return view('1_company.company_dashboard', compact('count_published_jobs'));
    }
    public function company_jobs()
    {
        $datas = collect();
        if (Auth::user()->company) {
            $datas = Auth::user()->company->jobs()->paginate(5);
        }
        $candidate_applications = collect();
        if (Auth::user()->company) {
            $candidate_applications = Auth::user()->company->jobs;
        }
        return view('1_company.company_jobs', compact('datas', 'candidate_applications'));
    }

    public function company_profile()
    {
        return view('1_company.company_profile');
    }
    public function company_plugin()
    {
        return view('1_company.company_plugin');
    }

    public function profile_completation()
    {
        return redirect()->back()->with('success','Data Inserted Successfully');
    }

}
