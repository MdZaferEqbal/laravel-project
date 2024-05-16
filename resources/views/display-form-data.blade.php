@extends('layouts.main')
@push('title')
    <title>Displaying Form Data | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Displaying Data from Form Submission in Laravel</h2>
    </div>
    <div class="container main-content">
        <table class="table table-dark text-center table-borderless">
            <thead class="table-active">
                <tr>
                    <th class="text-danger border-radius-top-left" scope="col">Name</th>
                    <th class="text-danger" scope="col">Email</th>
                    <th class="text-danger" scope="col">Password</th>
                    <th class="text-danger border-radius-top-right" scope="col">Terms & Condition</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th class="text-danger border-radius-bottom-left" scope="row">{{isset($name) ? $name : "Name not Provided"}}</th>
                    <th class="text-danger" scope="row">{{$email}}</th>
                    <td class="text-danger">{{$password}}</td>
                    <td class="text-danger border-radius-bottom-right">{{isset($termsNconditions) ? "Selected" : "Not Selected"}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
