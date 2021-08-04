@extends("template.forms")
@section("screen",$screen)
@section("section-dynamic")
<form action="/usuarios/{{$user['usuario_id']}}" method="post">
    @csrf
    @method("PUT")
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>1er. Nombre</label>
                <input type="text" name="usuario_nombre1" class="form-control form-control-user" value="{{$user['usuario_nombre1']}}">
            </div>
            @error("usuario_nombre1")
                <span class="msg-error">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>2do. Nombre</label>
                <input type="text" name="usuario_nombre2" class="form-control form-control-user" value="{{$user['usuario_nombre2']}}">
            </div>
            @error("usuario_nombre2")
                <span class="msg-error">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>1er. Apellido</label>
                <input type="text" name="usuario_apellido1" class="form-control form-control-user" value="{{$user['usuario_apellido1']}}">
            </div>
            @error("usuario_apellido1")
                <span class="msg-error">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>2do. Apellido</label>
                <input type="text" name="usuario_apellido2" class="form-control form-control-user" value="{{$user['usuario_apellido2']}}">
            </div>
            @error("usuario_apellido2")
                <span class="msg-error">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="usuario_email" class="form-control form-control-user" value="{{$user['usuario_email']}}">
            </div>
            @error("usuario_email")
                <span class="msg-error">{{$message}}</span>
            @enderror
        </div>  
        <div class="col-md-6">
            <div class="form-group">
                <label>Rol</label>
                <select name="usuario_rol" class="form-control form-control-user">
                    @foreach($roles as $key => $rol)
                        @if($key == $user['usuario_rol'])
                            <option value="{{$key}}" selected>{{$rol}}</option>
                        @else
                            <option value="{{$key}}" >{{$rol}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            @error("usuario_rol")
                <span class="msg-error">{{$message}}</span>
            @enderror
        </div>  
        <div class="col-md-6">
            <div class="form-group">
                <label>Estado</label>
                <select name="usuario_estado" class="form-control form-control-user">
                    @foreach($estados as $key => $estado)
                        @if($key == $user['usuario_estado'])
                            <option value="{{$key}}" selected>{{$estado}}</option>
                        @else
                            <option value="{{$key}}" >{{$estado}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            @error("usuario_estado")
                <span class="msg-error">{{$message}}</span>
            @enderror
        </div>   
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button onclick="window.history.back(); return false;" class="btn btn-danger">Cancelar</button>
</form>
@endsection
