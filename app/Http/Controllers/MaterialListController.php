<?php

namespace App\Http\Controllers;

use App\Models\MaterialList;
use Illuminate\Http\Request;

class MaterialListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MaterialList::all();
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
        $material_lists = new MaterialList();

        $material_lists->m_id = $request->m_id;
        $material_lists->o_id = $request->o_id;
        $material_lists->e_id = $request->e_id;
        $material_lists->taken_date = $request->taken_date;
        $material_lists->before_amount = $request->before_amount;
        $material_lists->return_date = $request->return_date;

        $material_lists->save();

        return $material_lists;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialList  $materialList
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return MaterialList::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialList  $materialList
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialList $materialLists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaterialList  $materialList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $material_lists = MaterialList::findOrFail($id);
        $material_lists->return_date = $request->return_date;
        $material_lists->after_amount = $request->after_amount;

        $material_lists->save();

        return $material_lists;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialList  $materialList
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialList $materialLists)
    {
        $material_lists->delete();

        return 'Deleted';
    }
}
