<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function create(){
        $url=url('/customers'); //url for post the data into the database
        $customer = new Customer();
        $title="customer registration";
        $data=compact('url',"title","customer");
        return view('customer')->with($data);
       // return redirect('/customer/view');
        


    } 

    // this function customer is used for store the data in database
    public function customer(Request $request){

        // validation in the form

        $request->validate(
            [
                'name'=>'required',
                'country'=>'required',
                'gender'=>'required|in:male,female',
                'email'=>'required|email',
                'state'=>'required|',
                'adress'=>'required|',
                'password'=>'required',
            ]
            );
            
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
    public function login(Request $request){
        return view('login');
    }
        // public function login(Request $request){
        //         $credentials=$request->validate([
        //             'email'=>'required|emial',
        //             'password'=>'required',
        //         ]);
                
        //             if(Auth::attempt($credentials)){
        //                 return redirect()->route('dashboard');
        //             }
        //             else{
        //                 return view('login');
        //             }
        // }
    
        // public function dashboardpage(){
        //     if(Auth::check()){
        //         return view('dashboard');
        //     }
        //     else{
        //         return redirect()->route('login');
        //     }
        // }
    public function view(){
        $customers=Customer::all();
        // echo "<pre>";
        // print_r($customers);

        $data=compact('customers');
        return view('customerview')->with($data);
    }
    public function delete($id){
    Customer::find($id)->delete();
    return redirect('customer/view');
    // echo"<pre>";    
    // print_r($customer);

    }
    public function edit($id){
        $customer=Customer::find($id);
        if(is_null($customer )){
            return redirect('customer/view');   //....
        }
        else{
        $title=" update Customer";

            $url=url('/customer/view/update')."/".$id;
            $data=compact('customer','url','title');
            // dd($data);
            return view('customer')->with($data);
        }
    }
    public function update($id,Request $request){
        $customer=Customer::find($id);
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->country=$request['country'];
        $customer->state=$request['state'];
        $customer->adress=$request['adress'];
        $customer->gender=$request['gender'];
        $customer->dob=$request['dob'];
        $customer->save();
        return redirect('customer/view');
    }

        // public function upload(Request $request){
        //     echo"<pre>";
        //     print_r($request->all());
        //     return view('upload');
        //     echo $request->file('image')->store('uploads');
        // }       
}
