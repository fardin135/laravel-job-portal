@extends('1_company.company_boiler')
@push('title')
    <title>Company Jobs</title>
    @section('content')
        <h1>Company Jobs</h1>
        <table class="table border mt-5 table-hover">
            <thead class="text-center">
                <tr>
                    <th>Jobs Title</th>
                    <th>Applying Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @if ($datas->count() > 0)
                    @foreach ($datas as $data)
                        <tr class="table-warning">
                            <td>{{ $data->job_title }}</td>
                            <td>{{ $data->created_at->toFormattedDateString() }}</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $datas->links() }}
    @else
        <tr class="table-warning">
            <th>Not Applied To Jobs</th>
            <th>Not Applied To Jobs</th>
            <th>Not Applied To Jobs</th>
        </tr>
        @endif

    @endsection
