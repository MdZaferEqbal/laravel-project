<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerProfile extends Controller
{
    public function signInIndex() {
        return view('sign-in');
    }

    public function signUpIndex() {
        $button = "Sign Up";
        $data = compact('button');
        return view('sign-up')->with($data);
    }

    public function signUp(Request $request) {
        fromValidation($request);

        if(Customers::where('email', $request['customer_email'])->first()) {
            $button = "Sign Up";
            $customer_exists_message = "Customer Already Exists.";
            $class = "warning";

            $data = compact('button', 'customer_exists_message', 'class');
            return view('/sign-up')->with($data);
        }

        $customers = new Customers();
        $customers->name     = $request['customer_name'];
        $customers->email    = $request['customer_email'];
        $customers->address  = $request['customer_address'];
        $customers->state    = $request['customer_state'];
        $customers->pincode  = $request['customer_pincode'];
        $customers->gender   = $request['customer_gender'];
        $customers->password = md5($request['customer_password']);
        $customers->dob      = $request['customer_dob'];
        $customers->save();

        $customer = Customers::where('email', $request['customer_email'])->first();

        if( ! isset($customer) ) {
            $custom_error_message = "Failed to Sign Up. Please try again.";

            $data = compact('custom_error_message');
            return view('sign-up')->with($data);
        }

        session()->put('customer_id', $customer->id);
        session()->put('customer_name', $customer->name);

        return redirect('/');
    }

    public function signIn(Request $req) {
        $req->validate([
            'customer_email'    => 'required|email',
            'customer_password' => 'required',
        ]);

        $req_data = $req->all();

        $customer = Customers::where('email', $req_data['customer_email'])->first();

        if( ! isset($customer) ) {
            $customer_not_found = "Customer not Found. Try <a class='text-info' href='/sign-up'>Sign Up</a>";

            $data = compact('customer_not_found');
            return view('sign-in')->with($data);
        } elseif( $customer->password !== md5($req_data['customer_password'])) {
            $incorrect_password = "Incorrect Password";

            $data = compact('incorrect_password');
            return view('sign-in')->with($data);
        }

        session()->put('customer_id', $customer->id);
        session()->put('customer_name', $customer->name);

        return redirect('/users-data');
    }

    public function signOut() {
        session()->forget(['customer_id', 'customer_name']);

        return redirect()->back();
    }
}
