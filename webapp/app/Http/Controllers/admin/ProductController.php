<?php

namespace App\Http\Controllers\admin;

use App\Categorie;
use App\Product;
use App\SubCategorie;
use App\SubCategorieChild;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategorieChild::all()->where("status",1);
        return view('admin.product', compact('subcategories') );
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
        
        $product = new Product();
        $product->code = $request->input('code');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->id_subcategorie_child = $request->input('subcategorie_child_id');
        $product->description = $request->input('description');

        if($request->file('image1')!=null){
            $rules = ['image1'=> 'required|image1|max:1024*1024*1',];
            $messages = [
                'image1.required' => 'la imagen es requerida',
                'image1.image_poliza' => 'Formato no permitido',
                'image1.max' => 'El maximo permitido es 1MB'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            $name = $product->code . '-' . $request->file('image1')->getClientOriginalName();
            $request->file('image1')->move('img/product', $name);
            $product->image = $name;
        } 

        if($request->file('image2')!=null){
            $rules = ['image2'=> 'required|image1|max:1024*1024*1',];
            $messages = [
                'image2.required' => 'la imagen es requerida',
                'image2.image_poliza' => 'Formato no permitido',
                'image2.max' => 'El maximo permitido es 1MB'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            $name = $product->code . '-' . $request->file('image2')->getClientOriginalName();
            $request->file('image2')->move('img/product', $name);
            $product->image2 = $name;
        }    

        if($request->file('image3')!=null){
            $rules = ['image3'=> 'required|image1|max:1024*1024*1',];
            $messages = [
                'image3.required' => 'la imagen es requerida',
                'image3.image_poliza' => 'Formato no permitido',
                'image3.max' => 'El maximo permitido es 1MB'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            $name = $product->code . '-' . $request->file('image3')->getClientOriginalName();
            $request->file('image3')->move('img/product', $name);
            $product->image3 = $name;
        } 

        if($request->file('image4')!=null){
            $rules = ['image4'=> 'required|image1|max:1024*1024*1',];
            $messages = [
                'image4.required' => 'la imagen es requerida',
                'image4.image_poliza' => 'Formato no permitido',
                'image4.max' => 'El maximo permitido es 1MB'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            $name = $product->code . '-' . $request->file('image4')->getClientOriginalName();
            $request->file('image4')->move('img/product', $name);
            $product->image4 = $name;
        }         

        $product->save();

        return redirect()->back()->with('message', 'Producto almacenada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id); 
        $subcategoriesChild = SubCategorieChild::all();
        return view('admin.productDetail',compact('product','subcategoriesChild'));
    }

    public function list(){
        $products = Product::get();
        $categorie = Categorie::all();
        $subcategories = SubCategorie::all(); 
        return view('admin.listaProductos', compact('products','subcategories','categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $product->code = $request->input('code');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->id_subcategorie_child = $request->input('subcategorie_child_id');
        $product->description = $request->input('description');
        $product->save();
        return redirect()->back()->with('message', 'Producto almacenada con éxito');
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
        $product = Product::find($id);
        $product->code = $request->input('code');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->id_subcategorie_child = $request->input('subcategorie_child_id');
        $product->description = $request->input('description');
        $product->save();
        return redirect()->back()->with('message', 'Producto almacenada con éxito');

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


    public function active($id)
    {
        $product = Product::find($id);
        $product->status = 1;
        $product->save();
        return redirect()->back()->with('message', 'Producto Activada con exito');

    }    

    public function inacactive($id)
    {
        $product = Product::find($id);
        $product->status = 2;
        $product->save();
        return redirect()->back()->with('message', 'Producto Activada con exito');
    }    



}
