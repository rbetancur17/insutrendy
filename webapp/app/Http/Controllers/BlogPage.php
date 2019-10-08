<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Categorie;
use App\SubCategorieChild;
use App\SubCategorie;
use Illuminate\Http\Request;

class BlogPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogd = Blog::all();
        //dd($blogs);
        $categorie = Categorie::all();
        $subcategorie = SubCategorie::all();
        $subcategorieChild = SubCategorieChild::all();
        return view('blogSite', compact('blogd','categorie','subcategorie','subcategorieChild'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogd = Blog::find($id);
        $categorie = Categorie::all();
        $subcategorie = SubCategorie::all();
        $subcategorieChild = SubCategorieChild::all();
        return view('blogdetails', compact('blogd','categorie','subcategorie','subcategorieChild'))
        ->with('message', 'Post Almacenado');
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
