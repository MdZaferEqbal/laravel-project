@extends('layouts.main')
@push('title')
    <title>Controllers | Laravel</title>
@endpush
@section('main-section')
    <div class="bg-danger">
        <div class="heading text-center text-light">
            <h1>Laravel-Tutorial</h1>
            <h2>Understanding Controllers in Laravel</h2>
        </div>
        <div class="container">
            <!-- Controllers in Laravel -->
            <h3 class="text-center">Overview</h3>
            <p><strong>What is Controllers in Laravel?</strong></p>
            <ul>
                <li><strong>Controllers are class based php file.</strong></li>
                <li><strong>Controllers can add group related request handling logic into a single class.</strong></li>
                <li><strong>It acts like a bridge between View(Front-End) and Modal(Database).</strong></li>
                <li><strong>Types of Controllers:</strong>
                    <ol>
                        <li><strong>Basic Controller</strong>, it will just provide the class and every functionality that are needed we can to add it manually.</li>
                        <li><strong>Single Action Controller</strong>, when there is only one request to be handled by a controller then we use Single Action Controller.</li>
                        <li><strong>Resource Controller</strong>, is used for CRUD(Create, Read, Update and Delete) operations.</li>
                    </ol>
                </li>
            </ul>
            <!-- Commands to make Controllers -->
            <h3 class="text-center">Commands to make Controllers</h3>
            <!-- Basic Controller Command -->
            <p><strong>Basic Controller:</strong></p>
            <ul>
                <li><strong>php artisan make:controller ControllerName</strong></li>
            </ul>
            <!-- Single Action Controller Command -->
            <p><strong>Single Action Controller:</strong></p>
            <ul>
                <li><strong>php artisan make:controller ControllerName --invokable</strong></li>
            </ul>
            <!-- Resource Controller Command -->
            <p><strong>Resource Controller:</strong></p>
            <ul>
                <li><strong>php artisan make:controller ControllerName --resource</strong></li>
                <div class="text-center">
                    <h4>Actions handled by Resource Controller(Click on the URI of GET methods to invoke the functions)</h4>
                </div>
                <table class="table table-dark text-center table-borderless">
                    <thead class="table-active">
                        <tr>
                            <th class="text-danger border-radius-top-left" scope="col">Method</th>
                            <th class="text-danger" scope="col">URI</th>
                            <th class="text-danger" scope="col">Action</th>
                            <th class="text-danger border-radius-top-right" scope="col">Route Name</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th class="text-danger" scope="row">GET</th>
                            <td class="text-danger" ><a href="/custom-uri" class="text-danger" target="_blank">/custom</a></td>
                            <td class="text-danger">index</td>
                            <td class="text-danger">custom.index</td>
                        </tr>
                        <tr>
                            <th class="text-danger" scope="row">GET</th>
                            <td class="text-danger"><a href="/custom-uri/create" class="text-danger" target="_blank">/custom/create</a></td>
                            <td class="text-danger">create</td>
                            <td class="text-danger">custom.create</td>
                        </tr>
                        <tr>
                            <th class="text-danger" scope="row">POST</th>
                            <td class="text-danger">/custom</td>
                            <td class="text-danger">store</td>
                            <td class="text-danger">custom.store</td>
                        </tr>
                        <tr>
                            <th class="text-danger" scope="row">GET</th>
                            <td class="text-danger"><a href="/custom-uri/TST-62473-ABCD" class="text-danger" target="_blank">/custom/{id}</a></td>
                            <td class="text-danger">show</td>
                            <td class="text-danger">custom.show</td>
                        </tr>
                        <tr>
                            <th class="text-danger" scope="row">GET</th>
                            <td class="text-danger"><a href="/custom-uri/TST-62473-ABCD/edit" class="text-danger" target="_blank">/custom/{id}/edit</a></td>
                            <td class="text-danger">edit</td>
                            <td class="text-danger">custom.edit</td>
                        </tr>
                        <tr>
                            <th class="text-danger" scope="row">PUT/PATCH</th>
                            <td class="text-danger">/custom/{id}</td>
                            <td class="text-danger">update</td>
                            <td class="text-danger">custom.update</td>
                        </tr>
                        <tr>
                            <th class="text-danger border-radius-bottom-left" scope="row">DELETE</th>
                            <td class="text-danger">/custom/{id}</td>
                            <td class="text-danger">destroy</td>
                            <td class="text-danger border-radius-bottom-right">custom.destroy</td>
                        </tr>
                    </tbody>
                </table>
            </ul>
            <div class="text-center">
                <a href="/" class="text-decoration-none text-dark"><strong><i class="fa-solid fa-house"></i></strong></a>
            </div>
        </div>
    </div>
@endsection
