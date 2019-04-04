
@extends('LoginRegistro/master')
@section('content')



	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h2>{{$retorno['location']['city']}}</h2><h1>{{$retorno['location']['country']}}</h1>
									<p> Latitud:<strong> {{$retorno['location']['lat']}} </strong> </p>
									<p> Longitud: <strong> {{$retorno['location']['long']}} </strong> </p>
									<p> Zona horaria: <strong> {{$retorno['location']['timezone_id']}} </strong> </p> 
									<p>{{date("M,d,Y h:i:s A")}}</p>
								</div>
								<div class="banner-content">
									<h2>Viento</h2>
									<p> Frio:<strong> {{$retorno['current_observation']['wind']['chill']}} </strong> </p> 
									<p> Direccion:<strong> {{$retorno['current_observation']['wind']['direction']}} </strong> </p> 
									<p> Velocidad:<strong> {{$retorno['current_observation']['wind']['speed']}} Km/h </strong> </p> 
								</div>
								<div class="banner-content">
									<h2>Atmosfera</h2>
									<p> Humedad:<strong> {{$retorno['current_observation']['atmosphere']['humidity']}} </strong> </p> 
									<p> Visibilidad:<strong> {{$retorno['current_observation']['atmosphere']['visibility']}} </strong> </p> 
									<p> Presión:<strong> {{$retorno['current_observation']['atmosphere']['pressure']}} </strong> </p> 
								</div>
								<div class="banner-content">
									<h2>Condiciones</h2>
									<p> <strong> {{$retorno['current_observation']['condition']['text']}} </strong> </p> 
									<p> Temperatura:<strong> {{$retorno['current_observation']['condition']['temperature']}} °F </strong> </p>  
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src= "{{asset('karma/img/clima1.png')}}"  alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content"> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- End banner Area -->

<div class="container">
<h3>Lista de predicciones</h3>


<div class="col-lg-9">

<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Dia</th>
      <th scope="col">Baja °F</th>
      <th scope="col">Alta °F</th>
      <th scope="col">Texto</th>
    </tr>
  </thead>
  <tbody>

    @foreach($retorno['forecasts'] as $item) 

        <tr>  
            <td >{{$item['day']}}</td> 
            <td >{{$item['low']}}</td> 
            <td >{{$item['high']}}</td> 
            <td >{{$item['text']}}</td> 
        </tr>
    @endforeach

         
  </tbody>
</table>

</div>
</div>
<br>

@endsection