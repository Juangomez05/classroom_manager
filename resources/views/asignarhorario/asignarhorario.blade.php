@extends('template')

@section('titulo', 'Asignar horario a docentes')

@section('contenido')

    <div class="container-fluid">

        <!-- Información del docente -->

        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            style="padding: 20px 20px; padding-top: 5px; width: 50%;">
            <div class="input-group">
                <input type="text" class="form-control bg-white border-0 small" placeholder="Buscar docente"
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>


        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Información del docente</h6>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nombre Completo:</strong> John Doe</p>
                        <p><strong>Número de Identificación:</strong> 123456789</p>
                        <p><strong>Nivel de Estudio:</strong> Maestría</p>
                        <p><strong>Evaluación Docente:</strong> Excelente</p>
                        <p><strong>Tipo de Contrato:</strong> Tiempo Completo</p>
                        <p><strong>Fecha de Inicio:</strong> 01/03/2022</p>
                        <p><strong>Fecha de Fin:</strong> 01/03/2023</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Bolsa de Horas:</strong> 300 horas</p>
                        <p><strong>Horas Académicas:</strong> 200 horas</p>
                        <p><strong>Horas de Investigación:</strong> 50 horas</p>
                        <p><strong>Horas de Gestión:</strong> 30 horas</p>
                        <p><strong>Relacionamiento con el Entorno:</strong> 20 horas</p>
                        <p><strong>Horas por Asignar:</strong> 0 horas</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Brand Buttons -->
        <div class="card mb-2 border-0">
            <div class="row">
                <div class="col-md-6">
                    <!-- VENTANA EMERGENTE MODAL ASIGNAR DOCENTE -->
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#miModal">
                        <i class="bi bi-journal"></i> Asignar docente
                    </button>
                    <div class="modal" id="miModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Asignar docente</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Barra de busqueda -->
                                    <input type="text" class="form-control mb-2" id="searchInput"
                                        placeholder="Buscar docente...">
                                    <div class="list-group">
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark"
                                            onclick="checkHours()">Ana Maria Caviedes</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark">Dato 2</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark">Dato 3</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark">Dato 4</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark">Dato 5</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark">Dato 6</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark">Dato 7</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark">Dato 8</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action list-group-item-dark">Dato 9</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            //Advertencia de asignar docente
            function checkHours() {
                // Aquí debes implementar la lógica para verificar si el profesor cumple con las 60 horas requeridas
                const horasRequeridas = 60; // Por ejemplo, 60 horas
                const horasDelProfesor = obtenerHorasDelProfesor(); // Debes implementar esta función

                if (horasDelProfesor >= horasRequeridas) {
                    alert("Este profesor ya cumple con sus horas.");
                } else {
                    const confirmacion = confirm("¿Estás seguro de asignar este docente?");
                    if (confirmacion) {
                        // Aquí puedes realizar la asignación del docente
                        // ...
                    }
                }
            }

            function obtenerHorasDelProfesor() {
                // Debes implementar esta función para obtener las horas del profesor desde tu base de datos o fuente de datos
                // ...
                return 50; // Por ejemplo, 50 horas
            }
        </script>

        <!-- Información de cursos -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Información de cursos</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Agrega aquí la información de cursos si es necesario -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Curso</th>
                                    <th>Creditos</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sabado</th>
                                    <th>Horas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dato 1</td>
                                    <td>Dato 2</td>
                                    <td>
                                        <select class="horaSelect">
                                            <option value="" disabled selected>Elige Hora</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="horaSelect">
                                            <option value="" disabled selected>Elige Hora</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="horaSelect">
                                            <option value="" disabled selected>Elige Hora</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="horaSelect">
                                            <option value="" disabled selected>Elige Hora</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="horaSelect">
                                            <option value="" disabled selected>Elige Hora</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="horaSelect">
                                            <option value="" disabled selected>Elige Hora</option>
                                        </select>
                                    </td>
                                    <td>Dato 3</td>
                                </tr>
                                <!-- Puedes agregar más filas según sea necesario -->
                                <tr>
                                    <td>Dato 3</td>
                                    <td>Dato 4</td>
                                    <td>
                                        <select class="salonSelect">
                                            <option value="" disabled selected>Elige Salón</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="salonSelect">
                                            <option value="" disabled selected>Elige Salón</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="salonSelect">
                                            <option value="" disabled selected>Elige Salón</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="salonSelect">
                                            <option value="" disabled selected>Elige Salón</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="salonSelect">
                                            <option value="" disabled selected>Elige Salón</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="salonSelect">
                                            <option value="" disabled selected>Elige Salón</option>
                                        </select>
                                    </td>
                                    <td> Dato 3</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <script>
                        function cargarHoras() {
                            var horaSelects = document.querySelectorAll(".horaSelect");

                            // Simplemente como ejemplo, puedes agregar opciones de hora
                            var horas = ["7:00 AM", "9:00 AM", "11:00 AM", "2:00 PM", "4:00 PM", "6:00 PM", "8:00 PM"];

                            // Iterar sobre todos los selects y cargar las opciones
                            horaSelects.forEach(function(select) {
                                // Limpiar las opciones antes de agregar las nuevas
                                select.innerHTML = "<option value='' disabled selected>Elige Hora</option>";

                                // Crear opciones de hora y agregarlas al select
                                horas.forEach(function(hora) {
                                    var opcionHora = document.createElement("option");
                                    opcionHora.value = hora;
                                    opcionHora.text = hora;
                                    select.add(opcionHora);
                                });
                            });
                        }



                        function cargarSalones() {
                            var salonSelects = document.querySelectorAll(".salonSelect");
                            var salones = ["503", "504", "505"];

                            salonSelects.forEach(function(select) {
                                // Limpiar las opciones antes de agregar las nuevas
                                select.innerHTML = "<option value='' disabled selected>Elige Salón</option>";

                                // Crear opciones de salón y agregarlas al select
                                salones.forEach(function(salon) {
                                    var opcionSalon = document.createElement("option");
                                    opcionSalon.value = salon;
                                    opcionSalon.text = salon;
                                    select.add(opcionSalon);
                                });
                            });
                        }

                        // Cargar las horas al cargar la página
                        cargarHoras();
                        cargarSalones();
                    </script>



                </div>
            </div>
            <div class="card mb-2 border-0">
                <div class="row">
                    <div class="col-md-6">
                        <!-- VENTANA EMERGENTE MODAL ASIGNAR CURSO -->
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                            data-target="#miModal1">
                            <i class="bi bi-journal"></i> Asignar curso
                        </button>
                        <div class="modal" id="miModal1" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Asignar curso</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Barra de busqueda -->
                                        <input type="text" class="form-control mb-2" id="searchInput"
                                            placeholder="Buscar curso...">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <label>
                                                    Desarrollo web
                                                </label>
                                                <input type="checkbox">
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <label>
                                                    Dato 2
                                                </label>
                                                <input type="checkbox">
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <label>
                                                    Dato 3
                                                </label>
                                                <input type="checkbox">
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <label>
                                                    Dato 4
                                                </label>
                                                <input type="checkbox">
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <label>
                                                    Dato 5
                                                </label>
                                                <input type="checkbox">
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <label>
                                                    Dato 6
                                                </label>
                                                <input type="checkbox">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                //mensaje advertencia asignar curso
                document.addEventListener('DOMContentLoaded', function() {
                    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

                    checkboxes.forEach(function(checkbox) {
                        checkbox.addEventListener('change', function() {
                            if (this.checked) {
                                // Checkbox seleccionado
                                var cursoAsignado =
                                    true; // Verifica si el curso ya está asignado (debes implementar esta lógica)

                                if (cursoAsignado) {
                                    // Muestra el mensaje de advertencia
                                    alert('Este curso ya está asignado a un docente');
                                    this.checked = false; // Desmarca el checkbox
                                } else {
                                    // Muestra el mensaje de confirmación
                                    if (!confirm('¿Está seguro de asignar este curso?')) {
                                        // El usuario hizo clic en Cancelar o cerró el cuadro de diálogo, desmarca el checkbox
                                        this.checked = false;
                                    } else {
                                        // El usuario hizo clic en Aceptar, puedes realizar acciones adicionales aquí
                                    }
                                }
                            }
                        });
                    });
                });
            </script>
        </div>


        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <!-- Agrega aquí la información de cursos si es necesario -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Programa</th>
                                    <th>Semestre</th>
                                    <th>Codigo</th>
                                    <th>Curso</th>
                                    <th>Creditos</th>
                                    <th>Jornada</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha final</th>
                                    <th>Horas</th>
                                    <th>Modulo</th>
                                    <th>Grupo</th>
                                    <th>Horario</th>
                                    <th>Salon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dato 1</td>
                                    <td>Dato 2</td>
                                    <td>Dato 3</td>
                                    <td>Dato 4</td>
                                    <td>Dato 5</td>
                                    <td>Dato 6</td>
                                    <td>Dato 7</td>
                                    <td>Dato 8</td>
                                    <td>Dato 9</td>
                                    <td>Dato 10</td>
                                    <td>Dato 11</td>
                                    <td>Dato 12</td>
                                    <td>Dato 13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
        <div class="card mb-2 border-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-2 border-0">
                        <type="button" class="btn btn-primary">
                        <i class="bi bi-person"></i> Exportar Horario
                        </button>
                    </div>
                </div>
            </div>
        </div>

    @endsection
