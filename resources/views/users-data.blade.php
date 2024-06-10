@extends('layouts.main')
@push('title')
    <title>Users | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Friends Data</h2>
    </div>
    <div class="container main-content">
        <select class="form-select form-select-lg mb-3 bg-dark text-danger border-0" aria-label="Large select example" id="get-users-data-select">
            <option value="" selected>All Friends</option>
            <option value="1">Online Friends</option>
            <option value="0">Offline Friends</option>
        </select>
        <div class="text-center">
            <button id="fetchUsers" class="btn btn-outline-warning" onclick="fetchUsers()">Fetch Data</button>
        </div>
        <div id="userList" class="container mt-4">
            <table class="table table-dark text-center table-borderless" id="userListTable">
                <thead class="table-active">
                    <tr>
                        <th class="text-danger border-radius-top-left" scope="col">Id</th>
                        <th class="text-danger" scope="col">Name</th>
                        <th class="text-danger" scope="col">Email</th>
                        <th class="text-danger border-radius-top-right" scope="col"><span class="text-success">Online</span> / <span class="text-warning">Offline</span></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="userListTableBody">
                    <tr scope="col">
                        <th colspan="7" class="text-danger border-radius-bottom-left border-radius-bottom-right">Click Fetch Users to get the data.</th>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                <button class="btn btn-warning text-danger">Reset Password</button>
            </div>
        </div>
    </div>
</div>
@endsection
