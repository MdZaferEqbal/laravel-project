@extends('layouts.main')
@push('title')
    <title>API & Restful API | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>API & Restful API in Laravel</h2>
    </div>
    <div class="container main-content">
        <h3 class="text-center">Overview</h3>
        {{-- API --}}
        <strong>What is API</strong>
        <ul>
            <li>API is the stands for Application Programming Interface.</li>
            <li>API is a software intermediary that allows two applications to talk to each other.</li>
            <li>Each time you use an app like <i class="fa fa-facebook" aria-hidden="true"></i>, send an <i class="fa fa-instagram" aria-hidden="true"></i> message, or check the weather on your <i class="fa fa-mobile" aria-hidden="true"></i>, you're using an API.</li>
        </ul>
        {{-- Restful Api --}}
        <strong>What is Restful Api</strong>
        <ul>
            <li><strong>REST</strong> stands for <strong>RE</strong>presentational <strong>S</strong>tate <strong>T</strong>ransfer</li>
            <li><strong>REST</strong> is web standards based architechture and used HTTP Protocol.</li>
            <li>In REST Architechture, a REST Server simply provides access to resources and REST client accesses and modifies the resources.</li>
            <li>Here each resource is identified by <strong>URI's/global Id's</strong>.</li>
            <li>REST uses various representation to respresent a resources like <strong>text, JSON, XML.JSON</strong> which are the most popular one.</li>
        </ul>
        <div class="text-center">
            <h4>API Methods.</h4>
            <table class="table table-dark table-borderless">
                <thead class="table-active">
                    <tr>
                        <th class="text-danger border-radius-top-left" scope="col">Method</th>
                        <th class="text-danger" scope="col">Action</th>
                        <th class="text-danger border-radius-top-right" scope="col">Purpose</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th class="text-danger" scope="row">GET</th>
                        <td class="text-danger">index / show</td>
                        <td class="text-danger">Index is used to display all data or filtered data. And Show is used to show just 1 user's data by passing user's id.</td>
                    </tr>
                    <tr>
                        <th class="text-danger" scope="row">POST</th>
                        <td class="text-danger">store</td>
                        <td class="text-danger">This method is used to store data in database.</td>
                    </tr>
                    <tr>
                        <th class="text-danger" scope="row">PUT/PATCH</th>
                        <td class="text-danger">update</td>
                        <td class="text-danger">Both of them are used to update data, but the PUT is used to update all the column at once & PATCH is used to update desired column in database table.</td>
                    </tr>
                    <tr>
                        <th class="text-danger border-radius-bottom-left" scope="row">DELETE</th>
                        <td class="text-danger">destroy</td>
                        <td class="text-danger border-radius-bottom-right">This method is used to delete the data from database.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center pb-2">
            <strong><a class="text-decoration-none text-warning" href="https://github.com/MdZaferEqbal/laravel-tutorial">Click here to checkout the GitHub Repository for this project.</a></strong>
        </div>
    </div>
</div>
@endsection
