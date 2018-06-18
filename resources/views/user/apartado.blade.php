@extends('layouts.app')

@section('content')
@include('includes/modal-apartado');
        <div class="container-principal col-sm-7 col-sm-offset-2">
                <h3>Simbologia</h3>
                <div class="container-a">
                        <div class=" alumno"></div>
                        <span>Disponible alumno</span>
                </div>
                <div class="container-m">
                        <div class="maestro"></div>
                        <span>Disponible maestros</span>  
                </div>
                <div class="container-v">
                        <div class="visitante"></div>
                        <span>Visitante</span>  
                </div>
                <div class="container-d">
                        <div class=" discapacitados"></div>
                        <span>Disponible discapacitado</span>  
                </div>
                <div class="container-p">
                        <div class="provedor"></div>
                        <span>Disponible Provedor</span>
                </div>
                <div class="container-o">
                        <div class="ocupado"></div>
                        <span>Ocupado</span>  
                </div>
                <div class="container-a">
                    <div class="apartado"></div>
                    <span>Apartado</span>  
            </div>
            </div>
            <hr>
                   <div class="contain-table col-sm-8 col-sm-offset-4">
                        <table id="arriba">
                                <tbody>
                                   
                                    <tr>
                                    @for($i = 0; $i<=12;$i++)
                                        <td class="lug-m space"
                                            data-toggle="modal_space"
                                            data-target="modal_space"
                                            data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                            data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                            data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                        >{{$apartado[$i]['nombre']}}</td>
                                    @endfor
                                    </tr>
                                </tbody>
                            </table>
                                    <table id="lado-izq">
                                            <tbody>
                                                <tr>
                                                        @for($i = 13; $i<=25;$i++)
                                                        <td class="lug-m space"
                                                        data-toggle="modal_space"
                                                        data-target="modal_space"
                                                        data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                        data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                        data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                </tr>
                                            </tbody>
                                        </table>
                                            <table id="centro-der">
                                                    <tbody>
                                                        <tr>
                                                        @for($i = 26; $i<=38;$i++)
                                                        <td class="lug-m space"
                                                        data-toggle="modal_space"
                                                        data-target="modal_space"
                                                        data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                        data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                        data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                        </tr>
                                                        <tr>
                                                        @for($i = 39; $i<=51;$i++)
                                                        <td class="lug-m space"
                                                        data-toggle="modal_space"
                                                        data-target="modal_space"
                                                        data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                        data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                        data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <table id="centro">
                                                    <tbody>
                                                        <tr>
                                                            @for($i = 52; $i<=64;$i++)
                                                            <td class="lug-m space"
                                                                @if($apartado[$i]['space_info'])
                                                                data-toggle="modal_space"
                                                                data-target="modal_space"
                                                                data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                                data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                                data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                                @endif
                                                            >{{$apartado[$i] ['nombre']}}</td>
                                                            @endfor
                                                        </tr>
                                                        <tr>
                                                            @for($i = 65; $i<=77;$i++)
                                                            <td class="lug-m space"
                                                            data-toggle="modal_space"
                                                            data-target="modal_space"
                                                            data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                            data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                            data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                            >{{$apartado[$i] ['nombre']}}</td>
                                                            @endfor
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                    <table id="abajo">
                                            <tbody>
                                                <tr>
                                                        @for($i = 78; $i<=90;$i++)
                                                        <td class="lug-m space"
                                                        data-toggle="modal_space"
                                                        data-target="modal_space"
                                                        data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                        data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                        data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                </tr>
                                            </tbody>
                                        </table>
        </div>
           


<script>
    var lugares = document.querySelectorAll('.space');
    lugares.forEach(function(lugar) {
        lugar.addEventListener('click', function(event) {
            var element = event.target;
            $('#hora_entrada').val(element.dataset.hora_entrada);
            $('#hora_salida').val(element.dataset.hora_salida);
            $('#status').val(element.dataset.status);
            $('#modal_space').modal();
        });
    });
</script>

@endsection