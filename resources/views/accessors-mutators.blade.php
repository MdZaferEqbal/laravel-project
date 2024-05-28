@extends('layouts.main')
@push('title')
    <title>Accessors & Mutators | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Accessors & Mutators in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">What is _________?</h3>
        <!-- Accessors -->
        <strong>Accessors:</strong>
        <ul>
            <li>An Accessor transforms an Eloquent attribute value when it is accessed.</li>
            <li>A Accessor basically transforms or changes the data that we will get from the database.</li>
            <li>Define a get{ColumnName}Attribute method on your model where {ColumnName} is the "studly" cased name of the column you wish to access.</li>
            <li><strong>How to write the function name properly:</strong>
                <ol>
                    <li>If the column name consists of only one word, such as "<strong>name</strong>," then the function name will be set to <strong>getNameAttribute</strong>.</li>
                    <li>For multi-word column names like "<strong>customer_name</strong>," the corresponding function name will be <strong>getCustomerNameAttribute</strong>.</li>
                </ol>
            </li>
        </ul>
        <!-- Mutators -->
        <strong>Mutators:</strong>
        <ul>
            <li>A mutator transforms an Eloquent attribute value when it is set.</li>
            <li>A mutator basically transforms or changes the data that are passed to the database.</li>
            <li>Define a set{ColumnName}Attribute method on your model where {ColumnName} is the "studly" cased name of the column you wish to access.</li>
            <li><strong>How to write the function name properly:</strong>
                <ol>
                    <li>If the column name consists of only one word, such as "<strong>name</strong>," then the function name will be set to <strong>setNameAttribute</strong>.</li>
                    <li>For multi-word column names like "<strong>customer_name</strong>," the corresponding function name will be <strong>setCustomerNameAttribute</strong>.</li>
                </ol>
            </li>
        </ul>
    </div>
</div>
@endsection
