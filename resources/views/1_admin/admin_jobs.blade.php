@extends('1_admin.admin_boiler')
@push('title')
    <title>All Jobs</title>
    @section('content')
        <h1>Admin Jobs</h1>
        <table class="table border mt-5 table-hover">
            <thead class="text-center">
                <tr>
                    <th>Company Name</th>
                    <th>Job Title</th>
                    <th>Job Role</th>
                    <th>Job Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @if ($all_jobs->count() > 0)
                    @foreach ($all_jobs as $all_job)
                        <tr class="table-warning">
                            <td>{{ $all_job->company_name }}</td>
                            <td>{{ $all_job->job_title }}</td>
                            <td>{{ $all_job->role }}</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    @else
        <tr class="table-warning">
            <th>Not Applied To Jobs</th>
            <th>Not Applied To Jobs</th>
            <th>Not Applied To Jobs</th>
        </tr>
        @endif
    @endsection
