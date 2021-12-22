<?php

namespace App\Http\Controllers;

use App\Http\Resources\PoslovnicaResource;
use App\Models\Poslovnica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PoslovnicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poslovnice = Poslovnica::all();
        return PoslovnicaResource::collection($poslovnice);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'grad' => 'required|string',
            'adresa' => 'required|string',
            'kompanija_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Doslo je do greske!', $validator->errors()]);
        }

        $poslovnica = Poslovnica::create([
            'grad' => $request->grad,
            'adresa' => $request->adresa,
            'kompanija_id' => $request->kompanija_id
        ]);

        return response()->json(['Poslovnica je uspesno sacuvana!.', new PoslovnicaResource($poslovnica)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poslovnica  $poslovnica
     * @return \Illuminate\Http\Response
     */
    public function show(Poslovnica $poslovnica)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poslovnica  $poslovnica
     * @return \Illuminate\Http\Response
     */
    public function edit(Poslovnica $poslovnica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poslovnica  $poslovnica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poslovnica $poslovnica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poslovnica  $poslovnica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poslovnica $poslovnica)
    {
        $poslovnica->delete();
        return response()->json(['Poslovnica je obrisana!', new PoslovnicaResource($poslovnica)]);
    }
}
