@extends('1_admin.admin_boiler')
@push('title')
	<title>All Blogs</title>
@section('content')
    <h1>Blogs:</h1>
            <table class="table border mt-5 table-hover">
            <thead class="text-center">
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Edit / Delete</th>
                </tr>
            </thead>
            <tbody class="text-center">
                        <tr class="table-warning">
                            <td>Post About Motivation</td>
                            <td>Published</td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Post About Carrer Boost</td>
                            <td>Published</td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>Post About Job Market</td>
                            <td>Draft</td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
            </tbody>
        </table>
@endsection