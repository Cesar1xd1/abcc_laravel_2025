<?php

    namespace App\Http\Controllers;

    use App\Models\Alumno;
    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Session;


    class AlumnoController extends Controller{

        //--------- ALTAS -----------------------------
        public function create(){
            return view('insertar');
        }

        public function store(Request $request){
            /*$request->validate([
                'caja_num_control' => 'required',
                'caja_nombre' => 'required',
                'caja_primer_ap' => 'required',
                'caja_segundo_ap' => 'required',
                'caja_fecha_nac' => 'required',
                'caja_semestre' => 'required',
                'caja_carrera' => 'required',
            ]);*/
            Session::flash('message', 'AGREGADO Correctamente !');
            Alumno::create($request->post());
            // Mensaje de éxito
            return redirect()->route('alumnos.index')->with('exito', 'Agregado CORRECTAMENTE!!!');
        }

        //--------- BAJAS -----------------------------
        public function destroy(Alumno $alumno){
            $alumno->delete();
            Session::flash('message', 'ELIMINADO Correctamente !');
            return redirect()->route('alumnos.index')->with('eliminado','Eliminado Correctamente');
        }

        //--------- CAMBIOS -----------------------------
        public function edit(Alumno $alumno){
            return view('editar', compact('alumno'));
        }

        public function update(Request $request, $id){

            $alumno =  Alumno::find($id);

            $alumno->Num_Control = $request->input('Num_Control');
            $alumno->Nombre = $request->input('Nombre');
            $alumno->Primer_Ap = $request->input('Primer_Ap');
            $alumno->Segundo_Ap = $request->input('Segundo_Ap');
            $alumno->Fecha_Nac = $request->input('Fecha_Nac');
            $alumno->Semestre = $request->input('Semestre');
            $alumno->Carrera = $request->input('Carrera');

            $alumno->save();
            Session::flash('message', 'MODFICADO Correctamente !');
            return redirect()->route('alumnos.index');
        }

        //--------- CONSULTAS -----------------------------
        public function index(){
            $alumnos = Alumno::latest()->paginate(5);
            return view('index', compact('alumnos'));
        }

        public function show(Alumno $alumno){
            return view('detalle', compact('alumno'));
        }
    }
?>
