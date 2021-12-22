<?php

namespace App\Http\Controllers;

use App\Models\JewelryInfo;
use Illuminate\Http\Request;

class JewelryInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jewelry_info = JewelryInfo::get();
        return $jewelry_info;
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
        $jewelry_info = new JewelryInfo();

        $jewelry_info->o_id = $request->o_id;
        $jewelry_info->jewelry_type = $request->jewelry_type;
        $jewelry_info->jewelry_piece = $request->jewelry_piece;
        $jewelry_info->gem_weight = $request->gem_weight;
        $jewelry_info->gem_size = $request->gem_size;
        $jewelry_info->gem_name = $request->gem_name;
        $jewelry_info->gem_pieces = $request->gem_pieces;

        $file_gem_image = $request->file('gem_image');
        $filename_gem_image = $file_gem_image->getClientOriginalName();
        $filename_gem_image = time() . '-' . str_replace(' ', '', $filename_gem_image);
        $gem_image = $file_gem_image->storeAs("public/gem", $filename_gem_image);
        $jewelry_info->gem_image = "/storage/gem/{$filename_gem_image}";

        $jewelry_info->save();

        return $jewelry_info;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return JewelryInfo::findOrFail($id);
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
        $jewelry_info = JewelryInfo::findOrFail($id);
        $jewelry_info->delete();

        return 'Deleted';
    }
}
