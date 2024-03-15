<?php

namespace App\Http\Controllers;

use App\Models\Jobpulse;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    //
    public function about(){
        $company_info = Jobpulse::first();
        return view('1_pages.about', compact('company_info'));
    }
}
