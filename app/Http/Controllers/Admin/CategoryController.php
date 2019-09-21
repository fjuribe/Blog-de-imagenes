<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
  
      $categories=Category::orderBy('id','DESC')->paginate();

      return view('admin.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(CategoryStoreRequest $request)
    {
        //validar

        $categories=Category::create($request->all());

        return redirect()->route('categories.edit',$categories->id)->with('info','Categoria creada con exito');
    }

    public function show($id)
    {
        //
        $categories=Category::find($id);
       // dd($categories);
        return view('admin.categories.show',compact('categories'));
    }

/**
    public function show($id)
    {
        $categories = categories::find($id);
        return view('admin.categories.show', compact('categories'));
    }
*/
    public function edit($id)
    {
                $categories=Category::find($id);
                return view("admin.categories.edit",compact('categories'));
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        //validar
        $categories=Category::find($id);
        $categories->fill($request->all())->save();

        return redirect()->route('categories.edit',$categories->id)->with('info','Categoria actualizada con exito');
    }


    public function destroy($id)
    {
        //
       $categories=Category::find($id)->delete();


       return back()->with('info','Eliminado correctamente');
    }
}
