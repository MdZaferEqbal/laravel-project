@extends('layouts.main')
@push('title')
    <title>Displaying Data from Database | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2 class="text-dark">Displaying Customers Data from Customers Table in Laravel</h2>
    </div>
    <div class="container pb-2 main-content">
        <div class="d-flex justify-content-between">
            <form class="d-flex mb-1" role="search" action="{{url('/')}}/customer/search">
                <div class="input-group mb-1">
                    <a href="{{route('customer.view')}}" type="button" class="input-group-text text-danger btn btn-warning" id="basic-addon2">Reset</a>
                    <input type="text" class="form-control outline-none text-dark btn btn-outline-warning" placeholder="Search" name="customerSearch" value="{{old('customerSearch')}}" aria-label="Search">
                    <button type="search" class="input-group-text text-danger btn btn-warning" id="basic-addon2">Search</button>
                </div>
            </form>
            <a href="{{route('customer.new')}}"><button class="btn btn-warning text-danger mb-1">Add New Customer</button></a>
        </div>
        <table class="table table-dark text-center table-borderless ">
            @if(count($customers) === 0)
                <thead class="table-active">
                    <tr>
                        <th class="text-danger border-radius-top-left border-radius-top-right" scope="col">Data</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th class="text-danger border-radius-bottom-left border-radius-bottom-right">No Data Found.</th>
                    </tr>
                </tbody>
            @else
                <thead class="table-active">
                    <tr>
                        <th class="text-danger border-radius-top-left" scope="col">Id</th>
                        <th class="text-danger" scope="col">Name</th>
                        <th class="text-danger" scope="col">Email</th>
                        <th class="text-danger" scope="col">Address</th>
                        <th class="text-danger" scope="col">State</th>
                        <th class="text-danger" scope="col">Pincode</th>
                        <th class="text-danger" scope="col">Gender</th>
                        <th class="text-danger" scope="col">Points</th>
                        <th class="text-danger">Date of Birth</th>
                        <th class="text-danger">Group</th>
                        <th class="text-danger border-radius-top-right" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php
                        $indianStates = [
                            'Null' => 'Not Selected',
                            'AR' => 'Arunachal Pradesh',
                            'AR' => 'Arunachal Pradesh',
                            'AS' => 'Assam',
                            'BR' => 'Bihar',
                            'CT' => 'Chhattisgarh',
                            'GA' => 'Goa',
                            'GJ' => 'Gujarat',
                            'HR' => 'Haryana',
                            'HP' => 'Himachal Pradesh',
                            'JK' => 'Jammu and Kashmir',
                            'JH' => 'Jharkhand',
                            'KA' => 'Karnataka',
                            'KL' => 'Kerala',
                            'MP' => 'Madhya Pradesh',
                            'MH' => 'Maharashtra',
                            'MN' => 'Manipur',
                            'ML' => 'Meghalaya',
                            'MZ' => 'Mizoram',
                            'NL' => 'Nagaland',
                            'OR' => 'Odisha',
                            'PB' => 'Punjab',
                            'RJ' => 'Rajasthan',
                            'SK' => 'Sikkim',
                            'TN' => 'Tamil Nadu',
                            'TG' => 'Telangana',
                            'TR' => 'Tripura',
                            'UP' => 'Uttar Pradesh',
                            'UT' => 'Uttarakhand',
                            'WB' => 'West Bengal',
                            'AN' => 'Andaman and Nicobar Islands',
                            'CH' => 'Chandigarh',
                            'DN' => 'Dadra and Nagar Haveli',
                            'DD' => 'Daman and Diu',
                            'LD' => 'Lakshadweep',
                            'DL' => 'National Capital Territory of Delhi',
                            'PY' => 'Puducherry'
                        ];
                    @endphp
                    @foreach($customers as $key => $customer)
                    <tr>
                        @if($loop->last)
                            <th class="text-danger ">{{$customer->id}}</th>
                        @else
                            <th class="text-danger">{{$customer->id}}</th>
                        @endif
                        <th class="text-danger" scope="row">{{$customer->name}}</th>
                        <td class="text-danger">{{$customer->email}}</td>
                        <td class="text-danger">
                            @if(isset($customer->address))
                                {{$customer->address}}
                            @else
                                Not Provided
                            @endif
                        </td>
                        <td class="text-danger">{{isset($indianStates[$customer->state]) ? $indianStates[$customer->state] : $customer->state}}</td>
                        <td class="text-danger">
                            @if(isset($customer->pincode))
                                {{$customer->pincode}}
                            @else
                                Not Provided
                            @endif
                        </td>
                        <td class="text-danger">
                            {{$customer->gender}}
                        </td>
                        <td class="text-danger">{{$customer->points}}</td>
                        <td class="text-danger">
                            @if(isset($customer->dob))
                                {{dMYDateFormat($customer->dob)}}
                            @else
                                Not Provided
                            @endif
                        </td>
                        <td class="text-danger">
                            @if(null != $customer->groupData->pluck('group_name'))
                                {{isset($customer->groupData->pluck('group_name')[0]) ? $customer->groupData->pluck('group_name')[0] : "Not in a Group"}}
                            @else
                                Not in a Group
                            @endif
                        </td>
                        <td class="text-danger">
                            <a class="text-decoration-none" href="{{route('customer.edit', ['id' => $customer->id])}}"><button class="btn-sm btn btn-outline-warning m-1"><i class="fa-regular fa-pen-to-square"></i></button></a>
                            <a class="text-decoration-none" href="{{url('/customer/trash')}}/{{$customer->id}}/{{$customers->count() > 1 ? $customers->currentPage() : ''}}"><button class="btn btn-sm btn-danger text-dark m-1"><i class="fa-solid fa-trash-can-arrow-up"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="11" class="table-active border-radius-bottom-left border-radius-bottom-right">
                            @if($customers->lastPage() > 1)
                                <a href="{{$customers->url(1)}}"><button class="text-danger btn btn-dark"><i class="fa-solid fa-angles-left"></i></button></a>
                                <a href="{{$customers->previousPageUrl()}}"><button class="text-danger btn btn-dark"><i class="fa-solid fa-chevron-left"></i></button></a>
                                <button class="text-danger btn btn-dark" disabled>{{$customers->currentPage()}} / {{$customers->lastPage()}}</button>
                                <a href="{{$customers->nextPageUrl()}}"><button class="text-danger btn btn-dark"><i class="fa-solid fa-chevron-right"></i></button></a>
                                <a href="{{$customers->url($customers->lastPage())}}"><button class="text-danger btn btn-dark"><i class="fa-solid fa-angles-right"></i></button></a>
                            @else
                                <div class="btn transparent-background"></div>
                            @endif
                        </td>
                    </tr>
                </tbody>
            @endif
        </table>
        <div class="text-end">
            <a href="{{route('customer.trash.view')}}"><button class="btn btn-warning text-danger mt-n14">View Trashed Data</button></a>
        </div>
    </div>
</div>
@endsection
