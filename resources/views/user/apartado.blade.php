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
                                        <td class="lug-d"
                                            data-placas=""
                                            data-marca=""
                                            data-nombre=""
                                            data-status=""
                                        >A1</td>
                                        <td class="lug-m">A2</td>
                                        <td class="lug-m">A3</td>
                                        <td class="lug-m">A4</td>
                                        <td class="lug-m">A5</td>
                                        <td class="lug-m">A6</td>
                                        <td class="lug-m">A7</td>
                                        <td class="lug-m">A8</td>
                                        <td class="lug-m">A9</td>
                                        <td class="lug-m">A10</td>
                                        <td class="lug-m">A11</td>
                                        <td class="lug-m">A12</td>
                                        <td class="lug-m">A13</td>
                                    </tr>
                                </tbody>
                            </table>
                                    <table id="lado-izq">
                                            <tbody>
                                                <tr>
                                                    <td class="lug-d">C1</td>
                                                    <td class="lug-m">C2</td>
                                                    <td class="lug-m">C3</td>
                                                    <td class="lug-m">C4</td>
                                                    <td class="lug-m">C5</td>
                                                    <td class="lug-m">C6</td>
                                                    <td class="lug-m">C7</td>
                                                    <td class="lug-m">C8</td>
                                                    <td class="lug-m">C9</td>
                                                    <td class="lug-m">C10</td>
                                                    <td class="lug-m">C11</td>
                                                    <td class="lug-m">C12</td>
                                                    <td class="lug-m">C13</td>
                                                    <td class="lug-d">C14</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                            <table id="centro-der">
                                                    <tbody>
                                                        <tr>
                                                            <td>F1</td>
                                                            <td>F2</td>
                                                            <td>F3</td>
                                                            <td>F4</td>
                                                            <td>F5</td>
                                                            <td>F6</td>
                                                            <td>F7</td>
                                                            <td>F8</td>
                                                            <td>F9</td>
                                                            <td>F10</td>
                                                            <td>F11</td>
                                                            <td>F12</td>
                                                            <td>F13</td>
                                                        </tr>
                                                        <tr>
                                                                <td>G1</td>
                                                                <td>G2</td>
                                                                <td>G3</td>
                                                                <td>G4</td>
                                                                <td>G5</td>
                                                                <td>G6</td>
                                                                <td>G7</td>
                                                                <td>G8</td>
                                                                <td>G9</td>
                                                                <td>G10</td>
                                                                <td>G11</td>
                                                                <td>G12</td>
                                                                <td>G13</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <table id="centro">
                                                    <tbody>
                                                        <tr>
                                                            <td>D1</td>
                                                            <td>D2</td>
                                                            <td>D3</td>
                                                            <td>D4</td>
                                                            <td>D5</td>
                                                            <td>D6</td>
                                                            <td>D7</td>
                                                            <td>D8</td>
                                                            <td>D9</td>
                                                            <td>D10</td>
                                                            <td>D11</td>
                                                            <td>D12</td>
                                                            <td>D13</td>
                                                        </tr>
                                                        <tr>
                                                                <td>E1</td>
                                                                <td>E2</td>
                                                                <td>E3</td>
                                                                <td>E4</td>
                                                                <td>E5</td>
                                                                <td>E6</td>
                                                                <td>E7</td>
                                                                <td>E8</td>
                                                                <td>E9</td>
                                                                <td>E10</td>
                                                                <td>E11</td>
                                                                <td>E12</td>
                                                                <td>E13</td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                    <table id="abajo">
                                            <tbody>
                                                <tr>
                                                    <td class="lug-d">B1</td>
                                                    <td class="lug-m">B2</td>
                                                    <td class="lug-m">B3</td>
                                                    <td class="lug-m">B4</td>
                                                    <td class="lug-m">B5</td>
                                                    <td class="lug-m">B6</td>
                                                    <td class="lug-m">B7</td>
                                                    <td class="lug-m">B8</td>
                                                    <td class="lug-m">B9</td>
                                                    <td class="lug-m">B10</td>
                                                    <td class="lug-m">B11</td>
                                                    <td class="lug-m">B12</td>
                                                    <td class="lug-m">B13</td>
                                                </tr>
                                            </tbody>
                                        </table>
           </div>
           <button type="button" id="modal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                        <img src="../../imagenes/log.png" alt="">
                        <img src="../../imagenes/nombre.png" alt="" class="nombre">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h3>Información sobre el apartado</h3>
                  <p><strong>Nombre:</strong><a class="datos">Miriam Yarazeth Becerra Real </a></p>
                  <p><strong>Placas:</strong><a class="datos">JDF-96-45</a></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
@endsection