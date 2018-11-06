@extends('layouts.admin')
@section('content')
@include('includes/modal-user')
<div class="main">
        <h1>Usuarios</h1>
        <hr>
        <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Rol</th>
                        <th>Correo</th>
                        <th>Configuración</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                                <a class="btn btn-primary btn-xs user">Edit</a>
                                <a class="btn btn-danger btn-xs" href="{{ route('user.delete',['id_user' => $user->id] )}}" >Delete</a>
                            </td>
                    </tr>
                    @endforeach 
                </tbody>
        </table>
                          
</div>
     
@endsection