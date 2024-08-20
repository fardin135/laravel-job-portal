@extends('company.company_boiler')
@push('title')
    <title>Company Plugins</title>
    @section('content')
        <h1>Company Plugins</h1>
        <div class="container p-4 mt-5">
            <div class="row">
                <div class="container col-6 bg-white">
                    <div class="card text-center">
                        <div class="card-header bg-info">Employee</div>
                        <div class="card-body">
                            <button id ="button_employee" class="btn btn-sm btn-success">Activate</button>
                        </div>
                    </div>
                </div>
                <div class="container col-6 bg-white">
                    <div class="card text-center">
                        <div class="card-header bg-info">Blogs</div>
                        <div class="card-body">
                            <button id ="button_blogs" class="btn btn-sm btn-success">Activate</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const buttonEmployee = document.getElementById('button_employee');
            buttonEmployee.addEventListener('click', () => {
                if (buttonEmployee.textContent === 'Activate') {
                    buttonEmployee.textContent = 'Deactivate';
                    buttonEmployee.classList.remove('btn-success');
                    buttonEmployee.classList.add('btn-danger');
                } else {
                    buttonEmployee.textContent = 'Deactivate';
                    buttonEmployee.classList.remove('btn-danger');
                    buttonEmployee.classList.add('btn-success');
                }
            });

            const button = document.getElementById('button_blogs');
            button.addEventListener('click', () => {
                if (button.textContent === 'Activate') {
                    button.textContent = 'Deactivate';
                    button.classList.remove('btn-success');
                    button.classList.add('btn-danger');
                } else {
                    button.textContent = 'Deactivate';
                    button.classList.remove('btn-danger');
                    button.classList.add('btn-success');
                }
            });
        </script>
    @endsection
