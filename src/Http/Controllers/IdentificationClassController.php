<?php

namespace DuxDucisArsen\Commons\Http\Controllers;

use DuxDucisArsen\Commons\Http\Requests\IdentificationClassRequest;
use DuxDucisArsen\Commons\Models\IdentificationClass;

class IdentificationClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows  = IdentificationClass::all()->toJson();
        return response()->json($rows, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdentificationClassRequest $request)
    {
        IdentificationClass::create($request->validated());

        return response()->json(['message' => 'Insertado'], 201);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \DuxDucisArsen\Commons\Models\IdentificationClass  $identificationClass
     * @return \Illuminate\Http\Response
     */
    public function update(IdentificationClassRequest $request, IdentificationClass $identificationClass)
    {
        $identificationClass->update($request->validated());

        return response()->json(['message' => 'Actualizado'], 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \DuxDucisArsen\Commons\Models\IdentificationClass  $identificationClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(IdentificationClass $identificationClass)
    {
        $identificationClass->delete();

        return response()->json(['message' => 'ok'], 204);
    }
}
