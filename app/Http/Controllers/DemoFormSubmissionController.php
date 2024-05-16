<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoFormSubmissionController extends Controller
{
    public function index() {
        return view('demo-form');
    }

    public function storeData(Request $res) {
        $res->validate([
            'email' => 'required|email',
            'password' => 'required',
            'confirmpassword' => 'required|same:password',
        ]);
        return view('display-form-data')->with($res->all());
    }
}
