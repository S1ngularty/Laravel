<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    $rules=[
        'fname'=>'required|min:2',
        'lname'=>'required|min:2|alpha',
        'age'=>'required|min:18|numeric',
        'city'=>'min:3',
        'img_path'=>'mimes:jpeg,jpg,png'
    ];

    $message=[
        'required'=> 'this information must be provided',
        'extension'=> 'extension must be jpg, jpeg, or png'

    ];

    $validator=validator($request->all(),$rules,$message);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }else{

        if($request->has('img_path')){

            $filename=$request->file('img_path')->hashName(); 

                $customer =new customer();   
                $customer->fname= $request->fname;
                $customer->lname= $request->lname;
                $customer->age= $request->age;
                $customer->city= $request->city;
                        if($customer->save()){
                        
                        $last_id=$customer->id;
                        $image= new UploadImage();
                        $image->customer_id=$last_id;
                        $image->image_path=$filename;

                        if( $image->save()){
                            $path=$request->file('img_path')->storeAs('images',$filename,'public');
                if($path){
                            return Redirect::route('product.index');
                }
                        }
                    }
        }
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
        $customer= DB::table('customers as c')
        ->join('customer_profiles as cp','cp.customer_id','=','c.id')
        ->select('c.*','cp.image_path')
        ->where('c.id','=',$id)
        ->first();
        // dd($customer);
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
