<?php

namespace App\Http\Controllers;

use App\Documentos;
use App\Http\Requests\documentos\documentosRequest;
use App\TipoDocumento;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Documentos::paginate();

        return view('documentos.index',compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $tipoDocumento = TipoDocumento::all();

       return view('documentos.create' , compact('tipoDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(documentosRequest $request, Documentos $documento)
    {
        $documento->create($request->all());

        return redirect()->back()->with('success', 'Documento criado com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documento = Documentos::findOrFail($id);
        $tipoDocumento = TipoDocumento::all();

        return view('documentos.edit', compact('documento', 'tipoDocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(documentosRequest $request, $id)
    {
        $documento = Documentos::findOrFail($id);

        $documento->update($request->all());

        return redirect()->back()->with('success', 'Documento atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento = Documentos::findOrFail($id);

        $documento->delete();

        return redirect()->back()->with('success', 'Documento deletado');
    }
}
