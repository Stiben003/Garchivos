<!DOCTYPE html>
    <head>
        <title>Registro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <h1 style="text-align: center;">Registro de usuario</h1>
        <hr>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <form id="frmRegistro" method="post" onsubmit="return agregarUsuarioNuevo()" >
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required="" >
                        <label>Fecha Nacimiento</label>
                        <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="">
                        <label>Correo Electronico</label>
                        <input type="text" name="correo" id="correo" class="form-control" required="">
                        <label>Nombre de Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required="">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" required="">
                        <br>
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <button class="btn btn-primary">Registrar</button>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="index.php" class="btn btn-success">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    <script src="librerias/sweetalert.min.js"></script>
    <script src="librerias/jquery.slim.min.js"></script>
    <script type="text/javascript">
        function agregarUsuarioNuevo(){
            $.ajax({
                method:"POST",
                data: $('#frmRegistro').serialize(),
                url: "procesos/usuario/registro/agregarUsuario.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();
                    if(respuesta == 1){
                        swal(":D", "Agregado con exito!", "Success");
                    }else{
                        swal(":(", " Fallo al agregar usuario !", "Error");
                    }
                }
            });
            return false;
        }
    </script>
</body>
</html>