@extends('layouts.app')

@section('content')

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
                                        <td class="lug-m"
                                            data-placas=""
                                            data-marca=""
                                            data-nombre=""
                                            data-status=""
                                        >{{$apartado[$i] ['nombre']}}</td>
                                        @endfor
                                    </tr>
                                </tbody>
                            </table>
                                    <table id="lado-izq">
                                            <tbody>
                                                <tr>
                                                        @for($i = 13; $i<=25;$i++)
                                                        <td class="lug-m"
                                                            data-placas=""
                                                            data-marca=""
                                                            data-nombre=""
                                                            data-status=""
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                </tr>
                                            </tbody>
                                        </table>
                                            <table id="centro-der">
                                                    <tbody>
                                                        <tr>
                                                        @for($i = 26; $i<=38;$i++)
                                                        <td class="lug-m"
                                                            data-placas=""
                                                            data-marca=""
                                                            data-nombre=""
                                                            data-status=""
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                        </tr>
                                                        <tr>
                                                        @for($i = 39; $i<=51;$i++)
                                                        <td class="lug-m"
                                                            data-placas=""
                                                            data-marca=""
                                                            data-nombre=""
                                                            data-status=""
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <table id="centro">
                                                    <tbody>
                                                        <tr>
                                                            @for($i = 52; $i<=64;$i++)
                                                            <td class="lug-m"
                                                                @if($apartado[$i]['space_info'])
                                                                    data-placas="{{ $apartado[$i]['space_info'] }}"
                                                                    data-marca=""
                                                                    data-nombre=""
                                                                    data-status=""
                                                                @endif
                                                            >{{$apartado[$i] ['nombre']}}</td>
                                                            @endfor
                                                        </tr>
                                                        <tr>
                                                            @for($i = 65; $i<=77;$i++)
                                                            <td class="lug-m"
                                                                data-placas=""
                                                                data-marca=""
                                                                data-nombre=""
                                                                data-status=""
                                                            >{{$apartado[$i] ['nombre']}}</td>
                                                            @endfor
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                    <table id="abajo">
                                            <tbody>
                                                <tr>
                                                        @for($i = 78; $i<=90;$i++)
                                                        <td class="lug-m"
                                                            data-placas=""
                                                            data-marca=""
                                                            data-nombre=""
                                                            data-status=""
                                                        >{{$apartado[$i] ['nombre']}}</td>
                                                        @endfor
                                                </tr>
                                            </tbody>
                                        </table>
        </div>
           
<div class="col-sm-5 col-sm-offset-3">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Hora de entrada</label>
            <div class="input-group clockpicker " data-autoclose="true">
                <input type="text" class="form-control" value="" name="hora_entrada">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                </div>
        </div>
        <div class="form-group">
            <label for="">Hora de salida</label>
            <div class="input-group clockpicker " data-autoclose="true">
                <input type="text" class="form-control" value="" name="hora_salida">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                </div>
        </div>
        <div class="form-group">
                <label for="">Status</label>
                <select class="form-control" id="status" name="status">
                 <option selected disabled>Selecciona una opción</option>
                  <option value="Apartado">Apartado</option>
                  <option value="Ocupado">Ocupado</option>
                  <option value="Disponible">Disponible</option>
                </select>
              </div>
            <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</div>

@endsection