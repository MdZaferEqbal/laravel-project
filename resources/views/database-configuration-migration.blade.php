@extends('layouts.main')
@push('title')
    <title>Database Configuration and Migration | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Database Configuration and Migration in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Overview</h3>
        <strong>Creating Tables using Migration in Laravel</strong>
        <p> In Laravel, migrations are a way to manage your database schema changes in a version-controlled and consistent manner. They allow you to create and modify database tables and their columns using PHP code rather than directly interacting with the database.</p>
        <!-- Command to Create Migration -->
        <p><strong>Command to Create Migration (This command will create a migration file that can be modified to create a custom table in database):</strong></p>
        <ul>
            <li><strong>php artisan make:migration create_tableName_table</strong></li>
        </ul>
        <!-- Command to Add new Columns -->
        <p><strong>Command to Refresh Migration (This command will create a php file that can be used to add columns or delete columns from the specified table):</strong></p>
        <ul>
            <li><strong>php artisan make:migration add_columns_to_tableName</strong></li>
        </ul>
        <!-- Command to Run Migration -->
        <p><strong>Command to Run Migration (This command will run a migration that will create a table in database using the file create after runing the above command):</strong></p>
        <ul>
            <li><strong>php artisan migrate</strong></li>
        </ul>
        <!-- Command to Rollback Migration -->
        <p><strong>Command to Rollback Migration (This command will delete the table that has been created):</strong></p>
        <ul>
            <li><strong>php artisan migrate:rollback</strong></li>
        </ul>
        <!-- Command to Refresh Migration -->
        <p><strong>Command to Refresh Migration (This command will delete all the tables in the database and again create it):</strong></p>
        <ul>
            <li><strong>php artisan migrate:refresh</strong></li>
        </ul>
    </div>
</div>
@endsection
