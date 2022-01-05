<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categroy;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby('id' , 'desc')->paginate(6);
        return view('Products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categroies = Categroy::orderby('id' , 'desc')->get();
        return view('Products.create' , ['categroies' => $categroies ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = null;
        $this->validateProduct();
        if($request->has('file')){
            $image = $request->file('file')->storeAs('Products' ,$request->name.".jpg");
        }
       
        Product::create([
            'name'          => $request->name ,
            'description'   => $request->description ,
            'categroy_id'   => $request->categroy_id ,
            'price1'        => $request->price1 ,
            'price2'        => $request->price2 ,
            'amount'        => $request->amount ,
            'image'         => $image
        ]);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product    = Product::find($id);
        $categroies = Categroy::orderby('id' , 'desc')->get();
        return view('Products.edit' , ['product' => $product , 'categroies' => $categroies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($this->validateProduct());
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    protected function validateProduct()
    {
        return request()->validate([
            "name"         => ["required" , "string" ,"max:15" , "min:3"] ,
            "categroy_id"  => ["required"] ,
            "description"  => ["required" , "string" , "min:10" , "max:150"] ,
            "price1"       => ["required" , "integer" ] ,
            "price2"       => ["required" , "integer"] ,
            "amount"       => ["required" , "integer"] ,
        ]);
    }
}
