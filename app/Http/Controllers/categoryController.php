<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::withTrashed()->paginate(10);
        return view('category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new category();
        $category->category= $request->category_name;
        $category->save();

        return Redirect::route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category= category::find($id);
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category= category::find($id);
        $category->category=$request->category_name;
        $category->save();

        if($category){
            return Redirect::route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category= category::find($id);
        if($category->delete($category)){
            return Redirect()->back();
        }
    }

    public function restore (string $id){
        $category= category::withTrashed()->find($id)->restore();

        if($category){
            return redirect()->back();
        }else{
            return 'failed to restore the record'; 
        }
    }
}
