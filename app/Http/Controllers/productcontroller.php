<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\productmodel;

class productcontroller extends Controller
{
    public function index(){
        $product = DB::table('product')-> get();   
        return view ('product');
    }

    public function store (Request $Request){
        $validator = Validator::make($Request->all(),[ 
            'name'=> 'required',
            'prince'=>'required',
            'stock' => 'required',
        ]);
        
    if ($validator->fails()) {
        return response()->json($validator->errors());
      }
       $product = new Product();
       $product -> name = $request->name;
       $product -> prince = $request->prince;
       $product -> stock = $request->stock;
    
    $product->save();
    return redirect()->back()->with('success','Data added successfully');
    }
    public function getAll(){
        $product = Product::all();
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }
    public function getById(){
        $product = Product::Where ('id','=', $id)->first();
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    public function update(Request $Request){
        $validator = Validator::make($Request->all(),[ 
            'name'=> 'required',
            'prince'=>'required',
            'stock' => 'required',
        ]);
        
    if ($validator->fails()) {
        return response()->json($validator->errors());
      }
       $product = Product::Where ('id','=', $id)();
       $product -> name = $request->name;
       $product -> prince = $request->prince;
       $product -> stock = $request->stock;
    
    $product->save();
    return redirect()->back()->with('success','Data added successfully');
    }
    public function destroy($id)
    {
        $delete = Product::where('id', '=', $id)->delete();

      return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
    }

