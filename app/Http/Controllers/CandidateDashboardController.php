<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfessionalAndExperiences;

class CandidateDashboardController extends Controller
{
    //
    public function candidate_dashboard(){
        $count_applied_jobs = 0;
        if (Auth::user()->candidate) {
            $count_applied_jobs = Auth::user()->candidate->applications()->count();
        }
        return view('1_candidate.candidate_dashboard', compact('count_applied_jobs'));
    }
            public function candidate_jobs(){
                $users = collect();
                if (Auth::user()->candidate) {
                    $users = Auth::user()->candidate->applications()->paginate(5);
                }
                return view('1_candidate.candidate_jobs', compact('users'));
            }
                public function candidate_profile(){
                    $basicInfo = BasicInfo::where('candidate_id', Auth::user()->candidate->id);
                    return view('1_candidate.candidate_profile',compact('basicInfo'));
                }
                    public function candidate_basic_info_form(){
                        return view('1_candidate.candidate_basic_info_form');
                    }
                        public function candidate_edu_info_form(){
                            return view('1_candidate.candidate_edu_info_form');
                        }
                            public function candidate_professional_and_experiences_form(){
                                return view('1_candidate.candidate_professional_and_experiences_form');
                            }
    public function save_basic_info(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'fathers_name' => 'nullable|string',
            'mothers_name' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'blood_group' => 'nullable|string',
            'nid_no' => 'nullable|string',
            'passport_no' => 'nullable|string',
            'cell_no' => 'nullable|string',
            'emergency_contact_no' => 'nullable|string',
            'emergency_contact_email' => 'nullable|email',
            'whatsapp' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'facebook' => 'nullable|string',
            'github' => 'nullable|string',
            'behance_dribble' => 'nullable|string',
            'portfolio_website' => 'nullable|string',
        ]);
        // Create a new BasicInfo instance
        $user = new BasicInfo;
        $user->candidate_id = Auth::user()->candidate->id;
        $user->full_name = $request->full_name;
        $user->fathers_name = $request->fathers_name;
        $user->mothers_name = $request->mothers_name;
        $user->birth_date = $request->birth_date;
        $user->nid_no = $request->nid_no;
        $user->passport_no = $request->passport_no;
        $user->cell_no = $request->cell_no;
        $user->emergency_contact_no = $request->emergency_contact_no;
        $user->emergency_contact_email = $request->emergency_contact_email;
        $user->whatsapp = $request->whatsapp;
        $user->linkedin = $request->linkedin;
        $user->facebook = $request->facebook;
        $user->github = $request->github;
        $user->behance_dribble = $request->behance_dribble;
        $user->portfolio_website = $request->portfolio_website;
        $user->completed_profile = 1;
        $user->save();
        return redirect()->back()->with('success', 'data Inserted Successfully');
    }

    public function save_education_info(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'bachelor_degree_type' => 'nullable|string',
            'bachelor_institution_name' => 'nullable|string',
            'bachelor_department' => 'nullable|string',
            'bachelor_passing_year' => 'nullable|string',
            'bachelor_cgpa' => 'nullable|string',
            'hsc_degree_type' => 'nullable|string',
            'hsc_institution_name' => 'nullable|string',
            'hsc_department' => 'nullable|string',
            'hsc_passing_year' => 'nullable|string',
            'hsc_cgpa' => 'nullable|string',
            'ssc_degree_type' => 'nullable|string',
            'ssc_institution_name' => 'nullable|string',
            'ssc_department' => 'nullable|string',
            'ssc_passing_year' => 'nullable|string',
            'ssc_cgpa' => 'nullable|string',
        ]);

        // Create a new ProfessionalAndExperience instance
        $education = new ProfessionalAndExperiences;
        $education->candidate_id = Auth::user()->candidate->id;
        $education->bachelor_degree_type = $request->bachelor_degree_type;
        $education->bachelor_institution_name = $request->bachelor_institution_name;
        $education->bachelor_department = $request->bachelor_department;
        $education->bachelor_passing_year = $request->bachelor_passing_year;
        $education->bachelor_cgpa = $request->bachelor_cgpa;

        $education->hsc_degree_type = $request->hsc_degree_type;
        $education->hsc_institution_name = $request->hsc_institution_name;
        $education->hsc_department = $request->hsc_department;
        $education->hsc_passing_year = $request->hsc_passing_year;
        $education->hsc_cgpa = $request->hsc_cgpa;

        $education->ssc_degree_type = $request->ssc_degree_type;
        $education->ssc_institution_name = $request->ssc_institution_name;
        $education->ssc_department = $request->ssc_department;
        $education->ssc_passing_year = $request->ssc_passing_year;
        $education->ssc_cgpa = $request->ssc_cgpa;
        $education->save();
        return redirect()->back()->with('success', 'Education Information Saved Successfully');
    }

    public function save_professional_and_experiences_form(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'bachelor_degree_type' => 'nullable|string',
            'bachelor_institution_name' => 'nullable|string',
            'bachelor_department' => 'nullable|string',
            'bachelor_passing_year' => 'nullable|string',
            'bachelor_cgpa' => 'nullable|string',
            'hsc_degree_type' => 'nullable|string',
            'hsc_institution_name' => 'nullable|string',
            'hsc_department' => 'nullable|string',
            'hsc_passing_year' => 'nullable|string',
            'hsc_cgpa' => 'nullable|string',
            'ssc_degree_type' => 'nullable|string',
            'ssc_institution_name' => 'nullable|string',
            'ssc_department' => 'nullable|string',
            'ssc_passing_year' => 'nullable|string',
            'ssc_cgpa' => 'nullable|string',
        ]);

        // Create a new ProfessionalAndExperience instance
        $education = new ProfessionalAndExperiences;
        $education->candidate_id = Auth::user()->candidate->id;
        $education->bachelor_degree_type = $request->bachelor_degree_type;
        $education->bachelor_institution_name = $request->bachelor_institution_name;
        $education->bachelor_department = $request->bachelor_department;
        $education->bachelor_passing_year = $request->bachelor_passing_year;
        $education->bachelor_cgpa = $request->bachelor_cgpa;

        $education->hsc_degree_type = $request->hsc_degree_type;
        $education->hsc_institution_name = $request->hsc_institution_name;
        $education->hsc_department = $request->hsc_department;
        $education->hsc_passing_year = $request->hsc_passing_year;
        $education->hsc_cgpa = $request->hsc_cgpa;

        $education->ssc_degree_type = $request->ssc_degree_type;
        $education->ssc_institution_name = $request->ssc_institution_name;
        $education->ssc_department = $request->ssc_department;
        $education->ssc_passing_year = $request->ssc_passing_year;
        $education->ssc_cgpa = $request->ssc_cgpa;
        $education->save();
        return redirect()->back()->with('success', 'Education Information Saved Successfully');
    }
    
}
