@extends('VistaAdmin/master')
@section('content')
<div class="container">
<h3>Registrar prediccion</h3>
<div class="col-lg-9">
        <form class="row contact_form" enctype="multipart/form-data" method="post" action="{{url('Nuevo_Empleado')}}" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Dia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dia'">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Baja °F" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Baja °F'">
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" id="cui" name="cui" placeholder="Alta °F" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alta °F'">
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Texto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Texto'">
                </div>  


            </div> 
            <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="primary-btn">Registrar prediccion</button>
            </div>
        </form>
    </div>
</div>
<br>
@endsection