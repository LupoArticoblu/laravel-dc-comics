<?php

namespace App\Http\Controllers;

use App\Models\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Fumetto::all();
        return view('fumetti.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_fumetto = new Fumetto();
        $new_fumetto->title = $form_data['title'];
        $new_fumetto->slug = Fumetto::generateSlug($new_fumetto->title);
        $new_fumetto->description = $form_data['description'];
        $new_fumetto->thumb = $form_data['thumb'];
        $new_fumetto->price = $form_data['price'];
        $new_fumetto->series = $form_data['series'];
        $new_fumetto->sale_date = $form_data['sale_date'];
        $new_fumetto->type = $form_data['type'];
        $new_fumetto->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Fumetto::findOrFail($id);

        return view('fumetti.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function edit(Fumetto $fumetto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $fumetto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $fumetto)
    {
        //
    }
}
