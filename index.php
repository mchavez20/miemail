<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <title>EMBIOTERRA</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/video-js.css" />
    <script src="js/video.js"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Menu -->

    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <div class="d-none d-lg-block">
          <a class="navbar-brand" href="">
            <img src="imagen/logo2.png" alt="" class="img-fluid" />
          </a>
        </div>

        <div class="d-lg-none">
          <a class="navbar-brand" href="">
            <img src="imagen/logoopcion.JPG" alt="" class="img-fluid" />
          </a>
        </div>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a
                class="nav-link fw-bold"
                aria-current="page"
                style="color: black"
                href="#"
                >Inicio</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link fw-bold"
                id="itemsmenu"
                style="color: black"
                font-family="Arial"
                href="#"
                >Nosotros</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" style="color: black" href="#"
                >Servicios</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" style="color: black" href="#"
                >Productos</a
              >
            </li>
            <li class="nav-item" id="items">
              <a class="nav-link fw-bold" style="color: black" href="#"
                >Inventigacion</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!---------------------- Carrusel ------------------------------------>

    <section id="carrusel">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
          ></li>
          <li
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
          ></li>
          <li
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
          ></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagen/slide1.JPG" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="imagen/slide1.JPG" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="imagen/slide1.JPG" class="d-block w-100" alt="..." />
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </section>

    <!-- Separacion -->

    <!--  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img src="imagen/opcion1.JPG" class="d-block w-100" style="width: 0rem; height: 3rem"  alt="...">
      </div>
    </div> -->

    <!--------------------------- cuerpo ------------------------------------------------->
    <!-------------------------------------------------------------------------------------->

    <!------------------------------- titulo ------------------------------->
    <section id="principal">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h1 class="fw-bold">Testimonios</h1>
            <br />
          </div>
        </div>
        <!------------------------ encargados ----------------------------------->
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="imagen text-center">
              <img
                src="imagen/prueba1.PNG"
                class="img-fluid rounded-circle"
                style="width: 15rem; height: 15rem"
                alt="..."
              />
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-3">
            <div
              class="card-body parrafo"
              class="badge bg-primary text-wrap"
              style="width: 15rem; height: 15rem"
            >
              <p>
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="imagen text-center">
              <img
                src="imagen/prueba1.PNG"
                class="img-fluid rounded-circle"
                style="width: 15rem; height: 15rem"
                alt="..."
              />
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-3">
            <div
              class="card-body parrafo"
              class="badge bg-primary text-wrap"
              style="width: 15rem; height: 15rem"
            >
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>

        <!-------------------- Videos ----------------------------------->
        <div class="row">
          <div class="col-md-4 reproductor">
            <div class="videos">
              <video
                class="fm-video video-js vjs-16-9 vjs-big-play-centered"
                data-setup="{}"
                controls
                id="fm-video"
              >
                <source src="video/video1.mp4" type="video/mp4" />
              </video>
            </div>
          </div>

          <div class="col-md-4 reproductor">
            <div class="videos">
              <video
                class="fm-video video-js vjs-16-9 vjs-big-play-centered"
                data-setup="{}"
                controls
                id="fm-video"
              >
                <source src="video/video1.mp4" type="video/mp4" />
              </video>
            </div>
          </div>
          <div class="col-md-4 reproductor">
            <div class="videos">
              <video
                class="fm-video video-js vjs-16-9 vjs-big-play-centered"
                data-setup="{}"
                controls
                id="fm-video"
              >
                <source src="video/video1.mp4" type="video/mp4" />
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------- contacto ------------------------------->

    <section>
      <div class="container contacto">
        <div class="row">
          <div class="titulocontacto">
            <h1>Estemos en contacto</h1>
            <br />
            <h4>Responderemos lo mas pronto posible.</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <form class="row g-3" method="POST">
              <div class="col-md-4">
                <label for="validationDefault01" class="form-label"
                  >Nombre</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="nombre"
                  value=""
                  name="nombre"
                  required
                />
              </div>
              <div class="col-md-4">
                <label for="validationDefault02" class="form-label"
                  >Email</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  value=""
                  required
                />
              </div>

              <div class="col-md-4">
                <label for="validationDefault02" class="form-label"
                  >Celular</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="celular"
                  name="celular"
                  value=""
                  required
                />
              </div>

              <div class="mb-3">
                <label for="validationDefault02" class="form-label"
                  >Deja tu consulta</label
                >
                <textarea
                  class="form-control"
                  id="consulta"
                  name="consulta"
                  placeholder="Required example textarea"
                  required
                ></textarea>
                <div class="invalid-feedback">
                  Please enter a message in the textarea.
                </div>
              </div>

              <div class="col-12">
                <button class="btn btn-primary" type="submit" name="enviar">
                  Enviar mensaje
                </button>
              </div>
            </form>
          </div>


          <div class="col-sm-6">
            <div class="text-center">
              <ul class="list-group list-group-horizontal-sm listacontacto">
                <li class="list-group-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-telephone-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                    />
                  </svg>
                </li>
                <li class="list-group-item"><p>998990078</p></li>
              </ul>

              <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-envelope-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"
                    />
                  </svg>
                </li>
                <li class="list-group-item">
                  <p>solucionesambiantales@embioterra.pe</p>
                </li>
              </ul>

              <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-geo-alt-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                    />
                  </svg>
                </li>
                <li class="list-group-item"><p>Jr.O'higgins N°123</p></li>
              </ul>
            </div>
          </div>
        </div>
        <?php 
        include ("enviar.php");
        ?>

      </div>
    </section>

    <!-------------------- nuemero de contactos ------------------------------->
    <!-- <div class="container  ">
      <div class="row ">
        <div class="col-sm-3  contacto">
          <div class="row">
            <div class="col-sm-3 text-center icono">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="50"
                fill="currentColor"
                class="bi bi-telephone-fill"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                />
              </svg>
            </div>

            <div class="col-sm-9 text-center">
              <p>998990078</p>
            </div>
          </div>
        </div>

        <div class="col-sm-5 contacto">
          <div class="row">
            <div class="col-sm-3 icono text-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="50"
                fill="currentColor"
                class="bi bi-envelope-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"
                />
              </svg>
            </div>
            <div class="badge correo text-wrap col-sm-9 style="width: 15rem;">
              <p>solucionesambiantales@embioterra.pe</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 contacto
        ">
          <div class="row">
            <div class="col-sm-3 icono text-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="50"
                fill="currentColor"
                class="bi bi-geo-alt-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                />
              </svg>
            </div>
            <div class="badge info col-sm-9 text-center">
              <p>Jr.O'higgins N°123</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!------------------- Footer----------------------------- -->

    <section id="footer">
      <div class="container col-xs-12">
        <div class="row d-flex justify-content-center col-xs-12">
          <div class="text-center col-xs-12">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="" class="text-dark">
                  <img src="imagen/whatsapp.png" alt="" />
                </a>
              </li>

              <li class="list-inline-item">
                <a href="" class="text-dark">
                  <img src="imagen/facebook.png" alt="" />
                </a>
              </li>

              <li class="list-inline-item">
                <a href="" class="text-dark">
                  <img src="imagen/instagram.png" alt="" />
                </a>
              </li>

              <li class="list-inline-item">
                <a href="" class="text-dark">
                  <img src="imagen/gorjeo.png" alt="" />
                </a>
              </li>

              <li class="list-inline-item">
                <a href="" class="text-dark">
                  <img src="imagen/youtube.png" alt="" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="containerraya">
      <div class="raya"></div>
    </div>

    <div class="derechos text-center py-3">
      <p>
        Copyright &copy; 2021, Todos los derechos reservados , Diseñado e
        implementado por EMbioterra E.I.R.L.
      </p>
    </div>

    <!--   <script
      src="js/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script> -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>

    <script>
      var reproductor = videojs("fm-video", {
        fluid: true,
      });
    </script>
  </body>
</html>
