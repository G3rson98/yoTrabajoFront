<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Persona;
use Illuminate\Http\Request;

class ApiEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo json_encode("Hello server");
        return response()->json(array('exito'=>true));
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

      //  $persona= new Persona();
        // $persona->ci= $request->ci;
        // $persona->nombre= $request->nombre;
        // $persona->apellidoP= $request->apellidoP;
        // $persona->apellidoM= $request->apellidoM;
        // $persona->direccion= $request->direccion;
        // $persona->telefono= $request->telefono;
        // $persona->fechaNacimiento= $request->fechaNacimiento;
        // $persona->fechaRegistro= '03-02-2021';
        // $persona->foto= $request->foto;
        // $persona->longitud= $request->longitud;
        // $persona->latitud= $request->latitud;
        // //$persona->calificacionPromedio= 0;
        // $persona->tipo= 'empleado';
        // $persona->estado= 'activo';
        // $persona->sancion= 'inactivo';
        // $persona->estadoRegistro= 'espera';
        // $persona->fotoCi= $request->fotoCi;
        // $persona->fotoAntecedentesPenales= $request->fotoAntecedentesPenales;
        // $persona->fotoSelfieCi= $request->fotoSelfieCi;
        
        // $persona->save();
        // return response()->json($persona);
        
    }

    public function cargarFoto(Request $request)
    {   
        
        if ($request->hasFile('fotoCi')) {
            $file = $request->file('fotoCi');
            $filename = $file->getClientOriginalName();
            $filename = pathinfo($filename,PATHINFO_FILENAME);
            $name_file = str_replace(" ","_",$filename);
            $extension = $file->getClientOriginalExtension();
            $picture = date('His').'-'.$name_file.'.'.$extension;
            $file->move(public_path('Files/'),$picture);
            return response()->json(array('exito'=>true,'direccion'=>$picture));
        }else
        if ($request->hasFile('fotoAntecedentesPenales')) {
            $file = $request->file('fotoAntecedentesPenales');
            $filename = $file->getClientOriginalName();
            $filename = pathinfo($filename,PATHINFO_FILENAME);
            $name_file = str_replace(" ","_",$filename);
            $extension = $file->getClientOriginalExtension();
            $picture = date('His').'-'.$name_file.'.'.$extension;
            $file->move(public_path('Files/'),$picture);
            return response()->json(array('exito'=>true,'direccion'=>$picture));
        }else

        if ($request->hasFile('fotoSelfieCi')) {
            $file = $request->file('fotoSelfieCi');
            $filename = $file->getClientOriginalName();
            $filename = pathinfo($filename,PATHINFO_FILENAME);
            $name_file = str_replace(" ","_",$filename);
            $extension = $file->getClientOriginalExtension();
            $picture = date('His').'-'.$name_file.'.'.$extension;
            $file->move(public_path('Files/'),$picture);
            return response()->json(array('exito'=>true,'direccion'=>$picture));
        }else{
            return response()->json(array('exito'=>false));
        }
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
