@extends('home')

@section('content')

<html>
    <head>
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
body {
    background-color: withe;
}
.red {
    color: red;
}
 
#footer {
    position: fixed;
    width: 100%;
    height: 40px;
    line-height: 40px;
    vertical-align: middle;
    background-color: black;
    color: white;
    text-align: center;
    bottom: 0;
    left: 0;
}
</style>
    </head>
<body>
<form method="POST" action="/index.php" class="needs-validation" novalidate>

<div class="form-row mt-5">
    <div class="col-md-4 mb-3">
        <label for="validarNombre">Nombre:<span class="red">*</span></label>
        <input type="text" class="form-control" id="validarNombre" name="validarNombre" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validarApellidos">Apellidos:<span class="red">*</span></label>
        <input type="text" class="form-control" id="validarApellidos" name="validarApellidos" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validarEmail">Email:<span class="red">*</span></label>
        <input type="email" class="form-control" id="validarEmail" name="validarEmail" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validarTelefono">Teléfono:</label>
        <input type="number" class="form-control" id="validarTelefono" name="validarTelefono" max="999999999">
    </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validarTema">Tema:<span class="red">*</span></label>
        <select class="custom-select" id="validarTema" name="validarTema" required>
            <option selected disabled value="">Selecciona...</option>
            <option value="Problema con acceso a Web">Problema con acceso a Web</option>
            <option value="Propuesta de colaboración">Propuesta de colaboración</option>
            <option value="Eliminar mi usuario de la Web">Eliminar mi usuario de la Web</option>
            <option value="Otras cuestiones">Otras cuestiones</option>
        </select>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validarAsunto">Asunto:</label>
        <input type="text" class="form-control" id="validarAsunto" name="validarAsunto" required>
    </div>
</div>

<div class="form-group">
    <label for="validationMensaje">Mensaje:<span class="red">*</span></label>
    <textarea class="form-control" id="validationMensaje" name="validationMensaje" rows="3" min="25" required></textarea>
</div>

<div class="form-group mb-10">
    <button class="btn btn-primary" type="submit" name="submit">Enviar</button>
    <button class="btn btn-success" type="reset" name="reset">Limpiar</button>
</div>

</form>
</body>
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</html>

@endsection('content')