<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = customer::all();
        return view('customer.index', ['fetch'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer =new customer();
        $customer->fname= $request->fname;
        $customer->lname= $request->lname;
        $customer->age= $request->age;
        $customer->city= $request->city;
        if($customer->save()){
            return Redirect::route('product.index');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
    
         
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer= customer::find($id);
        return view('customer.edit',['edit'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id )
    {
        $customer=customer::where('id', $id)->update([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'age'=>$request->age,
            'city'=>$request->city
        ]);

        if($customer){
            return Redirect::route('product.index');
        }else{
            return Redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $del= customer::destroy($id);
            if ($del){
                return Redirect::route('product.index');
            }else{
                Redirect()->back();
            }
    }
}
