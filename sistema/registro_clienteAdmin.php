<?php
include "../sistema/conexion.php";

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol'])) {
        $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
    } else {
        $nombre = $_POST['nombre'];
        $email =  $_POST['correo'];
        $user =  $_POST['usuario'];
        $clave =  md5($_POST['clave']);
        $rol =  $_POST['rol'];

        $query = mysqli_query($conection, "SELECT * FROM clientes WHERE usuario = '$user' OR correo = '$email'");

        $result = mysqli_fetch_array($query);

        if ($result > 0) {
            $alert = '<p class="msg_error">El correo o el usuario ya existe.</p>';
        } else {
            $query_insert = mysqli_query($conection, "INSERT INTO clientes(nombre, correo, usuario, clave, rol)
                                                        VALUES('$nombre','$email', '$user','$clave','$rol')");
            if ($query_insert) {
                $alert = '<p class="msg_save">Cliente creado correctamente.</p>';
            } else {
                $alert = '<p class="msg_error">Error al crear el cliente.</p>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/sistema/css/style.css">
    <?php include "includes/scripts.php"; ?>
    <title>Registro Cliente</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <section id="container">
        
        <div class="form_register">
            <h1>Registro Cliente</h1>
            <hr>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

            <form action="" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
                <label for="correo">Correo electrónico</label>
                <input type="email" name="correo" id="correo" placeholder="Correo electrónico">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                <label for="clave">Clave</label>
                <input type="password" name="clave" id="clave" placeholder="Clave de acceso">
                <label for="rol">Tipo de Cliente</label>
                <select name="rol" id="rol">
                    <?php
                        $query_rol = mysqli_query($conection, "SELECT * FROM roles");
                        while ($rol = mysqli_fetch_array($query_rol)) {
                    ?>
                        <option value="<?php echo $rol["IdRol"]; ?>"><?php echo $rol["Rol"]; ?></option>
                    <?php
                        }
                    ?>
                </select>
                <button type="submit" class="btn_save">Registrar Cliente</button>
            </form>
        </div>
    </section>
    <?php include "includes/footer.php"; ?>  
</body>
</html>
