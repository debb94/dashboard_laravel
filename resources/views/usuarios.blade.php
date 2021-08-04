@extends("template.crud")
@section("screen", "Usuarios")
@section("screen-table", "Listado de Usuarios")

@section("thead")
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
@endsection

@section("tbody")
<tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->usuario_id}}</td>
        <td>{{$user->usuario_nombre1}} {{$user->usuario_apellido1}}</td>
        <td>{{$user->usuario_email}}</td>
        <td>{{$user->usuario_rol}}</td>
        @if($user->usuario_estado == 1)
            <td>Activo</td>
        @else
            <td>Desactivado</td>
        @endif
        <td>
            <a href="/usuarios/{{$user->usuario_id}}" class="btn btn-info btn-circle btn-sm" ><i class="fas fa-eye"></i></a>
            <a href="/usuarios/{{$user->usuario_id}}/edit" class="btn btn-primary btn-circle btn-sm" ><i class="fas fa-pen"></i></a>
            <form class="d-inline-block" action="/usuarios/{{$user->usuario_id}}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger btn-circle btn-sm" ><i class="fas fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
@endsection
