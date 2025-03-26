<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="theme-color" content="#000000" />

  <title>Detalle de Alumno</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>

</head>

<body>

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="">
          <img src="../public/assets/images/estudiantes.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
          aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Asignaturas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Docentes</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-5 mb-5">

    <div class="row">

      <div class="col-md-12">

        <h1 style="font-size: 28px; margin-top: 50px;" class=" text-center">SERVICIOS ESCOLARES </h1>

        <div class="page-content">
          <div class="row">

            <div class="col-md-10">

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Alumnos</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detalle</li>
                </ol>
              </nav>

              <div class="row">

                <div class="col-md-12">

                  <div class="content-box-large">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h2>Informacion del Alumno</h2>
                      </div>

                    </div>

                    <div class="panel-body">

                      <section class="example mt-4">

                        <h5>Numero de Control: </h5>
                        <p id="num_control" class="example ml-4"></p>

                        <h5>Nombre: </h5>
                        <p id="nombre"></p>
                        <p id="primerAp"></p>
                        <p id="segundoAp"></p>

                        <h5>Fecha de nacimiento: </h5>
                        <p id="fecha_nac"></p>

                        <h5>Semestre: </h5>
                        <p id="semestre"></p>

                        <h5>Carrera: </h5>
                        <p id="carrera"></p>


                      </section>

                      <a href="/" class="btn btn-warning mt-3">Volver</a>


                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <hr>
    <footer class="text-muted mt-3 mb-3">
      <div align="center">
        FOOTER
      </div>
    </footer>

    <!-- JS Bootstrap  -->
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>

  <script type="text/javascript">

    var url = new URL(window.location.href);
    const id = url.searchParams.get("id");

    fetch("alumnos/" + id).then(response => {
      if (response.ok) {
        return response.json();
      }
    }).then(data => {
      if (data) {
        console.log(data);

        const lista = data;

        lista.forEach((a) => {
          document.getElementById("num_control").innerHTML = a.Num_Control;
          document.getElementById("nombre").innerHTML = a.Nombre;
          document.getElementById("primerAp").innerHTML = a.PrimerAp;
          document.getElementById("segundoAp").innerHTML = a.SegundoAp;
          document.getElementById("fecha_nac").innerHTML = a.Fecha_Nac;
          document.getElementById("semestre").innerHTML = a.Semestre;
          document.getElementById("carrera").innerHTML = a.Carrera;
          
        });


      };

    }
    ).catch(err => console.error(err));


  </script>

</body>

</html>