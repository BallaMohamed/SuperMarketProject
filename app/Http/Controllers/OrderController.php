<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth; 
use Carbon\Carbon;
use App\Models\User;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Order::where('status' , $request->status)->get();
        $count = $orders->count();
        return view("orders.index" , ["orders" => $orders , "status" =>$request->status , "count" => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MakeOreder(Request $request)
    {
        $data['total']  =  request('total');
        $data['status']  = 1;
        $data['user_id'] = Auth::user()->id;
        $order = Order::create($data);
        foreach($request->products as $product){
            $Detail = new OrderDetail();
            $Detail->order_id     = $order->id;
            $Detail->product_name = $product["product_name"];
            $Detail->quantity     = $product["quantity"];
            $Detail->unit_price   = $product["unit_price"];
            $Detail->row_sub_total = $product["row_sub_total"];
            $Detail->save();
           }
       
       return  ["status" => 1 , "Order Number" => $order->id];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view("orders.show" , ["order" => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->back();
    }

    public function changeStatus($id)
    {
        $order = Order::find($id);
        $order->status     = $order->status + 1 ;
        $order->created_at = Carbon::now();
        $order->save();
        if($order->status == 4)
        {
          $id = $order->user_id;
          $user = User::find($id);
          $user->point = $user->point + 10;
          $user->save();
        }
        return redirect()->back();
    }

    public function print($id)
    {
        $order = Order::find($id);
        return view("orders.print" , ["order" => $order]);
    }

    public function getOrderStatus($id)
    {
        $order = Order::find($id);
        return ["status" => $order->status];
    }

    public function getOrderDetails($id)
    {
        $order = Order::find($id);
        return $order->orderDetails;
    }
}
