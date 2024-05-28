<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Customers;
use Illuminate\Http\Request;

class ModelDemoFormController extends Controller
{
    public function index() {
        $url = url('/') . "/model-demo";
        $heading = "Model Insert Data Demo in Laravel";
        $title = "Add New Customer Data";
        $button = "Create";
        $data = compact('url', 'heading', 'title', 'button');
        return view('model-demo')->with($data);
    }

    public function storeData( Request $request ) {
        fromValidation($request);

        $customers = new Customers();

        if(Customers::where('email', $request['customer_email'])->first()) {
            $url = url('/') . "/model-demo";
            $heading = "Model Insert Data Demo in Laravel";
            $title = "Add New Customer Data";
            $button = "Create";
            $customer_exists_message = "Customer already exists.";
            $class = "warning";

            $data = compact('url', 'heading', 'title', 'button', 'customer_exists_message', 'class');
            return view('model-demo')->with($data);
        }

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

    public function view(Request $request) {
        $textToSearch = $request['customerSearch'] ?? "";
        $query = Customers::with('groupData');

        if($textToSearch !== "") {
            $customers = $query->where('name', 'LIKE', "%$textToSearch%")->orwhere('email', 'LIKE', "%$textToSearch%")->orwhere('address', 'LIKE', "%$textToSearch%")->orwhere('state', 'LIKE', "%$textToSearch%")->orwhere('pincode', 'LIKE', "%$textToSearch%")->orwhere('gender', 'LIKE', "%$textToSearch%")->orwhere('points', 'LIKE', "%$textToSearch%")->orwhere('dob', 'LIKE', "%$textToSearch%")->orderBy('points', 'desc')->paginate(6);

            $customers_data = compact('customers');
        } else {
            $customers = $query->orderBy('points', 'desc')->paginate(6);

            $customers_data = compact('customers');
        }

        return view('model-database-data-view')->with($customers_data);
    }

    public function trashView() {
        $customers = Customers::onlyTrashed()->paginate(6);
        $customers_data = compact('customers');

        return view('trash-database-data-view')->with($customers_data);
    }

    public function editCustomer($id) {
        $customer_data = Customers::find($id);
        if( is_null($customer_data)) {
            redirect('/customer/view');
        } else {
            $url = url('/') . '/customer/update/' . $id;
            $heading = "Model Update Data Demo in Laravel";
            $title = "Update Customer Data";
            $button = "Update";
            $data = compact('customer_data', 'url', 'heading', 'title', 'button');
            return view('model-demo')->with($data);
        }
    }

    public function updateData($id, Request $request) {
        $customer_data = Customers::find($id);
        if( is_null($customer_data)) {
            redirect('/customer/view');
        } else {
            fromValidation($request);

            $customer_data->name     = $request['customer_name'];
            $customer_data->email    = $request['customer_email'];
            $customer_data->address  = $request['customer_address'];
            $customer_data->state    = $request['customer_state'];
            $customer_data->pincode  = $request['customer_pincode'];
            $customer_data->gender   = $request['customer_gender'];
            $customer_data->password = md5($request['customer_password']);
            $customer_data->dob      = $request['customer_dob'];
            $customer_data->save();

            return redirect('/customer/view');
        }
    }

    public function trashData($id, $page = null) {
        $customer = Customers::find($id);
        if( ! is_null($customer)) {
            $customer->delete();
        }
        if( $page !== null ) {
            return redirect('/customer/view?page=' . $page);
        } else {
            return redirect('/customer/view');
        }
    }

    public function restoreData($id, $page = null) {
        $customer = Customers::withTrashed()->find($id);
        if( ! is_null($customer)) {
            $customer->restore();
        }
        if( $page != null ) {
            return redirect('/customer/view/trash?page=' . $page);
        } else {
            return redirect('/customer/view/trash');
        }
    }

    public function deleteData($id, $page = null) {
        $customer = Customers::withTrashed()->find($id);
        if( ! is_null($customer)) {
            $customer->forceDelete();
        }
        if( $page != null ) {
            return redirect('/customer/view/trash?page=' . $page);
        } else {
            return redirect('/customer/view/trash');
        }
    }
}
