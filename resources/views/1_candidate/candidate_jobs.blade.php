@extends('1_candidate.candidate_boiler')
@push('title')
    <title>Candidate Jobs</title>
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
                @if ($users->count() > 0)
                    @foreach ($users as $user)
                        <tr class="table-warning">
                            <td>{{ $user->job->job_title }}</td>
                            <td>{{ $user->created_at->toFormattedDateString() }}</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    @else
        <tr class="table-warning">
            <th>Not Applied To Jobs</th>
            <th>Not Applied To Jobs</th>
            <th>Not Applied To Jobs</th>
        </tr>
        @endif
    @endsection
