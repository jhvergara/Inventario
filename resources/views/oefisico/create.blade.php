@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Observación </h4>
	
	<hr>

	{!!Form::open(['route'=>'oefisico.store', 'method'=>'POST'])!!}
		@include('oefisico.form.oefisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/efisico/create', $title='Si el elemento físico no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}
	
	<hr>

	{!!link_to('/oefisico', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>

@stop