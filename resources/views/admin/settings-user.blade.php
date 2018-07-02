@extends('layouts.admin')
@section('content')
@include('includes/modal-edit-user')
<div class="container-table">
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
                                <a class="btn btn-primary btn-xs" href="" id="user-edit" data-toggle="modal_user" data-target="modal_user">Edit</a>
                                <a class="btn btn-danger btn-xs" href="{{ route('user.delete',['id_user' => $user->id] )}}" >Delete</a>
                            </td>
                    </tr>
                    @endforeach 
                </tbody>
        </table>
                          
</div>
        <div class="modal fade " tabindex="-1" role="dialog" id="mymodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edita tu correo</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/settings')}}" method="POST">
                            {!!csrf_field()!!}
                            <label>Email</label>
                            <input type="text" name="e-mail" class="form-control">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            @if($errors->has('e-mail'))
                                <p>{{$errors->first('e-mail')}}</p>
                            @endif
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
       
@endsection