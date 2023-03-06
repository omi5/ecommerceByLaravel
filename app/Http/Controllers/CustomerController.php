<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $url  =url('/customer');
        $title = "Customer Registration";
        $data = compact('url','title');
        return view('form')->with($data);
    }
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        $customer = new Customer;
        //insert Query 
        $customer->name= $request['name'];
        $customer->email= $request['email'];
        $customer->password= md5($request['password']);
        $customer->country= $request['country'];
        $customer->address= $request['address'];
        $customer->state= $request['state'];
        $customer->dob= $request['dob'];
        $customer->save();

        return redirect('/customer/view');
    }

    public function view(Request $request){

        $search = $request['search'] ?? "";
        if($search != ""){
            $customers = Customer::where('name','LIKE', "%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else{
            $customers = Customer::all();
        }
        
        $data = compact('customers','search');

        return view('customer-view')->with($data);
    }

    public function trash(){
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');

        return view('customer-trash')->with($data);
    }

    public function delete($id){
        $customer = Customer::find($id);

        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer/view');
    }
    public function forceDelete($id){
        $customer = Customer::withTrashed()->find($id);

        if(!is_null($customer)){
            $customer->forceDelete();
        }
        return redirect('customer/trash');
    }

    public function restore($id){
        $customer = Customer::withTrashed()->find($id);

        if(!is_null($customer)){
            $customer->restore();
        }
        return redirect('customer/view');
    }

    public function edit($id){
        $customer = Customer::find($id);

        if(is_null($customer)){
            return redirect('/customer/view');
        }
        else{
            $url = url('/customer/update').'/'.$id;
            $title = 'Update Registration';
            $data = compact('customer','url','title');
            return view('form')->with($data);
        }
    }

    public function update($id, Request $request){
        
        $customer = Customer::find($id);

        $customer->name= $request['name'];
        $customer->email= $request['email'];
        // $customer->password= md5($request['password']);
        $customer->country= $request['country'];
        $customer->state= $request['state'];
        $customer->dob= $request['dob'];
        $customer->save();

        return redirect('/customer/view');
    }

    public function upload(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        // $fileName = time(). "img." . $request->file('upload')->getClientOriginalExtension();
       
         echo $request->file('upload')->store('images');
    }
}
