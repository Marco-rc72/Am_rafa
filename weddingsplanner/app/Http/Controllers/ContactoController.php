<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Agregar_contactos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactoRequest $request)
    {
        // No necesitas validar los datos aquí, ya que ya has hecho la validación en el StoreContactoRequest

        Contacto::create($request->all());

        // Cambia la ruta de redirección a la que desees
        return redirect()->route('contactos.store')->with('success', 'Contacto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //$contacto = Contacto::find($id);
        //dd($student);
        return view('show-contacto', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
