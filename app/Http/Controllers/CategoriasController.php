<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaRequest;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Categoria::all();
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearCategoria(CategoriaRequest $request)
    {
        $cat                = new Categoria();
        $cat->nameCategoria = $request->nameCategoria;
        $cat->descCategoria = $request->descCategoria;
        $cat->estado        = $request->estado;
        $cat->save();

        return $cat;
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
        $cat                = Categoria::findOrFail($id);
        $cat->nameCategoria = $request->input('nameCategoria');
        $cat->descCategoria = $request->input('descCategoria');
        $cat->estado        = $request->input('estado');
        $cat->save();

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Categoria::find($id);
        $cat->delete();
    }
}
