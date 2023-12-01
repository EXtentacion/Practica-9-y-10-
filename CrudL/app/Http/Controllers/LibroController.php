<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbooks= libro::all();
        return view('Libros.index', compact('allbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addLibro= new libro();
        $addLibro->titulo= $request->txttit;
        $addLibro->autor= $request->txtaut;
        $addLibro->paginas= $request->txtpag;
        $addLibro->anio= $request->txtan;
        $addLibro->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libro $libro)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $updLibro= libro::find($id);
        $updLibro->titulo= $request->txttit;
        $updLibro->autor= $request->txtaut;
        $updLibro->paginas= $request->txtpag;
        $updLibro->anio= $request->txtan;
        $updLibro->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $desLibro= libro::find($id);
        $desLibro->delete();
        return redirect()->back();
    }
}
