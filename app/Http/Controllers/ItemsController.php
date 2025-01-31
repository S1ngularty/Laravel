<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\items;
use App\Models\item_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item= items::withTrashed()
        ->join('category_item as ci','items.id','=','ci.item_id')
        ->join('category as c','c.id','=','ci.category_id')
        ->select('items.item_name','items.description','items.price','c.category','items.id','items.deleted_at')->get();

        return view('items.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $item= category::all();
        return view('items.create',compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules=[
            'item_name'=>'required|min:2',
            'item_price'=>'required|min:1 '
        ];

        $message=[
            'item_name'=>'this data must be provided, please enter valid format',
            'item_price'=>'price must be provided.'
        ];

        $validator=validator($request->all(),$rules,$message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $filename=$request->file('image_path')->hashName();

            $item=new items();
            $item->item_name=$request->item_name;
            $item->description=$request->item_description;
            $item->price=$request->item_price;
            $item->img_path=$filename;
            $item->save();
            $last_id=$item->id;
    
            $ic= new item_category();
            $ic->item_id=$last_id;
            $ic->category_id=$request->item_category;

            if($ic->save()){
                $path=$request->file('image_path')->storeAs('item_images',$filename,'public');
                if($path){
                    return Redirect::route('item.index');
                }else{
                    return redirect()->back();  
                }
            }
    
            return Redirect::route('item.index');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = DB::table('items as i')
        ->join('category_item as ci','ci.item_id','=','i.id')
        ->join('category as c', 'c.id','=','ci.category_id')
        ->select('i.*','category')
        ->where('i.id','=',$id)
        ->first();
        $category = category::all();
        return view('items.edit',['item'=>$item],compact('category'));
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     $item=items::where('id',$id)->update([
        'item_name'=>$request->item_name,
        'price'=>$request->item_price,
        'description'=>$request->item_description
     ]);
        
        $category=item_category::where("item_id",$id)->update([
            'category_id'=>$request->item_category
        ]);
      if ($item) {
    return redirect()->route('item.index')->with('success', 'Item updated successfully.');
} else {
    return redirect()->back()->with('error', 'Update failed or no changes detected.');
}
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(items $items, string $id)
    {
        $item=items::find($id);
        if($item->delete($id)){
            return Redirect::route('item.index');
        }
    }

    public function restore(string $id){
        $restore=items::withTrashed()->find($id)->restore();
        if($restore){
            return redirect()->back();
        }else{
            return 'failed to restore';
        }
    }
}
