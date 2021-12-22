<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employee::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        
        $employee->job = $request->job;
        $employee->start_date = $request->start_date;
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->birth_date = $request->birth_date;
        $employee->tel = $request->tel;
        $employee->salary = $request->salary;
        $employee->address = $request->address;
        
        $employee->save();

        return $employee;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employee::findOrFail($id);
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
        $employee = Employee::findOrFail($id);

        $employee->job = $request->job;
        $employee->start_date = $request->start_date;
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->birth_date = $request->birth_date;
        $employee->tel = $request->tel;
        $employee->salary = $request->salary;
        $employee->address = $request->address;

        $employee->save();

        return $employee;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return 'Deleted';
    }
}
