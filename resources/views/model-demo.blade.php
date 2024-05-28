@extends('layouts.main')
@push('title')
    <title>Model Demo | Laravel</title>
@endpush
@section('main-section')
<div class="bg-danger">
    <div class="heading text-center text-light">
        <h1>Laravel-Tutorial</h1>
        <h2>{{isset($heading) ? $heading : "Model Data Demo in Laravel"}}</h2>
    </div>
    <div class="container pb-2">
        <form action="{{isset($url) ? $url : ''}}" method="post">
            <h3 class="text-center">{{isset($title) ? $title : "Customer Info Form"}}</h3>
            @csrf
            <x-input id="exampleInputName" label="Name" type="text" value="{{old('customer_name') !== null ? old('customer_name') : (isset($customer_data->name) ? $customer_data->name : '')}}" name="customer_name" required="True"/>
            <!-- Gender checkbox -->
            <strong>Gender: </strong>
            <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" name="customer_gender" value="M" class="btn-check" id="btnradio1" autocomplete="off" {{null !== old('customer_gender') ? ( old('customer_gender') == "M" ? "checked" : "" ) : ( isset($customer_data->gender) && $customer_data->gender == "M" ? "checked" : "" )}}>
                <label class="btn btn-outline-dark" for="btnradio1">Male</label>

                <input type="radio" name="customer_gender" value="F" class="btn-check" id="btnradio2" autocomplete="off" {{null !== old('customer_gender') ? ( old('customer_gender') == "F" ? "checked" : "" ) : ( isset($customer_data->gender) && $customer_data->gender == "F" ? "checked" : "" )}}>
                <label class="btn btn-outline-dark" for="btnradio2">Female</label>

                <input type="radio" name="customer_gender" value="O" class="btn-check" id="btnradio3" autocomplete="off" {{null !== old('customer_gender') ? ( old('customer_gender') == "O" ? "checked" : "" ) : ( isset($customer_data->gender) && $customer_data->gender == "O" ? "checked" : "" )}}>
                <label class="btn btn-outline-dark" for="btnradio3">Others</label>
            </div>
            <!-- DOB -->
            <strong>Date of Birth(DOB): </strong>
            <input type="date" name="customer_dob" value="{{ null !== old('customer_dob') ? old('customer_dob') : (isset($customer_data->dob) ? $customer_data->dob : '')}}" id="btnradio1" autocomplete="off" class="btn btn-outline-dark rounded mb-2">

            <x-input id="exampleInputEmail1" label="Email" type="email" value="{{null !== old('customer_email') ? old('customer_email') : (isset($customer_data->email) ? $customer_data->email : '')}}" name="customer_email" info="We'll never share your email with anyone else." required="True" info="{{isset($customer_exists_message) ? $customer_exists_message : null}}" customClass="{{isset($class) ? $class : null}}"/>
            <x-input id="exampleInputAddress" label="Address" type="text" value="{{null !== old('customer_address') ? old('customer_address') : (isset($customer_data->address) ? $customer_data->address : '')}}" name="customer_address" info="We'll never share your address with anyone else."/>
            <!-- states -->
            @php
                $indianStates = ['AR' => 'Arunachal Pradesh',
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
                'PY' => 'Puducherry'];
            @endphp
            <label class="form-label" for="laravel-tutorial-state-option"><strong>Select State</strong></label>
            <select class="form-select form-select-md mb-3 bg-dark text-danger border-0" aria-label="Medium select example" id="laravel-tutorial-state-option" name="customer_state">
                <option value="Null" selected>Select State</option>
                @foreach( $indianStates as $key => $state )
                    <option value="{{$key}}" {{ ( null !== old('customer_state') && old('customer_state') == $key ? "selected" : ( isset($customer_data->state) && $customer_data->state == $key ? "selected" : "" ) ) }}>{{$state}}</option>
                @endforeach
            </select>
            <x-input id="customerPincode" label="Pincode" type="number" value="{{null !== old('customer_pincode') ? old('customer_pincode') : (isset($customer_data->pincode) ? $customer_data->pincode : '')}}" name="customer_pincode" minlength="6" maxlength="6"/>
            <x-input id="exampleInputPassword1" label="Password" type="password" name="customer_password" required="True"/>
            <x-input id="exampleInputConfirmPassword" label="Confirm Password" type="password" name="customer_confirmpassword" required="True"/>
            <button type="submit" class="btn btn-dark text-danger">{{isset($button) ? $button : "Submit"}}</button>
        </form>
        <div class="text-center">
            <a href="/customer/view" class="text-decoration-none text-warning"><strong>View all customer data by clicking here</strong></a>
        </div>
    </div>
</div>
@endsection
