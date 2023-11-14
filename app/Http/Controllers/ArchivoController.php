<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArchivoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $archivos = Archivo::all();
        return view('archivo.index', compact('archivos'));
    }

    public function create()
    {
        return view('archivo.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'archivo' => 'required',
        'descripcion' => 'required',
        'tamaño' => 'required|numeric',
    ]);

    $archivo = new Archivo();
    $archivo->descripcion = $request->descripcion;
    $archivo->tamaño = $request->tamaño;

    if ($request->hasFile('archivo')) {
        $archivoNombre = time() . '.' . $request->archivo->getClientOriginalExtension();
        $request->archivo->move(public_path('archivos'), $archivoNombre);
        $archivo->archivo = $archivoNombre;
    }

    $archivo->save();

    return redirect('/archivo');
}
    public function download($id)
    {
        $archivo = Archivo::findOrFail($id);
        $archivoPath = public_path('archivos/' . $archivo->archivo);
        return response()->download($archivoPath);
    }

    public function destroy($id)
    {
        $archivo = Archivo::findOrFail($id);
        $archivo->delete();
        return redirect()->route('archivo.index')->with('success', 'Archivo eliminado correctamente.');
    }
}
