<?php

namespace App\Http\Controllers;

use App\Models\OrderTask;
use Illuminate\Http\Request;

class OrderTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_task = OrderTask::get();
        return $order_task;
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
        $order_task = new OrderTask();

        $order_task->o_id = $request->o_id;
        $order_task->e_id = $request->e_id;
        $order_task->task_name = $request->task_name;
        $order_task->start_date = $request->start_date;
        $order_task->due_date = $request->due_date;
        $order_task->task_status = $request->task_status;
        $order_task->fail_count = $request->fail_count;

        $order_task->save();

        return $order_task;
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
    public function destroy($id)
    {
        $order_task = OrderTask::findOrFail($id);
        $order_task->delete();

        return 'Deleted';
    }

    public function good($id){
        $order_task = OrderTask::findOrFail($id);

        if($order_task->task_name == "ขึ้นตัวเรือน"){
            $order_task->task_name = "เสร็จสิ้นการขึ้นตัวเรือน";
        }elseif($order_task->task_name == "ฝังอัญมณี"){
            $order_task->task_name = "เสร็จสิ้นการฝังอัญมณี";
        }elseif($order_task->task_name == "ขัดเครื่องประดับ"){
            $order_task->task_name = "เสร็จสิ้นการขัดเครื่องประดับ";
        }elseif($order_task->task_name == "ชุบเครื่องประดับ"){
            $order_task->task_name = "เสร็จสิ้นการชุบเครื่องประดับ";
        }

        $order_task->task_status = 1;
        $order_task->save();
    }

    public function bad($id){
        $order_task = OrderTask::findOrFail($id);
        $order_task->fail_count = $order_task->fail_count + 1;
        $order_task->save();

        return $order_task;
    }
}
