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
        /* Validazione */

        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'thumb' => 'required',
                'price' => 'required',
                'series' => 'required',
                'sale_date' => 'required',
                'type' => 'required',
            ],
            [
                'title.required' => 'inserire un titolo valido',
                'description.required' => 'inserire una didascalia',
                'thumb.required' => 'inserire un URL immagine',
                'price.required' => 'inserire un prezzo',
                'series.required' => 'inserire ALBO',
                'sale_date.required' => 'inserire data',
                'type.required' => 'inserire una tipologia di articolo',
            ]
        );

        $form_data = $request->all();

        $new_fumetto = new Fumetto();
        // $new_fumetto->title = $form_data['title'];
        // $new_fumetto->slug = Fumetto::generateSlug($new_fumetto->title);
        // $new_fumetto->description = $form_data['description'];
        // $new_fumetto->thumb = $form_data['thumb'];
        // $new_fumetto->price = $form_data['price'];
        // $new_fumetto->series = $form_data['series'];
        // $new_fumetto->sale_date = $form_data['sale_date'];
        // $new_fumetto->type = $form_data['type'];
        $form_data['slug'] = Fumetto::generateSlug($form_data['title']);
        $new_fumetto->fill($form_data);
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
    public function edit(Fumetto $fumetti)
    {

        return view('fumetti.edit', compact('fumetti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $fumetti)
    {

        $form_data = $request->all();

        if ($form_data['title'] != $fumetti->title) {
            $form_data['slug'] = Fumetto::generateSlug($form_data['title']);
        } else {
            $form_data['slug'] = $fumetti->slug;
        }

        $fumetti->update($form_data);

        return redirect()->route('fumetti.show', $fumetti);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $fumetti)
    {
        $fumetti->delete();

        return redirect()->route('fumetti.index')->with('deleted', "$fumetti->title eliminato correttamente");
    }
}
