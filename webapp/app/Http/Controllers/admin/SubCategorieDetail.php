<?php

namespace App\Http\Controllers\admin;

use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategorie;

class SubCategorieDetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $id = $request->input('id_subcategorie');
        $subcategorie = SubCategorie::find($id);
        $subcategorie->code = $request->input('code');
        $subcategorie->name = $request->input('name');
        $subcategorie->id_categorie = $request->input('categorie_id');
        $subcategorie->description = $request->input('description');
        $subcategorie->save();
        return redirect()->back()->with('message', 'SubCategoría actualizada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Categorie::all();
        $subcategorie = SubCategorie::find($id); 
        return view('admin.detailSubCategory',compact('category','subcategorie'));
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
        //
    }
}
