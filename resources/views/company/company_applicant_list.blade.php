@extends('company.company_boiler')
@push('title')
    <title>Applicant List</title>
@section('content')
    <h1 class="text-center">Applicant List</h1>
        <table class="table border mt-5 table-hover">
        <thead class="text-center">
            <tr>
                <th>SL</th>
                    <th>Jobs Title</th>
                        <th>Applying Date</th>
                            <th>Status</th>
                                <th>Actions</th>
            </tr>
        </thead>
            <tbody class="text-center">
                @if($posted_jobs->isEmpty())
                    <tr class="table-warning">
                        <td>No Data Found</td>
                            <td>No Data Found</td>
                                <td>No Data Found</td>
                                    <td>No Data Found</td>
                                        <td>No Data Found</td>

                    </tr>
                @else
                    @foreach ($posted_jobs as $key => $posted_job)
                        <tr class="table-warning">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $posted_job->job_title }}</td>
                                <td>{{ $posted_job->created_at->diffForHumans() }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('company.active.deactive') }}">
                                            @csrf
                                                <input type="hidden" name="id" value="{{ $posted_job->id }}">
                                                    @if($posted_job->active_status == 1)
                                                        <button type="submit" class="btn btn-sm btn-success">Active</button>
                                                    @else
                                                        <button type="submit" class="btn btn-sm btn-danger">Deactive</button>
                                                        @endif
                                        </form>
                                    </td>
                                        <td>
                                            <a href="{{ route('show_job_details', $posted_job->id) }}" class="btn btn-sm btn-info me-2">View</a>
                                                <button onclick="deleteJob({{ $posted_job->id }})" class="btn btn-sm btn-danger">Delete</button>
                                                    <form id="deleteForm" method="POST" style="display:none;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="job_id" id="job_id">
                                                    </form>

                                        </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
    </table>
<script>
    function deleteJob(jobId) {
        let confirmation = confirm("Press OK To Delete This Record");
        if (confirmation) {
            let form = document.getElementById('deleteForm');
            form.action = '{{ route("company.delete.job") }}';
            document.getElementById('job_id').value = jobId;
            form.submit();
        }
    }
</script>
    @endsection
    