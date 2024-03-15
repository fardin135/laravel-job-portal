<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsPageController extends Controller
{
    public function blogs(){
        return view('1_pages.blogs');
    }
}
