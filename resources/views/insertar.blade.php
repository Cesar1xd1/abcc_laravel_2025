<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="theme-color" content="#000000" />

  <title>ALTAS</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">
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
                  <li class="breadcrumb-item active" aria-current="page">Agregar</li>
                </ol>
              </nav>

              <div class="row">

                <div class="col-md-12">

                  <div class="content-box-large">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h2>NUEVO AUMNO</h2>
                      </div>

                    </div>

                    <div class="panel-body">

                      <section class="example mt-4">

                        <form action="{{ route('alumnos.store') }}" 
                                    role="form" enctype="application/x-www-form-urlencoded">
                                    @csrf
                                                <!--ENCTYPE ES IMPORTANTE -->
                          <div class="mb-3">
                              <label for="num_control" class="negrita">Numero de Control:</label>
                              <div>
                                <input class="form-control" placeholder="Solo nuemros" required="required"
                                  name="Num_Control" type="text" id="Num_Control">
                              </div>
                          </div>

                          <div class="mb-3">
                              <label for="nombre" class="negrita">Nombre:</label>
                              <div>
                                <input class="form-control" placeholder="Solo letras" required="required"
                                  name="Nombre" type="text" id="Nombre">
                              </div>
                          </div>

                          <div class="mb-3">
                            <label for="Primer_Ap" class="negrita">Primer Ap:</label>
                            <div>
                              <input class="form-control" placeholder="Solo letras" required="required"
                                name="Primer_Ap" type="text" id="Primer_Ap">
                            </div>
                        </div>

                        <div class="mb-3">
                          <label for="Segundo_Ap" class="negrita">Segundo Ap:</label>
                          <div>
                            <input class="form-control" placeholder="Solo letras" required="required"
                              name="Segundo_Ap" type="text" id="Segundo_Ap">
                          </div>
                      </div>

                      <div class="mb-3">
                        <label for="Fecha_Nac" class="negrita">Fecha de Nacimiento:</label>
                        <div>
                          <input class="form-control" placeholder="Solo letras" required="required"
                            name="Fecha_Nac" type="text" id="Fecha_Nac" value="2025-10-10">
                        </div>
                    </div>

                    <div class="mb-3">
                      <label for="Semestre" class="negrita">Semestre:</label>
                      <div>
                        <input class="form-control" placeholder="Solo letras" required="required"
                          name="Semestre" type="text" id="Semestre">
                      </div>
                  </div>

                  <div class="mb-3">
                    <label for="Carrera" class="negrita">Carrera:</label>
                    <div>
                      <input class="form-control" placeholder="Solo letras" required="required"
                        name="Carrera" type="text" id="Carrera">
                    </div>
                </div>

                          <button type="submit" class="btn btn-success">Guardar</button>
                          <a href="/" class="btn btn-warning">Cancelar</a>
                        </form>

                      </section>

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

</body>

</html>