<?php

namespace App\Http\Controllers;

use App\Models\Programa;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function showPrograma($id_programa)
    {
        $programa = Programa::findOrFail($id_programa);
        //return view('programa', ['programa'=>programa_academico::all()]);
        return view('ucc.programa', compact('programa'));
    }

    public function etdh()
    {
        return view('ucc.etdh', ['programa' => Programa::all()->where('tipo_programa', 1)]);
    }

    public function pregrado()
    {
        return view('ucc.pregrado', ['programa' => Programa::all()->where('tipo_programa', 2)]);
    }

    public function posgrado()
    {
        return view('ucc.posgrado', ['programa' => Programa::all()->where('tipo_programa', 3)]);
    }

    public function extension()
    {
        return view('ucc.extension', ['programa' => Programa::all()->where('tipo_programa', 4)]);
    }

}
