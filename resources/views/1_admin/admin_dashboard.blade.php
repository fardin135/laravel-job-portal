@extends('1_admin.admin_boiler')
@push('title')
	<title>Admin Dashboard</title>
@section('content')
    <h1>Admin Dashboard</h1>
        <div class="container p-4 mt-5">
            <div class="row">
                <div class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header bg-info">Active Companies</div>
                        <div class="card-body">
                            <h5 class="card-title">12</h5>
                        </div>
                    </div>
                </div>
                <div class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header bg-info">Pending Companies</div>
                        <div class="card-body">
                            <h5 class="card-title">3</h5>
                        </div>
                    </div>
                </div>
                <div class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header bg-info">Jobs posted</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $job }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection