@extends('layouts.main')
@push('title')
    <title>Soft Delete | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Soft Delete(Move to Trash) in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Overview</h3>
        <ul>
            <li><strong>Namespace: </strong>use Illuminate\Database\Eloquent\SoftDeletes;</li>
            <li><strong>Invoking: </strong>use SoftDeletes;</li>
            <li><strong>Creating a softdelete column: </strong>$table->softDeletes();</li>
            <li><strong>Other important functions:</strong>
                <ol>
                    <li><strong>withTrashed(): </strong>Retrives all the data that is soft deleted or not.</li>
                    <li><strong>onlyTrashed(): </strong>Retrives only the soft deleted data.</li>
                    <li><strong>restore(): </strong>This function helps to restore the soft deleted data.</li>
                    <li><strong>forceDelete(): </strong>This function will delete the data from database; In simpler words it will permanently delete the data.</li>
                </ol>
            </li>
        </ul>
        <h3 class="text-center">Check out the fully functional Trash Page.</h3>
        <div class="text-center mt-4">
            <a href="{{route('customer.trash.view')}}"><button class="btn btn-warning text-danger mt-n14">View Trashed Data</button></a>
        </div>
    </div>
</div>
@endsection
