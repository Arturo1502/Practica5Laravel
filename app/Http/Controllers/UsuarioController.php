<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuarios.all', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(),[
                "nombre" => "required|min:3",
                "apellido"=>"required|min:4",
                "email"=>"required|min:5",
                "contrasena"=>"required|min:3"
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $usuario = new Usuario();
            $usuario->nombre =$request->nombre;
            $usuario->apellido =$request->apellido;
            $usuario->email =$request->email;
            $usuario->contrasena =$request->contrasena;
            $usuario->save();

            return redirect()->route('usuarios-all')->with('success', 'Usuario creado correctamente');

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
