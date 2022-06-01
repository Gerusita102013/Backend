<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Docente::with('r_carrera')->get();
        $num_rows = count($datos);
        if($num_rows != 0){
            return response()->json(['data'=>$datos, 'code'=>'200']);
        }else
            return response()->json(['code'=>'204']);
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
        $valida=Docente::where('correo_docente', $request->correo_docente)->get()->first();
        if($valida != null){
            return response()->json(['code'=>'400']);
        }else{
            
            $datos=new Docente();
            $datos->id_carrera=$request->id_carrera;
            $datos->nombres_docente=$request->nombres_docente;
            $datos->apellidos_docente=$request->apellidos_docente;
            $datos->correo_docente=$request->correo_docente;
            $datos->clave_docente=$request->clave_docente;
            
            $datos->save();
            return response()->json(['code'=>'200']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_docente)
    {
        $datos=Docente::where('id_docente',$id_docente)->get()->first();
        if($datos != null){
            $datos->id_carrera=$request->id_carrera;
            $datos->nombres_docente=$request->nombres_docente;
            $datos->apellidos_docente=$request->apellidos_docente;
            $datos->correo_docente=$request->correo_docente;
            $datos->clave_docente=$request->clave_docente;
            $datos->update();
            return response()->json(['code'=>'200']);
        }else
            return response()->json(['code'=>'204']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id_docente)
    {
        $datos=Docente::find($id_docente);  
        if($datos != null){
            $datos->delete();
            return response()->json(['code'=>'200']);
        }else
            return response()->json(['code'=>'204']);
    }
}
