<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $usuario = DB::table('usuario')
        ->where('nombre_del_usuario', $request->nombre_del_usuario)
        ->where('contraseña', $request->contraseña)
        ->first();

    if ($usuario) {
        session(['usuario' => $usuario->nombre_del_usuario]);
        return redirect('/principal');
    }

    return back()->with('error', 'Usuario o contraseña incorrectos');
});

Route::get('/principal', function () {
    if (!session('usuario')) {
        return redirect('/');
    }

    return view('principal');
});

Route::get('/empleados/registrar', function () {
    if (!session('usuario')) {
        return redirect('/');
    }

    return view('registrar-empleado');
});

Route::post('/empleados/registrar', function (Request $request) {
    DB::table('empleado')->insert([
        'codigo' => $request->codigo,
        'nombre' => $request->nombre,
        'direccion' => $request->direccion,
        'telefono' => $request->telefono,
        'sexo' => $request->sexo,
        'fecha_nac' => $request->fecha_nac,
        'turno' => $request->turno,
    ]);

    return redirect('/empleados/consulta-general');
});

Route::get('/empleados/consulta-general', function () {
    if (!session('usuario')) {
        return redirect('/');
    }

    $empleados = DB::table('empleado')->get();

    return view('consulta-general', compact('empleados'));
});

Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
});

Route::get('/alumnos/registrar', function () {
    if (!session('usuario')) {
        return redirect('/');
    }

    return view('registrar-alumno');
});

Route::post('/alumnos/registrar', function (Request $request) {
    DB::table('alumno')->insert([
        'codigo' => $request->codigo,
        'nombre' => $request->nombre,
        'carrera' => $request->carrera,
        'correo' => $request->correo,
        'direccion' => $request->direccion,
        'telefono' => $request->telefono,
        'sexo' => $request->sexo,
        'fecha_nac' => $request->fecha_nac,
    ]);

    return redirect('/alumnos/consulta-general');
});

Route::get('/alumnos/consulta-general', function () {
    if (!session('usuario')) {
        return redirect('/');
    }

    $alumnos = DB::table('alumno')->get();

    return view('consulta-general-alumnos', compact('alumnos'));
});