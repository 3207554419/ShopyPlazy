<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopzy Place | E-commerce </title>
  <link rel="stylesheet" href="public/css/styles1.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="icon" href="public/img/logo.png" type="image/png">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <img class="logo_principal" src="public/img/logo largo.png" alt="">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link boton_header" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link boton_header" href="#main">Catálogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link boton_header" href="#footer">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link boton_header" href="#">Categorias</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <div class="busqueda">
              <input required="" type="text" class="input">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">B</span>
                <span class="label-char" style="--index: 1">ú</span>
                <span class="label-char" style="--index: 2">s</span>
                <span class="label-char" style="--index: 3">q</span>
                <span class="label-char" style="--index: 4">u</span>
                <span class="label-char" style="--index: 5">e</span>
                <span class="label-char" style="--index: 6">d</span>
                <span class="label-char" style="--index: 7">a</span>
              </label>
            </div>
            <button class="btn boton_header" type="submit">Buscar</button>
            <div class="form-inline">
              <a href="#"><img src="public/img/carrito-de-compras.png" alt="Carrito de Compras" class="icono-pequeno"></a>
              <a href="view/iniciar_sesion.php"><img src="public/img/usuario img.png" alt="Perfil" class="icono-pequeno"></a>
            </div>
          </form>
        </div>
      </div>
    </nav>

    <div id="carouselExampleDark" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" data-aos="fade-up" data-aos-duration="3000">
        <div class="carousel-item active" data-bs-interval="10000">
          <img class="carrusel_img" src="public/img/ropa negra img 1.jpg" alt="...">
          <div class="texto_carrusel d-none d-md-block">
            <h5>NUEVOS PRODUCTOS</h5>
            <p>Te invitamos a ver nuestros nuevos productos en Shoppy Plazy</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img class="carrusel_img" src="public/img/ropa negra img 2.jpeg" alt="...">
          <div class="texto_carrusel d-none d-md-block">
            <h5>NUEVAS TENDENCIAS</h5>
            <p>Se crean nuevas tendencias y las tenemos en Shoppy Plazy</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="carrusel_img" src="public/img/ropa negra img 3.jpeg" alt="...">
          <div class="texto_carrusel d-none d-md-block">
            <h5>NUEVA MODA</h5>
            <p>Nueva ropa es igual a nueva moda y está en Shoppy Plazy</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>

  <main id="main">
    <div class="container">
      <center>
        <h2>Categorias</h2>
      </center>
      <br><br><br>
      <center>
        <div class="container_box">
          <div class="box box-1" style="background-image: url('https://surtitodo.vtexassets.com/assets/vtex.file-manager-graphql/images/1baab20e-a42e-49b5-9bfb-42bb9a375cc9___27819712095faf8376a61d27eb589e80.jpg');" data-text="Vestidos"></div>
          <div class="box box-2" style="background-image: url('https://stopjeans.vtexassets.com/arquivos/ids/210086-500-auto?v=638436398554530000&width=500&height=auto&aspect=true');" data-text="Conjunto"></div>
          <div class="box box-3" style="background-image: url('https://images.stylight.net/image/upload/t_web_product_330x440max_nobg/q_auto:eco,f_auto/aclz62neepwmib6zdjjd.webp');" data-text="Ropa elegante"></div>
          <div class="box box-4" style="background-image: url('https://i.pinimg.com/736x/79/27/fc/7927fc1fcfe745bd1ef535c063584170.jpg');" data-text="Vestidos de noche"></div>
          <div class="box box-5" style="background-image: url('https://i.pinimg.com/736x/89/7d/19/897d199589f88c469c820d8fb7b47aa8.jpg');" data-text="Pantalones"></div>
        </div>
      </center>

      <section id="ropa-main">
        <div class="row">
          <article class="col-lg-4 seccion-ropa" data-aos="fade-up">
            <img src="public/img/main ropa 1.jpg" alt="destacada1">
            <div class="cont-info">
              <h3>Falda Morada</h3>
              <p>$100.000</p>
            </div>
          </article>
          <article class="col-lg-4 seccion-ropa" data-aos="fade-up">
            <img src="public/img/main ropa 2.jpg" alt="destacada2">
            <div class="cont-info">
              <h3>Vestido Morado</h3>
              <p>$200.000</p>
            </div>
          </article>
          <article class="col-lg-4 seccion-ropa" data-aos="fade-up">
            <img src="public/img/main ropa 3.jpg" alt="destacada3">
            <div class="cont-info">
              <h3>Chaqueta Lila</h3>
              <p>$150.000</p>
            </div>
          </article>
        </div>
      </section>

      <section id="ropa-main-2">
        <div class="row">
          <article class="col-lg-4 seccion-ropa-2" data-aos="fade-down">
            <img src="public/img/main ropa 4.png" alt="destacada1">
            <div class="cont-info">
              <h3>Pantalon Verde</h3>
              <p>$120.000</p>
            </div>
          </article>
          <article class="col-lg-4 seccion-ropa-2" data-aos="fade-down">
            <img src="public/img/main ropa 5.png" alt="destacada2">
            <div class="cont-info">
              <h3>Chaqueta Verde</h3>
              <p>$160.000</p>
            </div>
          </article>
          <article class="col-lg-4 seccion-ropa-2" data-aos="fade-down">
            <img src="public/img/main ropa 6.png" alt="destacada3">
            <div class="cont-info">
              <h3>Vestido Enterizo Verde</h3>
              <p>$200.000</p>
            </div>
          </article>
        </div>
      </section>
    </div>
  </main>

  <footer id="footer">
    <div class="container">
      <div class="footer-content">
        <b>
          <h6>SHOPPY PLAZY</h6>
        </b>
        <p><b>Numero de contacto:</b> 3224392572</p>
        <p><b>Correo electrónico:</b> Shopzy_Place@gmail.com</p>
      </div>

      <div class="logo-container">
        <a href="#"><img src="public/img/instagram.png" alt="Instagram" class="logo"></a>
        <a href="https://wa.link/mxfdg1"><img src="public/img/whatsapp.png" alt="Whatsapp" class="logo"></a>
        <a href="#"><img src="public/img/facebook.png" alt="Facebook" class="logo"></a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>