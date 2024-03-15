@extends('template')

@section('titulo', 'Informacion de salones')

@section('contenido')

    <div class="card shadow mb-4">
        <!-- Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
        style="padding: 10px 10px; margin-bottom: 15px; padding-top: 20px; width: 70%;">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar salón"
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Seleccione</th>
                            <th>Salón</th>
                            <th>Capacidad</th>
                            <th>Disponibilidad diurna</th>
                            <th>Disponibilidad nocturna</th>
                            <th>Sede</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Puedes agregar filas y datos aquí según tu necesidad -->
                        <tr>
                            <td>
                                <div class="text-center">
                                    <input type="radio" aria-label="Radio button for following text input" id="opcion1"
                                        name="seleccion">
                                </div>
                            </td>
                            <td>502</td>
                            <td>15</td>
                            <td>No</td>
                            <td>Si</td>
                            <td>Principal</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-center">
                                    <input type="radio" aria-label="Radio button for following text input" id="opcion2"
                                        name="seleccion">
                                </div>
                            </td>
                            <td>502</td>
                            <td>15</td>
                            <td>No</td>
                            <td>Si</td>
                            <td>Principal</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-center">
                                    <input type="radio" aria-label="Radio button for following text input" id="opcion3"
                                        name="seleccion">
                                </div>
                            </td>
                            <td>502</td>
                            <td>15</td>
                            <td>No</td>
                            <td>Si</td>
                            <td>Principal</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-center">
                                    <input type="radio" aria-label="Radio button for following text input" id="opcion4"
                                        name="seleccion">
                                </div>
                            </td>
                            <td>502</td>
                            <td>15</td>
                            <td>No</td>
                            <td>Si</td>
                            <td>Principal</td>
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
                <a href="#" class="btn btn-primary btn-lg shadow btn-opaco" id="btnEditar"
                    onclick="verificarSeleccion()">
                    <i class="fas fa-edit fa-lg text-white-40"></i> Editar
                </a>

                <a href="#" class="btn btn-success btn-lg shadow ml-2" id="btnGuardar" disabled><i
                        class="fas fa-save fa-lg text-white-40"></i>
                    Guardar</a>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalSelectSalon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
                </div>
                <div class="modal-body">
                    <p class="lead">Por favor, seleccione un salón para continuar.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de seleccion de salon  -->
    <div class="modal fade" id="modalEditSalon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                            <label for="salon">Salón:</label>
                            <input type="text" class="form-control" id="salon">
                            <label for="salon">Salón:</label>
                            <input type="text" class="form-control" id="salon">
                            <label for="salon">Salón:</label>
                            <input type="text" class="form-control" id="salon">
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


    <script>
        $(document).ready(function() {
            var cambiosRealizados = false;

            // Detectar cambios en los inputs
            $('input[type="radio"]').change(function() {
                cambiosRealizados = true;
                habilitarGuardar();
            });

            // Función para habilitar o deshabilitar el botón "Guardar"
            function habilitarGuardar() {
                if (cambiosRealizados) {
                    $('#btnGuardar').prop('disabled', false);
                } else {
                    $('#btnGuardar').prop('disabled', true);
                }
            }

            // Botón "Editar" para simular cambios en los datos
            $('#btnEditar').click(function() {
                // Simular cambios en los datos
                $('input[type="radio"]').prop('checked', true);
                cambiosRealizados = true;
                habilitarGuardar();
            });

            // Botón "Guardar" para guardar los cambios (puedes agregar la lógica de guardado aquí)
            $('#btnGuardar').click(function() {
                alert('Cambios guardados exitosamente.');
                cambiosRealizados = false;
                habilitarGuardar();
            });
        });

        function verificarSeleccion() {
            var seleccionado = $('input[name="seleccion"]:checked').length > 0;

            // Habilitar o deshabilitar el botón "Editar" según si hay un elemento seleccionado
            $('#btnEditar').prop('disabled', !seleccionado);

            if (seleccionado) {
                $('#modalEditSalon').modal('show');
            } else {
                // Mostrar ventana emergente si no se ha seleccionado ningún elemento
                $('#modalSelectSalon').modal('show');
            }
        }
    </script>

@endsection
