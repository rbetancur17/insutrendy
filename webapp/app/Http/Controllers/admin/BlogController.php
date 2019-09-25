<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog');
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
        $post = new Blog();
        $post->title = $request->input('title');
        $post->fecha = $request->input('dateEntrace');
        $post->introduction = $request->input('intro');
        $post->content = $request->input('content');
        $post->publish = $request->input('publish');

        if($request->file('image')!=null){
            $rules = ['image'=> 'required|image|max:1024*1024*1',];
            $messages = [
                'image.required' => 'la imagen es requerida',
                'image.image_poliza' => 'Formato no permitido',
                'image.max' => 'El maximo permitido es 1MB'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            $name = $post->code . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('img/blog-thumbs', $name);
            $post->image = $name;
        }

        if($request->file('image01')!=null){
            $rules = ['image01'=> 'required|image|max:1024*1024*1',];
            $messages = [
                'image.required' => 'la imagen es requerida',
                'image.image_poliza' => 'Formato no permitido',
                'image.max' => 'El maximo permitido es 1MB'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            $name = $post->code . '-' . $request->file('image01')->getClientOriginalName();
            $request->file('image01')->move('img/blog-thumbs', $name);
            $post->image01 = $name;
        }

        if($request->file('image02')!=null){
            $rules = ['image02'=> 'required|image|max:1024*1024*1',];
            $messages = [
                'image.required' => 'la imagen es requerida',
                'image.image_poliza' => 'Formato no permitido',
                'image.max' => 'El maximo permitido es 1MB'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            $name = $post->code . '-' . $request->file('image02')->getClientOriginalName();
            $request->file('image02')->move('img/blog-thumbs', $name);
            $post->image02 = $name;
        }

        if($request->file('image03')!=null){
            $rules = ['image03'=> 'required|image|max:1024*1024*1',];
            $messages = [
                'image.required' => 'la imagen es requerida',
                'image.image_poliza' => 'Formato no permitido',
                'image.max' => 'El maximo permitido es 1MB'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            $name = $post->code . '-' . $request->file('image03')->getClientOriginalName();
            $request->file('image03')->move('img/blog-thumbs', $name);
            $post->image03 = $name;
        }

        $post->save();

        return redirect()->back()->with('message', 'Post almacenada con éxito');
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
        //
    }
}
