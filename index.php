<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Captación de Estudiantes</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .modal-header, .modal-body, .modal-footer {
            border: none;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center">Bienvenido a la Captación de Estudiantes</h1>
    <div class="text-center">
        <button id="registroBtn" class="btn btn-primary">Registrar Estudiante</button>
        <a href="ver_estudiantes.php" class="btn btn-secondary">Ver Estudiantes Registrados</a>
    </div>

    <!-- Modal -->
    <div id="miModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Formulario de Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="registro.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido_p">Apellido Paterno:</label>
                            <input type="text" class="form-control" name="apellido_p" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido_m">Apellido Materno:</label>
                            <input type="text" class="form-control" name="apellido_m" required>
                        </div>
                        <div class="form-group">
                            <label for="escuela_procedencia">Escuela de Procedencia:</label>
                            <input type="text" class="form-control" name="escuela_procedencia" required>
                        </div>
                        <div class="form-group">
                            <label for="promedio">Promedio:</label>
                            <input type="number" class="form-control" name="promedio" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="email" class="form-control" name="correo" required>
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Enlaces a jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#registroBtn').click(function() {
            $('#miModal').modal('show');
        });
    });
</script>

</body>
</html>