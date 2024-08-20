<?php

namespace App\Http\Controllers;

use App\Models\EduInfo;
use App\Models\BasicInfo;
use App\Models\Candidate;
use Illuminate\Http\Request;
// use Intervention\Image\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfessionalAndExperiences;

class CandidateDashboardController extends Controller
{
    //
    public function candidate_dashboard(){
            $count_applied_jobs = Auth::user()->applications->count();
                $count_saved_jobs = Auth::user()->savedJobs->count();
                    $completed_profile = Auth::user()->candidate;
        return view('candidate.candidate_dashboard', compact('count_applied_jobs', 'count_saved_jobs', 'completed_profile'));
    }
        public function candidate_saved_jobs(){
                $savedJobs = Auth::user()->savedJobs;
            return view('candidate.candidate_saved_jobs', compact('savedJobs'));
        }
            public function candidate_applied_jobs(){
                    $appliedJobs = Auth::user()->applications;
                return view('candidate.candidate_applied_jobs', compact('appliedJobs'));
            }
                public function candidate_profile(){
                    return view('candidate.candidate_profile');
                }
                    public function candidate_basic_info_form(){
                        return view('candidate.candidate_basic_info_form');
                    }
                        public function candidate_edu_info_form(){
                            return view('candidate.candidate_edu_info_form');
                        }
                            public function candidate_professional_and_experiences_form(){
                                return view('candidate.candidate_professional_and_experiences_form');
                            }

    public function save_basic_info(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'cell_no' => 'required',
            'emergency_contact_no' => 'required',
            'candidate_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->candidate_image;
        $image_extension = $image->getClientOriginalExtension();
        $fileNameToStore = 'image-' . md5(uniqid()) . time() . '.' . $image_extension;
        // Image::make($image)->resize(100, 100)->save(public_path('images/upload/candidates/' . $fileNameToStore));
        $find_candidate = BasicInfo::where('user_id', Auth::id())->first();

        $basicInfo = new BasicInfo;
        $basicInfo->user_id = Auth::user()->id;
        $basicInfo->candidate_id = Auth::user()->candidate->id;
        $basicInfo->full_name = $request->full_name;
        $basicInfo->candidate_image = $fileNameToStore;
        $basicInfo->fathers_name = $request->fathers_name;
        $basicInfo->mothers_name = $request->mothers_name;
        $basicInfo->birth_date = $request->birth_date;
        $basicInfo->blood_group = $request->blood_group;
        $basicInfo->cell_no = $request->cell_no;
        $basicInfo->emergency_contact_no = $request->emergency_contact_no;
        $basicInfo->emergency_contact_email = $request->emergency_contact_email;
        $basicInfo->whatsapp = $request->whatsapp;
        $basicInfo->linkedin = $request->linkedin;
        $basicInfo->facebook = $request->facebook;
        $basicInfo->github = $request->github;
        $basicInfo->portfolio_website = $request->portfolio_website;
        $saved = $basicInfo->save();
        if ($saved) {
                $candidate = Candidate::where('user_id', Auth::id());
                $updated = $candidate->update([
                    'completed_basic_infos' => 1,
                ]);
                $image->move(public_path('images/upload/candidates'), $fileNameToStore);
        return redirect()->route('candidate.profile')->with('success', 'Data Inserted Successfully');
            } else {
            return redirect()->route('candidate.profile')->with('error', 'Failed To Insert Data');
            }
        }

    public function save_education_info(Request $request){
        $education = new EduInfo;
        $education->user_id = Auth::user()->id;
        $education->candidate_id = Auth::user()->candidate->id;
        $education->bachelor_degree_type = $request->bachelor_degree_type;
        $education->bachelor_institution_name = $request->bachelor_institution_name;
        $education->bachelor_department = $request->bachelor_department;
        $education->bachelor_passing_year = $request->bachelor_passing_year;
        $education->bachelor_cgpa = $request->bachelor_cgpa;
        $education->hsc_institution_name = $request->hsc_institution_name;
        $education->hsc_passing_year = $request->hsc_passing_year;
        $education->hsc_cgpa = $request->hsc_cgpa;
        $education->ssc_institution_name = $request->ssc_institution_name;
        $education->ssc_passing_year = $request->ssc_passing_year;
        $education->ssc_cgpa = $request->ssc_cgpa;
        $saved = $education->save();
        if ($saved) {
            $candidate = Candidate::where('user_id', Auth::id());
            $updated = $candidate->update([
                'completed_edu_infos' => 1,
            ]);
            return redirect()->route('candidate.profile')->with('success', 'Data Inserted Successfully');
        } else {
            return redirect()->route('candidate.profile')->with('error', 'Failed To Insert Data');
        }
    }

    public function save_professional_and_experiences_form(Request $request)
    {
            $request->validate([
            'training_name' => 'nullable|string|max:255',
            'training_institution_name' => 'nullable|string|max:255',
            'training_completed_time' => 'nullable|date',
            'job_exp_designation' => 'nullable|string|max:255',
            'job_exp_company_name' => 'nullable|string|max:255',
            'job_exp_joining_date' => 'nullable|date',
            'job_exp_departure_date' => 'nullable|date',
            'skills' => 'nullable|string',
            'current_salary' => 'nullable|string|max:255',
            'expected_salary' => 'nullable|string|max:255',
        ]);

        $saved = ProfessionalAndExperiences::create([
            'user_id' => Auth::user()->id,
            'candidate_id' => Auth::user()->candidate->id,
            'training_name' => $request->training_name,
            'training_institution_name' => $request->training_institution_name,
            'training_completed_time' => $request->training_completed_time,
            'job_exp_designation' => $request->job_exp_designation,
            'job_exp_company_name' => $request->job_exp_company_name,
            'job_exp_joining_date' => $request->job_exp_joining_date,
            'job_exp_departure_date' => $request->job_exp_departure_date,
            'skills' => $request->skills,
            'current_salary' => $request->current_salary,
            'expected_salary' => $request->expected_salary,
        ]);

        if ($saved) {
            $candidate = Candidate::where('user_id', Auth::id());
            $updated = $candidate->update([
                'completed_professional_infos' => 1,
            ]);
            return redirect()->route('candidate.profile')->with('success', 'Data Inserted Successfully');
        } else {
            return redirect()->route('candidate.profile')->with('error', 'Failed To Insert Data');
        }
    }
}
