{{-- resources/views/alumnos/index.blade.php --}}
@extends('adminlte::page')

@section('title', 'Alumnos')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <!-- JQuery para ocultar mensajes -->
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            // Ocultar alertas con fade
            setTimeout(function () {
                $("#msj").fadeOut(1500);
            }, 3000);

            // Confirmación para eliminar
          
            // Mostrar SweetAlert si hay mensaje de éxito
            @if(session('exito'))
                Swal.fire({
                    title: '¡Éxito!',
                    text: '{{ session('exito') }}',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
            @endif

            @if(session('eliminado'))
                Swal.fire({
                    title: '¡Éxito!',
                    text: '{{ session('eliminado') }}',
                    icon: 'info',
                    confirmButtonText: 'Aceptar'
                });
            @endif

            
        });
    </script>
@endsection
@section('content_header')
    <h1 class="text-center">SERVICIOS ESCOLARES</h1>
@endsection

@section('content')

    <div class="container mt-4">
    
        
    
        <!-- Mensaje de éxito -->
        @if(Session::has('message'))
            <div class="alert alert-success" id="msj">
                {{ Session::get('message') }}
            </div>
        @endif

        <!-- Navegación -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Inicio</li>
                <li class="breadcrumb-item active" aria-current="page">Alumnos</li>
            </ol>
        </nav>

        <!-- Botón agregar -->
        <a href="{{ route('alumnos.create') }}" class="btn btn-success mb-3">AGREGAR</a>

        <!-- Tabla -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>Numero de Control</th>
                        <th>Nombre</th>
                        <th>Semestre</th>
                        <th>Fecha Nacimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $a)
                        <tr>
                            <td>{{ $a->Num_Control }}</td>
                            <td>{{ $a->Nombre }}</td>
                            <td>{{ $a->Semestre }}</td>
                            <td>{{ $a->Fecha_Nac }}</td>
                            <td>
                                <form action="{{ route('alumnos.destroy', $a) }}" method="POST" onsubmit="return confirmarEliminacion()">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary btn-sm" href="{{ route('alumnos.show', $a->id) }}">Detalle</a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('alumnos.edit', $a->id) }}">Editar</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginación -->
            <div class="d-flex justify-content-center mt-3">
                {!! $alumnos->links() !!}
            </div>
        </div>
    </div>
@endsection


