@extends("template.forms")
@section("screen",$screen)
@section("section-dynamic")
<div class="row">
    <div class="col-md-6">
        <dt>1er Nombre:</dt>
        <dd>{{$user["usuario_nombre1"]}}</dd>
    </div>
    <div class="col-md-6">
        <dt>2do Nombre:</dt>
        <dd>{{$user["usuario_nombre2"]}}</dd>
    </div>
    <div class="col-md-6">
        <dt>1er Apellido:</dt>
        <dd>{{$user["usuario_apellido1"]}}</dd>
    </div>
    <div class="col-md-6">
        <dt>2do Apellido:</dt>
        <dd>{{$user["usuario_apellido2"]}}</dd>
    </div>
    <div class="col-md-6">
        <dt>Email:</dt>
        <dd>{{$user["usuario_email"]}}</dd>
    </div>
    <div class="col-md-6">
        <dt>Rol:</dt>
        <dd>{{$user["usuario_rol"]}}</dd>
    </div>
    <div class="col-md-6">
        <dt>Estado:</dt>
        @if($user["usuario_estado"] == 1)
            <dd>Activo</dd>
        @else
            <dd>Inactivo</dd>
        @endif
    </div>
</div>
<button onclick="window.history.back(); return false;" class="btn btn-danger">Atras</button>
@endsection
