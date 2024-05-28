@extends('layouts.main')
@push('title')
    <title>Foreign Key Relation | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Defining Foreign Key Relation in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Overview</h3>
        <p>This is used for connecting two database tables using Migration.</p>
        <p><strong>Code snippet: </strong></p>
        <ul>
            <li>In up function of a table Migration file:<br/>
                $table->id('column_1_name');<br/>
                $table->string('column_2_name');<br/>
                $table->unsignedBigInteger('column_name_from_other_table_foreign_key');<br/>
                $table->foreign('column_name_from_other_table_foreign_key')->reference('column_name_you_want_for_this_table')->on('other_table_name');
            </li>
        </ul>
    </div>
</div>
@endsection
