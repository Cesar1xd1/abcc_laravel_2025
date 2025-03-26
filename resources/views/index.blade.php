<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- JQUERY para desaparecer mensajes-->
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      setTimeout(function() {
          $(".msj").fadeOut(1500);
      },3000);
  });
  </script>
  
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



        <div class="col-md-10">

          <!-- NVEGACION -->
          
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">Inicio</li>
              <li class="breadcrumb-item active" aria-current="page">Alumnos</li>
            </ol>
          </nav>

          <div class="row">

            <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                  <div class="panel-title">
                    <h2>Listado de Alumnos</h2>
                  </div>
                </div>

                <div class="panel-body">
                  
                     <div class="msj alert alert-primary" role=alert""> 
                      Hola
                     </div> 
              

                  

                  <!-- Cargar los alumnos en una tabla html -->
                   <section class="example mt-4">
                      <div class="table-responsive" id="tabla_alumnos">
                          <!-- Alumnos desde BASE DE DATOS ---------------- --> 
                      </div>
                   </section>
                   <a href="{{route('alumnos.create')}}" class="btn btn-success mt-4 ml-3">AGREGAR</a>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>
    
  </div>
  
<div class="container">
<table class='table table-striped table-bordered table-hover text-center'>
                        <thead>
                          <tr>
                            <th> Numero de Control</th>
                            <th> Nombre</th>
                            <th> Primer Ap.</th>
                            <th> Segundo Ap.</th>
                            <th> ACCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($alumnos as $a)
            
                            <td class='v-align-middle'> {{$a['Num_Control']}} </td>
                  <td class='v-align-middle'> {{$a['Nombre']}} </td>
                  <td class='v-align-middle'> {{$a['Primer_Ap']}} </td>
                  <td class='v-align-middle'> {{$a['Segundo_Ap']}} </td>

                  <td class='v-align-middle'> 
                    <form action="{{route('alumnos.destroy',$a->Num_Control)}}">
                      <a href="{{route('alumnos.show',$a->Num_Control)}}" class="btn btn-primary btn-sm"> Detalle </a> 
                      <a href="{{route('alumnos.edit',$a->Num_Control)}}" class="btn btn-warning btn-sm"> Editar </a> 
                      @endforeach
                      @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
                    
                    </form>
                  </td>
                </tr>
</table>
</div>
<hr>
  <footer class="text-muted mt-3 mb-3">
    <div align="center">
      FOOTER
    </div>
  </footer>


  <!-- Alumnos desde BASE DE DATOS ---------------- --> 
   
        
</body>
</html>