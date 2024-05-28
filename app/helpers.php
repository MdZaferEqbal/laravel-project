<?php

if( ! function_exists('fromValidation')) {
    function fromValidation($request) {
        return $request->validate([
            'customer_name'            => 'required',
            'customer_email'           => 'required|email',
            'customer_password'        => 'required',
            'customer_confirmpassword' => 'required|same:customer_password',
        ]);
    }
}

if( ! function_exists('dMYDateFormat')) {
    function dMYDateFormat($date) {
        return date("d-M-Y", strtotime($date));
    }
}