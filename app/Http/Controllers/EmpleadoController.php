<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Entorno;

class EmpleadoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = Entorno::getURL();
        $client = new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'empleado/index');        
        $empleados =  json_decode($response->getBody()->getContents());
        return view('persona.empleado.index',['empleados'=>$empleados]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = Entorno::getURL();
        $client = new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'empleado/show/'.$id);        
        $empleado =  json_decode($response->getBody()->getContents());
        $empleadoDatos = $empleado[0];
        $horarios = $empleadoDatos->horario;
        $oficios = $empleadoDatos->oficio;
        return view('persona.empleado.show',['personas'=>$empleadoDatos,'horario'=>$horarios,'oficio'=>$oficios]);
        // return $empleadoDatos;
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
    }
    public function aprobar($id)
    {
        $url = Entorno::getURL();
        $client = new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'empleado/aprobar/'.$id);
        $empleados =  json_decode($response->getBody()->getContents());
        // return view('persona.empleado.index',['empleados'=>$empleados]);
        return $empleados;
    }
    public function denegar($id)
    {
        $url = Entorno::getURL();
        $client = new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'empleado/denegar/'.$id);
        $empleados =  json_decode($response->getBody()->getContents());
        // return view('persona.empleado.index',['empleados'=>$empleados]);

        if
        return $empleados;
    }
}
