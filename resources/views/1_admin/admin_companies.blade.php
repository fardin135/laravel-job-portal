@extends('1_admin.admin_boiler')
@push('title')
	<title>All Companies</title>
@section('content')
    <h1>Companies:</h1>
            <table class="table border mt-5 table-hover">
            <thead class="text-center">
                <tr>
                    <th>Company Name</th>
                    <th>Company Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                        <tr class="table-warning">
                            <td>ABC</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Nestle</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>XYZ</td>
                            <td>Pending</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
            </tbody>
        </table>
@endsection