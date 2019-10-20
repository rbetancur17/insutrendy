<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\SubCategorie;
use App\SubCategorieChild;

class SubCategoryChild extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $subcategories = SubCategorie::all();
        return View('admin.subCategoriaChild', compact('subcategories') );
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
        $subcategory = new SubCategorieChild();
        $subcategory->code = $request->input('code');
        $subcategory->name = $request->input('name');
        $subcategory->id_subcategorie = $request->input('subcategorie_id');
        $subcategory->description = $request->input('description');
        $subcategory->save();
        return redirect()->back()->with('message', 'SubCategoria Nivel 2 almacenada con éxito');
    }


    public function active($id)
    {
        $categorie = SubCategorieChild::find($id);
        $categorie->status = 1;
        $categorie->save();
        return redirect()->back()->with('message', 'SubCategoría Activada con exito');

    }    

    public function inacactive($id)
    {
        $categorie = SubCategorieChild::find($id);
        $categorie->status = 2;
        $categorie->save();
        return redirect()->back()->with('message', 'SubCategoría Inactivada con exito');

    }      

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = SubCategorie::all();
        $subcategorie = SubCategorieChild::find($id); 
        return view('admin.detailSubCategoryChild',compact('category','subcategorie'));
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
