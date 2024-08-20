@extends('candidate.candidate_boiler')
@push('title')
    <title>Candidate Applied Jobs</title>
@section('content')
    <table class="table border mt-5 table-hover">
        <thead class="text-center">
            <tr>
                <th>Jobs Title</th>
                    <th>Applying Date</th>
                        <th>Actions</th>
            </tr>
        </thead>
            <tbody class="text-center">
                @if($appliedJobs->isEmpty())
                    <tr class="table-warning">
                        <td>No Data Found</td>
                            <td>No Data Found</td>
                                <td>No Data Found</td>
                    </tr>
                @else
                    @foreach ($appliedJobs as $appliedJob)
                        <tr class="table-warning">
                            <td>{{ $appliedJob->job->job_title }}</td>
                                <td>{{ $appliedJob->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('show_job_details' , $appliedJob->job_id) }}" class="btn btn-sm btn-info">View</a>
                                            <!-- Form with Modal Trigger Button -->
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationModal">Delete</button>
                                                <!-- Modal Structure -->
                                                <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmationModalLabel">Confirm Action</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                                <div class="modal-body">Are you sure you want to delete this job application?</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary" onclick="document.getElementById('deleteForm').submit();">Confirm</button>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    {{-- After modal hidden Form to be Submitted --}}
                                                    <form id="deleteForm" method="POST" action="{{ route('jobs.storeJobApplicationDestroy') }}">
                                                        @csrf
                                                            @method('DELETE')
                                                                <input type="hidden" name="job_id" value="{{ $appliedJob->job_id }}">
                                                    </form>
                                    </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
    </table>
@endsection
