@extends('template')

@section('titulo')

@section('contenido')

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login" style="text-align: center; height: 100%; display: flex; align-items: center; justify-content: center; margin-top: 50px;">
                            <img src="https://moodle.uniautonoma.edu.co/pluginfile.php/1/theme_lambda/logo/1699540253/logo-quimera-transparente-550x420.png" style="max-width: 95%; max-height: 95%;">
                        </div>                             
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">¿Olvidó su contraseña?</h1>
                                    <p class="mb-4">Para recuperar su contraseña por favor ingrese su correo electrónico</p>
                                </div>
                                <form class="user" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="email" name="email" aria-describedby="emailHelp"
                                            placeholder="Correo electrónico" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Recuperar contraseña
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <p class="mb-4">Puedes comunicarte directamente con nosotros:</p>
                                    <a class="small" href="#">WhastApp</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="#">soporte.crmweb@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

@endsection;
