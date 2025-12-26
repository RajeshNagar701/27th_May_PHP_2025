<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

    }

    public function login() {
        return view('website/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website/singup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new customer();
        $data->name=$request->name;  
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->gender=$request->gender;
        $data->hobby=implode(",",$request->hobby); // arr to string
        $data->mobile=$request->mobile;
      

        $image = $request->file('image');  // image get
        $filename = time() . '_img.' . $request->file('image')->getClientOriginalExtension(); // name set
        $image->move('upload/customers', $filename); // move in public folder
        $data->image = $filename; // store in name in database

        $data->save();
        echo "<script>
        alert('Signup Success');
        window.location='/login';
        </script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        $cust_arr = customer::all();  // select * from $tbl
        return view('admin/manage_customer', ['cust_arr' => $cust_arr]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer,$id)
    {
        $data=customer::find($id); // select * from contact whee id=5
        $image=$data->image;
        $data->delete();
        unlink('upload/product/'.$image);
        echo "<script>
        alert('Customer Delete Success');
        window.location='/manage_customer';
        </script>";
    }
}
