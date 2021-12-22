<?php

namespace App\Http\Controllers;

use App\Http\Resources\KompanijaResource;
use App\Models\Kompanija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KompanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompanije = Kompanija::all();
        return KompanijaResource::collection($kompanije);
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
            'naziv' => 'required|string',
            'maticni_broj' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Doslo je do greske!', $validator->errors()]);
        }

        $kompanija = Kompanija::create([
            'naziv' => $request->naziv,
            'maticni_broj' => $request->maticni_broj,
        ]);

        return response()->json(['Kompanija je uspesno sacuvana!.', new KompanijaResource($kompanija)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kompanija  $kompanija
     * @return \Illuminate\Http\Response
     */
    public function show(Kompanija $kompanija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kompanija  $kompanija
     * @return \Illuminate\Http\Response
     */
    public function edit(Kompanija $kompanija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kompanija  $kompanija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kompanija $kompanija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kompanija  $kompanija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kompanija $kompanija)
    {
        $kompanija->delete();
        return response()->json(['Kompanija je obrisana!', new KompanijaResource($kompanija)]);
    }
}
