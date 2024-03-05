<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/styles1.css">
  <link rel="icon" href="../img/logo.png" type="image/png">
  <title>Shpy  l Iniciar Sesión</title>
</head>

<body class="body_iniciar_sesion">

  <div class="login-container">
    <div class="login-image">
      <img src="../public/img/iniciosesionnnn.jpg">
    </div>
    <div class="login-form">
      <div class="close-button">
        <a href="/interfaz_usuario/index.php"><img src="../img/cerrar X.png" alt=""></a>
      </div>
      <div class="logo-and-title">
        <img src="../public/img/logo.png" alt="">
        <h2>Iniciar Sesión</h2>
      </div>
      <form class="form_iniciar_sesion">
        <div class="form-group">
          <img src="../public/img/usuario img.png" alt="">
          <input type="text" placeholder="Nombre Usuario" />
        </div>
        <div class="form-group">
          <img src="../img/candado.png" alt="">
          <input type="password" placeholder="Contraseña" />
        </div>
        <div class="ingresar-link">
          <a href="../sistema/index.php">Administrador</a>
        </div>
        <div class="forgot-password">
          <a href="recuperar_contraseña.php">Recuperar Contraseña</a>
        </div>

        <button class="boton_iniciar_sesion" type="submit"><a href="../interfaz_usuario/index.php"></a> Iniciar Sesión</button>
      </form>
      <div class="register-link">
        <a href="../interfaz_usuario/registrar_usuario.php">Registrarse</a>
      </div>

    </div>
  </div>

</body>

</html>