@extends('layouts.main')
@push('title')
    <title>Session Handing | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>Session Handing in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Session Helpers</h3>
        <ul>
            <li><strong>Retreving Data(Any one of the following will work):</strong>
                <ol>$request->session()->get('key');<br/>session('key');</ol>
            </li>
            <li><strong>Retreving All Session Data(Any one of the following will work):</strong>
                <ol>$request->session()->all();<br/>session()->all();</ol>
            </li>
            <li><strong>Determining if an Item Exists in the Session(Any one of the following will work):</strong>
                <ol>$request->session()->has('key');<br/>session()->key('key');</ol>
            </li>
            <li><strong>Storing Data(Any one of the following will work):</strong>
                <ol>$request->session()->put('key', 'value');<br/>session(['key' => 'value']);</ol>
            </li>
            <li><strong>Flash Data(Any one of the following will work):</strong>
                <ol>This function will create a session that will automatically destory in the next request or next page reoad.</ol>
                <ol>$request->session()->flash('status', 'Task was successfull!');<br/>session()->all();</ol>
            </li>
            <li><strong>Deleting Data(Any one of the following will work):</strong>
                <ol>$request->session()->forget('key');<br/>session()->forget(['key', 'key2']);<br/>$request->session()->flush();</ol>
            </li>
        </ul>
    </div>
</div>
@endsection
