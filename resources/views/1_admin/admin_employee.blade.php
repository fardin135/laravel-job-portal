@extends('1_admin.admin_boiler')
@push('title')
	<title>All Employees</title>
@section('content')
    <h1>All Employees:</h1>
            <table class="table border mt-5 table-hover">
            <thead class="text-center">
                <tr>
                    <th>Employee Name</th>
                    <th>Employees Role</th>
                    <th>Edit/Delete</th>
                </tr>
            </thead>
            <tbody class="text-center">
                        <tr class="table-warning">
                            <td>MR. X</td>
                            <td>Manager</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Mr. Y</td>
                            <td>Editor</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Mr. Z</td>
                            <td>Moderator</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
            </tbody>
        </table>
@endsection