<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Application;
use App\Models\Company;
use App\Models\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyDashboardController extends Controller
{
    public function company_dashboard(){
            $count_published_jobs = Job::where('user_id', Auth::id())->count();
            $count_total_applicants = Job::where('company_id', Auth::id())->count();
            $count_selected_applicants = Application::where('company_id', Auth::id())->where('status', 'selected')->count();
            $completed_profile = Auth::user()->company->completed_company_details;
        return view('company.company_dashboard', compact('count_published_jobs', 'count_total_applicants', 'count_selected_applicants', 'completed_profile'));
    }
        public function company_jobs(){
                // $posted_jobs = Auth::user()->company->jobs;
                 $posted_jobs = Job::where('user_id', Auth::id())->get();
            return view('company.company_jobs', compact('posted_jobs'));
        }

            public function company_applicant_list(){
                
                return view('company.company_applicant_list');
            }

                public function companyActiveDeactive(Request $request){
                        $job = Job::find($request->id);
                            if ($job->user_id != Auth::id()) {
                                return redirect()->back()->with('error', 'Sorry!!! You do not have the permission');
                            }else {
                                    $job->active_status = !$job->active_status;
                                    $job->save();
                                    $message = $job->active_status ? 'Activated The Job Posting!!!' : 'Deactivated The Job Posting!!!';
                    return redirect()->back()->with('success', $message);
                            }
                }

                    public function company_delete_job(Request $request){
                            $jobId = $request->input('job_id');
                            $job = Job::find($jobId);
                                if ($job->user_id == Auth::id()) {
                                    $job->delete();
                                return redirect()->route('company.jobs')->with('success', 'Successfully Removed The Application!!!');
                                }else {
                                return redirect()->back()->with('error', 'Sorry!!! You do not have the permission');
                                    }

                    }

                        public function company_profile(){
                            return view('company.company_profile');
                        }

                            public function profile_completation(Request $request){
        // // dd($request->all());
        // $validatedData = $request->validate([
        //     'company_name' => 'required',
        //     'company_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'company_mobile_num' => 'required',
        // ]);
                                $image = $request->file('company_image');
                                $image_extension = $image->getClientOriginalExtension();
                                $fileNameToStore = 'company-' . md5(uniqid()) . time() . '.' . $image_extension;

                                $companyDetail = new CompanyDetail;
                                $companyDetail->user_id = Auth::user()->id;
                                $companyDetail->company_id = Auth::user()->company->id;
                                $companyDetail->company_name = $request->company_name;

                                $companyDetail->company_mobile_num = $request->company_mobile_num;
                                $companyDetail->company_location = $request->company_location;
                                $companyDetail->current_employees = $request->current_employees;
                                $companyDetail->company_mission = $request->company_mission;
                                $companyDetail->company_vision = $request->company_vision;
                                $companyDetail->company_history = $request->company_history;
                                $saved = $companyDetail->save();
                                if ($saved) {
                                    $company = Company::where('user_id', Auth::id());
                                    $updated = $company->update([
                                        'completed_company_details' => 1,
                                    ]);
                                    $find_company = CompanyDetail::where('user_id', Auth::id())->first();
                                    $save_img = $find_company->update([
                                        'company_image' => $fileNameToStore,
                                    ]);
                                    $image->move(public_path('images/upload/Companies'), $fileNameToStore);
                                    return redirect()->route('company.dashboard')->with('success', 'Data Inserted Successfully');
                                } else {
                                    return redirect()->back()->with('error', 'Failed To Insert Data');
                                }
                            }

                                public function company_plugin(){
                                    return view('company.company_plugin');
                                }
}
