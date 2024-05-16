<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTutorial extends Controller
{
    public function understandingControllerPage() {
        return view('controllers');
    }
}
