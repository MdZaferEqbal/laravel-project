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
    <div class="container pb-2 {{$customers->count() < 12 ? 'main-content' : ''}}">
        <div class="text-end">
            <a href="{{route('customer.new')}}"><button class="btn btn-warning text-danger mb-1">Add New Customer Data</button></a>
        </div>
        <table class="table table-dark text-center table-borderless">
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
                @foreach($customers as $customer)
                <tr>
                    @if($loop->last)
                        <th class="text-danger border-radius-bottom-left">{{$customer->id}}</th>
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
                    <td class="text-danger">{{$indianStates[$customer->state]}}</td>
                    <td class="text-danger">
                        @if(isset($customer->pincode))
                            {{$customer->pincode}}
                        @else
                            Not Provided
                        @endif
                    </td>
                    <td class="text-danger">
                        @if($customer->gender == 'M')
                            Male
                        @elseif($customer->gender == 'F')
                            Female
                        @elseif($customer->gender == 'O')
                            Others
                        @else
                            Not Selected
                        @endif
                    </td>
                    <td class="text-danger">{{$customer->points}}</td>
                    <td class="text-danger">
                        @if(isset($customer->dob))
                            {{$customer->dob}}
                        @else
                            Not Provided
                        @endif
                    </td>
                    @if($loop->last)
                        <td class="text-danger border-radius-bottom-right">
                            <button class="btn btn-sm btn-info text-dark">Update</button>
                            <button class="btn btn-sm btn-danger"><a class="text-decoration-none text-dark" href="{{url('/customer/delete')}}/{{$customer->id}}">Delete</a></button>
                        </td>
                    @else
                        <td class="text-danger">
                            <button class="btn btn-sm btn-info text-dark">Update</button>
                            <button class="btn btn-sm btn-danger"><a class="text-decoration-none text-dark" href="{{url('/customer/delete')}}/{{$customer->id}}">Delete</a></button>
                        </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
