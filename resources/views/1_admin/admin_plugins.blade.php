@extends('1_admin.admin_boiler')
@push('title')
	<title>Plugins</title>
@section('content')
    <h1>Plugins:</h1>
<div class="container p-4 mt-5">
    <div class="row">
        <div class="container col-4 bg-white">
            <div class="card text-center">
                <div class="card-header bg-info">Employee</div>
                <div class="card-body">
                    <button id="admin_button_employee" class="btn btn-sm btn-success">Activate</button>
                </div>
            </div>
        </div>
        <div class="container col-4 bg-white">
            <div class="card text-center">
                <div class="card-header bg-info">Blogs</div>
                <div class="card-body">
                    <button id="admin_button_blogs" class="btn btn-sm btn-success">Activate</button>
                </div>
            </div>
        </div>
        <div class="container col-4 bg-white">
            <div class="card text-center">
                <div class="card-header bg-info">Pages</div>
                <div class="card-body">
                    <button id="admin_button_pages" class="btn btn-sm btn-success">Activate</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const buttonEmployee = document.getElementById('admin_button_employee');
    buttonEmployee.addEventListener('click', () => {
        if (buttonEmployee.textContent === 'Activate') {
            buttonEmployee.textContent = 'Deactivate';
            buttonEmployee.classList.remove('btn-success');
            buttonEmployee.classList.add('btn-danger');
        } else {
            buttonEmployee.textContent = 'Activate';
            buttonEmployee.classList.remove('btn-danger');
            buttonEmployee.classList.add('btn-success');
        }
    });

    const buttonBlogs = document.getElementById('admin_button_blogs');
    buttonBlogs.addEventListener('click', () => {
        if (buttonBlogs.textContent === 'Activate') {
            buttonBlogs.textContent = 'Deactivate';
            buttonBlogs.classList.remove('btn-success');
            buttonBlogs.classList.add('btn-danger');
        } else {
            buttonBlogs.textContent = 'Activate';
            buttonBlogs.classList.remove('btn-danger');
            buttonBlogs.classList.add('btn-success');
        }
    });

    const buttonPages = document.getElementById('admin_button_pages');
    buttonPages.addEventListener('click', () => {
        if (buttonPages.textContent === 'Activate') {
            buttonPages.textContent = 'Deactivate';
            buttonPages.classList.remove('btn-success');
            buttonPages.classList.add('btn-danger');
        } else {
            buttonPages.textContent = 'Activate';
            buttonPages.classList.remove('btn-danger');
            buttonPages.classList.add('btn-success');
        }
    });
</script>
@endsection