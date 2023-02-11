<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::get();
        return view('orders.index', ['orders' => $orders]);
    }
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show', ['order' => $order]);
    }

   public function destroy($id){
     $order=Order::where('id',$id)->delete();
      return redirect()->route('order.index');
   }
   public function edit($id){
    $order=Order::find($id);
    return view('orders\edit',["order"=>$order]);
   }
   public function update(request $data , $id){
     Order::where('id',$id)->update($data->except('_method','_token'));
         return redirect()->route('order.index');
}
public function create()
    {

        return view('orders\create');
    }
 public function store(request $data){
Order::create($data->except('_token'));
 return redirect()->route('order.index');

 }



}



// Order   Product   Catgeory User
// OrderController   ProductController   CatgeoryController UserController
