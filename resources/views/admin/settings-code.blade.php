@extends('layouts.admin')
@section('content')

<div class="container-table">
        <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tipo de usuario</th>
                        <th>Configuración</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($codes as $code)
                    <tr>
                        <td>{{$code->code}}</td>
                        <td>{{$code->nombre}}</td>
                        <td>{{$code->email}}</td>
                        <td>{{$code->tipo_usuario}}</td>
                        <td>
                                <a class="btn btn-primary btn-xs"  href="" >Edit</a>
                                <a class="btn btn-danger btn-xs" href="{{ route('code.delete',['id_code' => $code->id] )}}" >Delete</a>
                            </td>
                    </tr>
                    @endforeach
        
</div>
@endsection