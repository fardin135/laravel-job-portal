<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function admin_dashboard(){
        $job = Job::count();
        return view('1_admin.admin_dashboard',compact('job'));
    }
    public function admin_companies(){
        return view('1_admin.admin_companies');
    }
    public function admin_jobs()
    {
        $all_jobs = Job::all();
        return view('1_admin.admin_jobs',compact('all_jobs'));
    }
    public function admin_employee()
    {
        return view('1_admin.admin_employee');
    }
    public function admin_blogs()
    {
        return view('1_admin.admin_blogs');
    }
    public function admin_pages()
    {
        return view('1_admin.admin_pages');
    }
    public function admin_plugins()
    {
        return view('1_admin.admin_plugins');
    }
}