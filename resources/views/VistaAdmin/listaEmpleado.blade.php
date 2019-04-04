@extends('VistaAdmin/master')
@section('content')
<div class="container">
<h3>Lista de predicciones</h3>
<div class="col-lg-9">

<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Dia</th>
      <th scope="col">Alta °F</th>
      <th scope="col">Baja °F</th>
      <th scope="col">Texto</th> 
      <th scope="col">Fecha</th> 
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>

    @foreach($empleado as $noticia) 

        <tr> 
            <th >{{$noticia['nombre']}}</th>
            <td >{{$noticia['apellido']}}</td>   
            <td >{{$noticia['cui']}}</td> 
            <td >{{$noticia['email']}}</td>  
            <td >{{$noticia['created_at']}}</td>  
 
            <td><form novalidate="novalidate" enctype="multipart/form-data" action="{{action('EmpleadoController@eliminar', $noticia['id'])}}"   method="get">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form></td>

        </tr>
    @endforeach

         
  </tbody>
</table>

</div>
</div>
<br>
@endsection
