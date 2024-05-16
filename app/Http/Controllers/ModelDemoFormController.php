<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class ModelDemoFormController extends Controller
{
    public function index() {
        return view('model-demo');
    }

    public function storeData( Request $request ) {
        $request->validate([
            'customer_name'            => 'required',
            'customer_email'           => 'required|email',
            'customer_password'        => 'required',
            'customer_confirmpassword' => 'required|same:customer_password',
        ]);

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

        return redirect('/customer/view');
    }

    public function view() {
        $customers = Customers::all();
        $customers_data = compact('customers');

        return view('model-database-data-view')->with($customers_data);
    }

    public function deleteData($id) {
        $customer = Customers::find($id);
        if( ! is_null($customer)) {
            $customer->delete();
        }
        return redirect()->back();
    }
}
