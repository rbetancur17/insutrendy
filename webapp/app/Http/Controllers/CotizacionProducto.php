<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;
use App\SubCategorie;
use Mail;


class CotizacionProducto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cotizacion');
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
        $product = Product::where('id_product',$request->input('id_product'))->get();
        $categorie = Categorie::all(); 
        $subcategorie = SubCategorie::all(); 
        $nombreCliente = $request->input('nombre');
        $emailCliente = $request->input('email');
        $movilCliente = $request->input('movil');
        $cantidad = $request->input('cantidad');
        try{
            Mail::send('emails.quotation', compact('product','nombreCliente','emailCliente','movilCliente','cantidad'), function($mail) use($product,$nombreCliente,$emailCliente,$movilCliente,$cantidad){
                $mail->subject("Cotización de producto ");
                $mail->to("stiven.betancur@gmail.com");
                $mail->from( "director@insutrendy","Insutrendy" );
            });
        } catch (Exception $e) {}

        return redirect()->back()->with('message', 'Cotización enviada con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('id_product',$id)->get();
        $categorie = Categorie::all(); 
        $subcategorie = SubCategorie::all(); 
        return view('cotizacion',compact('products','categorie','subcategorie') );
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
