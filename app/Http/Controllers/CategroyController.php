<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Categroy;
class CategroyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categroies = Categroy::orderby('id' , 'desc')->paginate(6);
        return view('Categroy.index' , compact('categroies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::orderby('id' , 'desc')->get();
        return view('Categroy.create' , compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->ValidateCategroy();
        Categroy::create([
            "name"          => $request->input('name'),
            "description"   => $request->input('description') ,
            "company_id"    => $request->input('company_id') ,
        ]);

        return redirect('/categroies');

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
       $categroy = Categroy::find($id);
       $companies = Company::orderby('id' , 'desc')->get();
       return view('Categroy.edit' , ['categroy' => $categroy , "companies" => $companies]);
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
        $categroy = Categroy::find($id);
        $categroy->update($this->ValidateCategroy());
        return redirect('/categroies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categroy = Categroy::find($id);
        $categroy->delete();
        return redirect()->back();
    }

    protected function ValidateCategroy()
    {
        return request()->validate([
            "name"          => ["required" , "string" , "min:3" , "max:15"]  ,
            "description"   => ["required" ,"string" , "min:10" , "max:150"] ,
            "company_id"    => ["required"]
        ]);
    }
}
