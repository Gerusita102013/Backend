<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //MOSTRAR
    public function index()
    {
        $datos=Rol::all();
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
      //INGRESAR
     public function store(Request $request)
    {
        $valida=Rol::where('nombre_rol', $request->nombre_rol)->get()->first();
        if($valida != null){
            return response()->json(['code'=>'400']);
        }else{
            $datos=new Rol();
            $datos->nombre_rol=$request->nombre_rol;
            $datos->estado_rol=$request->estado_rol;
            $datos->save();
            return response()->json(['code'=>'200']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
      //ACTUlizar_modificar
     public function update(Request $request, $id_rol)
    {
        $datos=Rol::where('id_rol',$id_rol)->get()->first();
        if($datos != null){
            $datos->nombre_rol=$request->nombre_rol;
            $datos->estado_rol=$request->estado_rol;
            $datos->update();
            return response()->json(['code'=>'200']);
        }else
            return response()->json(['code'=>'204']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
      //eliminar
     public function destroy($id_rol)
    {
        $datos=Rol::find($id_rol);  
        if($datos != null){
            $datos->delete();
            return response()->json(['code'=>'200']);
        }else
            return response()->json(['code'=>'204']);
    }
}
