<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function index(){
        return view('customer');
    } 

    public function customer(Request $request){
        // validation in the form

        // $request->validate(
        //     [
        //         'name'=>'required',
        //         'country'=>'required',
        //         'gender'=>'required|in:male,female',
        //         'email'=>'required|email',
        //         'state'=>'required|',
        //         'adress'=>'required|',
        //         'password'=>'required',
        //     ]
        //     );

            echo"<pre>";
            var_dump($request->all());
           
            // insert query into the database
            $customer=new Customer;
            $customer->name=$request['name'];
            $customer->email=$request['email'];
            $customer->country=$request['country'];
            $customer->state=$request['state'];
            $customer->adress=$request['adress'];
            $customer->gender=$request['gender'];
            $customer->dob=$request['dob'];
            $customer->password=md5($request['password']);
            $customer->save();
            return redirect('/customer/view');
    }

    public function view(){
        $customers=Customer::all();
        // echo "<pre>";
        // print_r($customers);

        $data=compact('customers');
        return view('customerview')->with($data);
    }
    public function delete($id){
Customer::find($id)->delete();
return redirect()->back();
    // echo"<pre>";    
    // print_r($customer);

    }

}
