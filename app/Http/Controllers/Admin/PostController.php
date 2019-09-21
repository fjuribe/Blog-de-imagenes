<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
  
      $posts=Post::orderBy('id','DESC')->paginate();

      return view('admin.post.index',compact('posts'));
    }


    public function create()
    {
        return view('admin.post.create');
    }


    public function store(PostStoreRequest $request)
    {
        //validar

        $posts=Post::create($request->all());

        return redirect()->route('post.edit',$posts->id)->with('info','entrada creada con exito');
    }

    public function show($id)
    {
        //
        $posts=Post::find($id);
       // dd($posts);
        return view('admin.post.show',compact('posts'));
    }

/**
    public function show($id)
    {
        $posts = posts::find($id);
        return view('admin.posts.show', compact('posts'));
    }
*/
    public function edit($id)
    {
                $posts=Post::find($id);
                return view("admin.post.edit",compact('posts'));
    }

    public function update(PostUpdateRequest $request, $id)
    {
        //validar
        $posts=Post::find($id);
        $posts->fill($request->all())->save();

        return redirect()->route('post.edit',$posts->id)->with('info','entrada actualizada con exito');
    }


    public function destroy($id)
    {
        //
       $posts=Post::find($id)->delete();


       return back()->with('info','Eliminado correctamente');
    }
}
