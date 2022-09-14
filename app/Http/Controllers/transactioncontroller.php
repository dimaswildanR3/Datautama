<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\transactionmodel;

class transactioncontroller extends Controller
{
    public function index(){
        $transaction = DB::table('transaction')-> get();
    }

    public function store (Request $Request){
        $validator = Validator::make($Request->all(),[ 
            'status'=> 'required',
            'reference_number'=>'required',
            'quantity' => 'required',
            'prince' => 'required',
            'total_prince' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
           
        ]);
        
    if ($validator->fails()) {
        return response()->json($validator->errors());
      }
       $transaction = new Transaction();
       $transaction -> status = $request->status;
       $transaction -> reference_number = $request->reference_number;
       $transaction -> quantity = $request->quantity;
       $quantity = $penjualan->quantity;
       $transaction -> prince = $request->prince;
       $prince = $penjualan->prince;
       $transaction -> total_prince = $request->quantity * $prince;
       $transaction -> user_id = $request->user_id;
       $transaction -> product_id = $request->product_id;
    
    $transaction->save();
    return redirect()->back()->with('success','Data added successfully');
    }

    public function getAll(){
        $transaction = Transaction::all();
        return response()->json([
            'success' => true,
            'data' => $transaction
        ]);
    }
    public function getById(){
        $transaction = Transaction::Where ('id','=', $id)->first();
        return response()->json([
            'success' => true,
            'data' => $transaction
        ]);
    }
    public function update(Requst $Request){
        $validator = Validator::make($Request->all(),[ 
            'status'=> 'required',
            'reference_number'=>'required',
            'quantity' => 'required',
            'prince' => 'required',
            'total_prince' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
           
        ]);
        
    if ($validator->fails()) {
        return response()->json($validator->errors());
      }
       $transaction = Transaction::Where ('id','=', $id)();
       $transaction -> status = $request->status;
       $transaction -> reference_number = $request->reference_number;
       $transaction -> quantity = $request->quantity;
       $quantity = $penjualan->quantity;
       $transaction -> prince = $request->prince;
       $prince = $penjualan->prince;
       $transaction -> total_prince = $request->quantity * $prince;
       $transaction -> user_id = $request->user_id;
       $transaction -> product_id = $request->product_id;
    
    $transaction->save();
    return redirect()->back()->with('success','Data added successfully');
    }
    public function destroy($id)
    {
        $delete = Transaction::where('id', '=', $id)->delete();

      return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}
