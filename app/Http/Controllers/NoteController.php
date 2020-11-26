<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
//importa la dase de datos
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{

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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    public function show(){
        $listNotes = DB::table('notes')->get();
        // $listaAlumnos = listaAlumnos;
        return view('home', compact('listNotes'));
    }

    public function create(Request $request){
        $dataForm = $request->except('_token','crear');
        // return $datosform;
        DB::table('notes')->insertGetId(['title'=>$dataForm['title'],'description'=>$dataForm['description']]);

        return redirect('/');
    }

    public function destroy($id){
        //return $id;
        DB::table('notes')->where('id','=', $id)->delete();
        //envio a routes a la ruta mostrar
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
         //recibir los datos del formulario
         $data = $request->except('_token', '_method','update');
         // return $datos;
         DB::table('notes')->where('id','=', $id)->update($data);
         return redirect('/');
    }
}
