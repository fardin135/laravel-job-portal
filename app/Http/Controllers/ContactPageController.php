<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactPageController extends Controller
{
    public function contact(){
        return view('main_pages.contact');
    }
    public function contact_us(Request $request){
        $data = $request->validate([
            'contact_form_name' => 'required',
            'contact_form_email' => 'required',
            'contact_form_mobile' => 'required',
        ]);
        $user = new Contact;
        $user->contact_form_name = $request->contact_form_name;
        $user->contact_form_email = $request->contact_form_email;
        $user->contact_form_subject = $request->contact_form_subject;
        $user->contact_form_mobile = $request->contact_form_mobile;
        $user->contact_form_query = $request->contact_form_query;
        $user->save();
        return redirect()->back()->with('success','Data Inserted Successfully');
    }
}
