@extends('template')

@section('titulo','Horarios ')

@section('contenido')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Seleccione</th>
                        <th>Código</th>
                        <th>Curso</th>
                        <th>Grupo</th>
                        <th>Modalidad</th>
                        <th>Módulo</th>
                        <th>Horarios</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha final</th>
                        <th>Docente</th>
                        <th>Salón</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Puedes agregar filas y datos aquí según tu necesidad -->
                    <tr>
                        <td>
                            <div class="text-center">
                                <input type="radio" aria-label="Radio button for following text input" id="opcion1" name="seleccion">
                            </div>
                        </td>
                        <td>12190834</td>
                        <td>SISTEMA DE INFORMACIÓN EMPRESARIAL</td>
                        <td>A</td>
                        <td>Presencial</td>
                        <td>M8 - 1P 2024</td>
                        <td>NA</td>
                        <td>lunes, 05 de febrero de 2024</td>
                        <td>viernes, 05 de abril de 2024</td>
                        <td>ZULEMA YIDNEY LEON ESCOBAR</td>
                        <td>502</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-center">
                                <input type="radio" aria-label="Radio button for following text input" id="opcion1" name="seleccion">
                            </div>
                        </td>
                        <td>12190834</td>
                        <td>SISTEMA DE INFORMACIÓN EMPRESARIAL</td>
                        <td>A</td>
                        <td>Presencial</td>
                        <td>M8 - 1P 2024</td>
                        <td>NA</td>
                        <td>lunes, 05 de febrero de 2024</td>
                        <td>viernes, 05 de abril de 2024</td>
                        <td>ZULEMA YIDNEY LEON ESCOBAR</td>
                        <td>502</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-center">
                                <input type="radio" aria-label="Radio button for following text input" id="opcion1" name="seleccion">
                            </div>
                        </td>
                        <td>12190834</td>
                        <td>SISTEMA DE INFORMACIÓN EMPRESARIAL</td>
                        <td>A</td>
                        <td>Presencial</td>
                        <td>M8 - 1P 2024</td>
                        <td>NA</td>
                        <td>lunes, 05 de febrero de 2024</td>
                        <td>viernes, 05 de abril de 2024</td>
                        <td>ZULEMA YIDNEY LEON ESCOBAR</td>
                        <td>502</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-center">
                                <input type="radio" aria-label="Radio button for following text input" id="opcion1" name="seleccion">
                            </div>
                        </td>
                        <td>12190834</td>
                        <td>SISTEMA DE INFORMACIÓN EMPRESARIAL</td>
                        <td>A</td>
                        <td>Presencial</td>
                        <td>M8 - 1P 2024</td>
                        <td>NA</td>
                        <td>lunes, 05 de febrero de 2024</td>
                        <td>viernes, 05 de abril de 2024</td>
                        <td>ZULEMA YIDNEY LEON ESCOBAR</td>
                        <td>502</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-center">
                                <input type="radio" aria-label="Radio button for following text input" id="opcion1" name="seleccion">
                            </div>
                        </td>
                        <td>12190834</td>
                        <td>SISTEMA DE INFORMACIÓN EMPRESARIAL</td>
                        <td>A</td>
                        <td>Presencial</td>
                        <td>M8 - 1P 2024</td>
                        <td>NA</td>
                        <td>lunes, 05 de febrero de 2024</td>
                        <td>viernes, 05 de abril de 2024</td>
                        <td>ZULEMA YIDNEY LEON ESCOBAR</td>
                        <td>502</td>
                    </tr>
                    <!-- Puedes agregar más filas según sea necesario -->
                </tbody>
            </table>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="#" class="btn btn-primary btn-sm shadow"><i class="fas fa-download fa-sm text-white-50"></i>
                Generar reporte</a>
        </div>
        <div class="text-center mb-4">
            <a href="#" class="btn btn-primary btn-lg shadow btn-opaco" id="btnEditar" onclick="verificarSeleccion()">
                <i class="fas fa-edit fa-lg text-white-40"></i> Editar
            </a>
            
            <a href="#" class="btn btn-success btn-lg shadow ml-2" id="btnGuardar" disabled><i
                    class="fas fa-save fa-lg text-white-40"></i>
                Guardar</a>
        
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar salón</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Aquí puedes agregar el contenido del modal -->
                <!-- Por ejemplo, puedes agregar un formulario para la edición -->
                <form>
                    <div class="form-group">
                        <label for="salon">Salón:</label>
                        <input type="text" class="form-control" id="salon">
                    </div>
                    <!-- Agrega más campos según tus necesidades -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>


@endsection
