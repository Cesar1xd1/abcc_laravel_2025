<?php

    namespace App\Http\Controllers;

    use App\Models\Alumno;
    use Illuminate\Http\Request;

    class AlumnoController extends Controller{
        
        //Mostrar Formulario
        public function create(){
            return view('insertar');
        }
        //Realizar alta
        public function store(Request $request){
            Alumno::create($request->post());
            return redirect()->route('alumnos.index')->with('exito','Agregado Correctamente');
        }

        //Realizar Baja
        public function destroy(Alumno $alumno){
            $alumno->delete();
            return redirect()->route('alumno.index')->with('Exito','Eliminado Correctamente');
        }

        //REalizar Cambio

        public function edit(Alumno $alumno){
            return view('editar',compact('alumno'));
        }
        public function update(Request $request, Alumno $alumno){
            

            $alumno->fill($request->post());
            $alumno->save();
            return redirect()->route('alumno.index')->with('Exito','Eliminado Correctamente');
        }

        //Realizar Consulta
        public function index(){
            $alumnos = Alumno::latest()->paginate(5);
            return view('index', compact('alumnos'));
        }

        public function show(Alumno $alumno){
            return view('alumnos.mostrar', compact('alumno'));
        }

    }


?>