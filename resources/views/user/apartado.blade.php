@extends('layouts.app')
@section('content')
<!--esta parte es en la que se incluyen modals segun el rol !-->
@if(Auth::user()->role == "USER")
@include('includes/modal-user')
@else
@include('includes/modal-apartado')
@endif
    <!-- Es la simbologia  para que es cada lugar !-->
        <div class="container-principal col-sm-7 col-sm-offset-3">
                <h3>Simbología</h3>
                <div class="container-a">
                        <div class=" alumno"></div>
                        <span>Disponible alumno</span>
                </div>
                <div class="container-d">
                        <div class=" discapacitados"></div>
                        <span>Disponible Discapacitado</span>  
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
            <hr> <!-- Linea horizontal !-->
            <!-- Se usa boostrap para el acomodo de los elementos por columnas !-->      
            <div class="contain-table col-sm-8 col-sm-offset-4">
                <!-- Inicio de la tabla !-->        
                <table id="arriba">
                                <tbody>
                                   
                                    <tr>
                                    <!--En esta parte se trae toda la información que este relacionada con el apartado !-->
                                   <!-- Inicio de un ciclo que recorre todo el arreglo de la variable apartado !-->
                                    @for($i = 0; $i <= 12; $i++)
                                        <td class="lug-m space {{ ($apartado[$i]->user_id ? 'apartadol' : 'lugar-m') }} "
                                            data-toggle="modal_space"
                                            data-target="modal_space"
                                            data-a="{{ var_export(empty(!$apartado[$i]->user_id), true) }}"
                                            data-lugar="{{$apartado[$i] ? $apartado[$i]['nombre'] : ''}}"
                                            data-id="{{$apartado[$i] ? $apartado[$i]->user_id : ''}}"
                                            data-idl="{{$apartado[$i] ? $apartado[$i]->id : ''}}"
                                            data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                            data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                            data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                            data-placas="{{$apartado[$i]->user && $apartado[$i]->user->vehicle ?  $apartado[$i]->user->vehicle->placas : ''}}"
                                            data-name="{{$apartado[$i]->user ? $apartado[$i]->user->name : ''}}"
                                            >{{$apartado[$i] ['nombre']}}</td>
                                    @endfor
                                    <!-- Fin de ciclo !-->
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Fin de la tabla !-->
                                    <table id="lado-izq">
                                            <tbody>
                                                <tr>
                                                        @for($i = 13; $i<=25;$i++)
                                                        <td class="lug-m space  {{ ($apartado[$i]->user_id ? 'apartadol' : 'lugar-m') }} "
                                                        data-toggle="modal_space"
                                                        data-target="modal_space"
                                                        data-a="{{ var_export(!empty($apartado[$i]->spaceInfo), true) }}"
                                                        data-lugar="{{$apartado[$i] ? $apartado[$i]['nombre'] : ''}}"
                                                        data-idl="{{$apartado[$i] ? $apartado[$i]->id : ''}}"
                                                        data-id="{{$apartado[$i] ? $apartado[$i]->user_id : ''}}"
                                                        data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                        data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                        data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                        data-placas="{{$apartado[$i]->user && $apartado[$i]->user->vehicle ?  $apartado[$i]->user->vehicle->placas : ''}}"
                                                        data-name="{{$apartado[$i]->user ? $apartado[$i]->user->name : ''}}"
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                </tr>
                                            </tbody>
                                        </table>
                                            <table id="centro-der">
                                                    <tbody>
                                                        <tr>
                                                        @for($i = 26; $i<=38;$i++)
                                                        <td class="lug-m space  {{ ($apartado[$i]->user_id ? 'apartadol' : 'lugar-m') }} "
                                                        data-toggle="modal_space"
                                                        data-target="modal_space"
                                                        data-a="{{ var_export(!empty($apartado[$i]->spaceInfo), true) }}"
                                                        data-lugar="{{$apartado[$i] ? $apartado[$i]['nombre'] : ''}}"
                                                        data-id="{{$apartado[$i] ? $apartado[$i]->user_id : ''}}"
                                                        data-idl="{{$apartado[$i] ? $apartado[$i]->id : ''}}"
                                                        data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                        data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                        data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                        data-placas="{{$apartado[$i]->user && $apartado[$i]->user->vehicle ?  $apartado[$i]->user->vehicle->placas : ''}}"
                                                        data-name="{{$apartado[$i]->user ? $apartado[$i]->user->name : ''}}"
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                        </tr>
                                                        <tr>
                                                        @for($i = 39; $i<=51;$i++)
                                                        <td class="lug-m space  {{ ($apartado[$i]->user_id ? 'apartadol' : 'lugar-m') }} "
                                                        data-toggle="modal_space"
                                                        data-target="modal_space"
                                                        data-a="{{ var_export(!empty($apartado[$i]->spaceInfo), true) }}"
                                                        data-lugar="{{$apartado[$i] ? $apartado[$i]['nombre'] : ''}}"
                                                        data-id="{{$apartado[$i] ? $apartado[$i]->user_id : ''}}"
                                                        data-idl="{{$apartado[$i] ? $apartado[$i]->id : ''}}"
                                                        data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                        data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                        data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                        data-placas="{{$apartado[$i]->user && $apartado[$i]->user->vehicle ?  $apartado[$i]->user->vehicle->placas : ''}}"
                                                        data-name="{{$apartado[$i]->user ? $apartado[$i]->user->name : ''}}"
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <table id="centro">
                                                    <tbody>
                                                        <tr>
                                                            @for($i = 52; $i<=64;$i++)
                                                            <td class="lug-m space  {{ ($apartado[$i]->user_id ? 'apartadol' : 'lugar-m') }} "
                                                            data-toggle="modal_space"
                                                            data-target="modal_space"
                                                            data-a="{{ var_export(!empty($apartado[$i]->spaceInfo), true) }}"
                                                            data-lugar="{{$apartado[$i] ? $apartado[$i]['nombre'] : ''}}"
                                                            data-id="{{$apartado[$i] ? $apartado[$i]->user_id : ''}}"
                                                            data-idl="{{$apartado[$i] ? $apartado[$i]->id : ''}}"
                                                            data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                            data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                            data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                            data-placas="{{$apartado[$i]->user && $apartado[$i]->user->vehicle ?  $apartado[$i]->user->vehicle->placas : ''}}"
                                                            data-name="{{$apartado[$i]->user ? $apartado[$i]->user->name : ''}}"
                                                            >{{$apartado[$i] ['nombre']}}</td>
                                                            @endfor
                                                        </tr>
                                                        <tr>
                                                            @for($i = 65; $i<=77;$i++)
                                                            <td class="lug-m space  {{ ($apartado[$i]->user_id ? 'apartadol' : 'lugar-m') }} "
                                                            data-toggle="modal_space"
                                                            data-target="modal_space"
                                                            data-a="{{ var_export(!empty($apartado[$i]->spaceInfo), true) }}"
                                                            data-lugar="{{$apartado[$i] ? $apartado[$i]['nombre'] : ''}}"
                                                            data-id="{{$apartado[$i] ? $apartado[$i]->user_id : ''}}"
                                                            data-idl="{{$apartado[$i] ? $apartado[$i]->id : ''}}"
                                                            data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                            data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                            data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                            data-placas="{{$apartado[$i]->user && $apartado[$i]->user->vehicle ?  $apartado[$i]->user->vehicle->placas : ''}}"
                                                            data-name="{{$apartado[$i]->user ? $apartado[$i]->user->name : ''}}"
                                                            >{{$apartado[$i] ['nombre']}}</td>
                                                            @endfor
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                    <table id="abajo">
                                            <tbody>
                                                <tr>
                                                        @for($i = 78; $i<=90;$i++)
                                                        <td class="lug-m space  {{ ($apartado[$i]->user_id ? 'apartadol' : 'lugar-m') }} "
                                                        data-toggle="modal_space"
                                                        data-target="modal_space"
                                                        data-a="{{ var_export(!empty($apartado[$i]->spaceInfo), true) }}"
                                                        data-lugar="{{$apartado[$i] ? $apartado[$i]['nombre'] : ''}}"
                                                        data-id="{{$apartado[$i] ? $apartado[$i]->user_id : ''}}"
                                                        data-idl="{{$apartado[$i] ? $apartado[$i]->id : ''}}"
                                                        data-hora_entrada="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_entrada : ''}}"
                                                        data-hora_salida="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->hora_salida : ''}}"
                                                        data-status="{{$apartado[$i]->spaceInfo ? $apartado[$i]->spaceInfo->status : ''}}"
                                                        data-placas="{{$apartado[$i]->user && $apartado[$i]->user->vehicle ?  $apartado[$i]->user->vehicle->placas : ''}}"
                                                        data-name="{{$apartado[$i]->user ? $apartado[$i]->user->name : ''}}"
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                </tr>
                                            </tbody>
                                        </table>
        </div>
           
@endsection