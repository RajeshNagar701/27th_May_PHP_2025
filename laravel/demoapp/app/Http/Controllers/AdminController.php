<?php
/*
In Laravel, the "model" is the 
Eloquent ORM (Object-Relational Mapper) 
which provides an Active Record implementation for interacting with your database. 

TABLES => model =>  controleer   
posts      post     postController

php artisan make :model post -mcr 
tables
model
controller
*/


namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    public function admin_auth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = admin::where('email', $request->email)->first();   // get() all in arr // first -> single data
        if (! $data || ! Hash::check($request->password, $data->password)) {
            echo "<script>
             alert('Wrong Creadential so Login Failed');
             window.location='/login';
             </script>";
        } else {

            session()->put('aname', $data->name); // $_SESSION['sname']=$data->name;
            session()->put('aid', $data->id);

            echo "<script> alert('Login Success');
                window.location='/dashboard';</script>";
        }
    }

    public function adminlogout()
    {
        session()->pull('aid');
        session()->pull('aname');
        echo "<script> alert('Logout Success');
        window.location='/login';
        </script>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
