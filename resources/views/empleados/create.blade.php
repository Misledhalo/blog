@extends('layouts.app')

@section('content')

<div class="container">




<form action="{{ url('/empleados')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

@include('empleados.form',['Modo'=>'crear'])



</form>
</div>
 @endsection