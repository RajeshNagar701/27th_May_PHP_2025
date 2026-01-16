<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website/shop');
    }

    public function single_shop()
    {
        return view('website/shop-single');
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=category::all();
        return view('admin/add_product',['categories'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new product();
        $data->cate_id=$request->cate_id;  //$_REQUEST['name'];
        $data->prod_name=$request->prod_name;
        $data->main_price=$request->main_price;
        $data->disc_price=$request->disc_price;
        $data->short_desc=$request->short_desc;
        $data->long_desc=$request->long_desc;
       
        $image = $request->file('prod_image');  // image get
        $filename = time() . '_img.' . $request->file('prod_image')->getClientOriginalExtension(); // name set
        $image->move('upload/product', $filename); // move in public folder
        $data->prod_image = $filename; // store in name in database

        $data->save();
        echo "<script>
        alert('Product added Success');
        window.location='/add_product';
        </script>";
        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $prod_arr = product::join('categories','products.cate_id','=','categories.id')->get(['products.*','categories.cate_name']); 
        return view('admin/manage_product',['prod_arr'=>$prod_arr]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,$id)
    {
        $data=product::find($id); // select * from contact whee id=5
        $prod_image=$data->prod_image;
        $data->delete();
        unlink('upload/product/'.$prod_image);
        echo "<script>
        alert('Product Delete Success');
        window.location='/manage_product';
        </script>";
    }
}
