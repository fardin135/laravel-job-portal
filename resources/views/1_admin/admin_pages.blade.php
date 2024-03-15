@extends('1_admin.admin_boiler')
@push('title')
	<title>All Pages</title>
@section('content')
    <h1>Pages:</h1>
            <table class="table border mt-5 table-hover">
            <thead class="text-center">
                <tr>
                    <th>Page Name</th></th>
                    <th>Status</th>
                    <th>Edit / Delete</th>
                </tr>
            </thead>
            <tbody class="text-center">
                        <tr class="table-warning">
                            <td>Home</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>About</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Jobs</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Blogs</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Contact</td>
                            <td>Active</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Photo Gallery</td>
                            <td>Deactive</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
            </tbody>
        </table>
@endsection