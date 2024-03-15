@extends('template')

@section('titulo')

@section('contenido')

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Pensum Pregrados Corporación Universitaria Autónoma del Cauca</h2>
        </div>



        <!-- Pensum -->
        <div class="card shadow mb-4">
            <!-- Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                style="padding: 10px 10px; margin-bottom: 20px; padding-top: 20px; width: 70%;">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar curso"
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
                                <th>Año Pensum</th>
                                <th>Periodo Pensum</th>
                                <th>Tipo programa</th>
                                <th>Tipo grado</th>
                                <th>Programa</th>
                                <th>Semestre</th>
                                <th>Cursos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- agregar filas y datos aquí según tu necesidad -->
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <input type="radio" aria-label="Radio button for following text input"
                                            id="">
                                    </div>
                                </td>
                                <td class="text-black">Dato 2</td>
                                <td class="text-black">Dato 3</td>
                                <td class="text-black">Dato 4</td>
                                <td class="text-black">Dato 5</td>
                                <td class="text-black">Dato 6</td>
                                <td class="text-black">Dato 7</td>
                                <td class="text-black">Dato 8</td>
                            </tr>
                            <!-- agregar más filas según sea necesario -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Botones -->
        <div class="col-md-6">
            <div class="btn-group d-flex justify-content-center">
                <a href="#" class="btn btn-primary mb-2" onclick="mostrarAdvertencia()">Cancelar</a>
                <a href="#" class="btn btn-primary mb-2" onclick="mostrarAdvertencia()">Editar</a>
                <a href="#" class="btn btn-primary mb-2" onclick="mostrarAdvertencia()">Guardar cambios</a>
            </div>
        </div>

        <!-- Advertnecia -->
        <script>
            function mostrarAdvertencia() {
                // Utiliza el método confirm() para mostrar una ventana emergente con los botones Aceptar y Cancelar
                var confirmacion = confirm("¿Estás seguro de guardar cambios?");

                // Si el usuario hace clic en Aceptar, realiza la acción de guardar
                if (confirmacion) {
                    alert("Cambios guardados correctamente."); // Puedes reemplazar esto con tu lógica de guardar datos
                } else {
                    alert("Cambios cancelados.");
                }
            }
        </script>

    </div>

    <!-- End of Main Content -->


@endsection
