@extends('Layout')

@section('title','Datos Personales')


@section('body')

<br>
<div class="container" >
<div class="alert alert-dark" role="alert">
  DATOS DEL EMPLEADO :
</div>
<ul class="list-group" style="text-align: left;">
    <li class="list-group-item">NOMBRE: {{$personas->nombre}}</li>
    <li class="list-group-item">CI: {{$personas->ci}}</li>
    <li class="list-group-item">APELLIDO PATERNO: {{$personas->apellidoP}}</li>
    <li class="list-group-item">APELLIDO MATERNO: {{$personas->apellidoM}}</li>
    <li class="list-group-item">DIRECCION: {{$personas->direccion}}</li>
    <li class="list-group-item">TELEFONO: {{$personas->telefono}}</li>
    <li class="list-group-item">FECHA DE NACIMIENTO: {{$personas->fechaNacimiento}}</li>
    <li class="list-group-item">FECHA DE REGISTRO: {{$personas->fechaNacimiento}}</li>

    <li class="list-group-item">OFICIOS:
    
    @foreach($oficio as $ofi)

    <li class="list-group-item">{{ Str::ucfirst($ofi->nombre) }}
        
    <span class="input-group-text" id="basic-addon1">Dias: {{ $horario[$loop->index]->dias}}</span>
    <span class="input-group-text" id="basic-addon1">Hora Inicio: 
            <?php
                $x = $horario[$loop->index]->horaInicio;  
                $v=''; 
                for ($i = 0; $i < strlen($x); $i++) {
                    if (($x[$i]==1 ||$x[$i]==2 || $x[$i]==3 || $x[$i]==4 || $x[$i]==5 || $x[$i]==6||$x[$i]==':' ||$x[$i]=='0')) {
                        $v=$v.$x[$i]; 
                    }
                }
            echo $v?>
    </span>
    <span class="input-group-text" id="basic-addon1">Hora Fin: 
    <?php
                $x = $horario[$loop->index]->horaFin;  
                $v=''; 
                for ($i = 0; $i < strlen($x); $i++) {
                    if (($x[$i]==1 ||$x[$i]==2 || $x[$i]==3 || $x[$i]==4 || $x[$i]==5 || $x[$i]==6||$x[$i]==':' ||$x[$i]=='0')) {
                        $v=$v.$x[$i]; 
                    }
                }
            echo $v?>
    </span>
    </li>
    
    @endforeach
    
    </li>
    

</ul>
    <a class="btn btn-outline-secondary btn-lg btn-block" href="{{route('empleado.denegar',$personas->id)}}" role="button">DENEGAR</a>
    <a class="btn btn-outline-secondary btn-lg btn-block" href="{{route('empleado.aprobar',$personas->id)}}" role="button">APROBAR</a> <br>
</div>



@endsection