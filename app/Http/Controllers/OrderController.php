<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::get();
        return $order;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        
        $order->o_id = $request->o_id;
        $order->c_id = $request->c_id;
        $order->order_date = $request->order_date;
        $order->deadline_date = $request->deadline_date;
        $order->status = $request->status;
        $order->metal = $request->metal;

        $file_order = $request->file('order_image');
        $filename_order = $file_order->getClientOriginalName();
        $filename_order = time() . '-' . str_replace(' ', '', $filename_order);
        $order_image = $file_order->storeAs("public/order", $filename_order);
        $order->order_image = "/storage/order/{$filename_order}";

        $order->save();

        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::findOrFail($id);
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
        // $order = Order::findOrFail($id);
        
        // $file_bill = $request->file('bill_image');
        // $filename_bill = $file_bill->getClientOriginalName();
        // $filename_bill = time() . '-' . str_replace(' ', '', $filename_bill);
        // $bill_image = $file_bill->storeAs("public/bill", $filename_bill);
        
        // $order->bill_image = "/storage/bill/{$filename_bill}";

        // $order->save();

        // return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return 'Deleted';
    }

    public function upState($id){
        $order = Order::findOrFail($id);

        if($order->status == "คำสั่งซื้อใหม่"){
            $order->status = "ขึ้นตัวเรือน";
        }elseif($order->status == "ขึ้นตัวเรือน"){
            $order->status = "เสร็จสิ้นการขึ้นตัวเรือน";
        }elseif($order->status == "เสร็จสิ้นการขึ้นตัวเรือน"){
            $order->status = "ฝังอัญมณี";
        }elseif($order->status == "ฝังอัญมณี"){
            $order->status = "เสร็จสิ้นการฝังอัญมณี";
        }elseif($order->status == "เสร็จสิ้นการฝังอัญมณี"){
            $order->status = "ขัดเครื่องประดับ";
        }elseif($order->status == "ขัดเครื่องประดับ"){
            $order->status = "เสร็จสิ้นการขัดเครื่องประดับ";
        }elseif($order->status == "เสร็จสิ้นการขัดเครื่องประดับ"){
            $order->status = "ชุบเครื่องประดับ";
        }elseif($order->status == "ชุบเครื่องประดับ"){
            $order->status = "เสร็จสิ้นการชุบเครื่องประดับ";
        }elseif($order->status == "เสร็จสิ้นการชุบเครื่องประดับ"){
            $order->status = "ชำระเงินเรียบร้อย";
        }

        $order->save();
    }

    // public function bill($request)
    // {
    //     $order = Order::findOrFail($request->o_id);
        
    //     $file_bill = $request->file('bill_image');
    //     $filename_bill = $file_bill->getClientOriginalName();
    //     $filename_bill = time() . '-' . str_replace(' ', '', $filename_bill);
    //     $bill_image = $file_bill->storeAs("public/bill", $filename_bill);
    //     $order->bill_image = "/storage/bill/{$filename_bill}";

    //     $order->save();

    //     return $order;
    // }
}
