<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Http\Requests\StoreGuideRequest;
use App\Http\Requests\UpdateGuideRequest;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtenir totes les guies
        $guides = Guide::all();
        return view('tutorials.index', compact('guides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guide $tutorial)
    {
        return view('tutorials.show', compact('tutorial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guide $guide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuideRequest $request, Guide $guide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guide $guide)
    {
        //
    }

    // Traduïr títol i passos de la guia d'anglès a català i guardar-ho a la taula guides
    public static function traduirGuia(Guide $guia) {
        $tr = new GoogleTranslate('ca'); // Defineix el català com a idioma de destí
    
        // Traduir el títol de la guia
        if (!empty($guia->title)) {
            $guia->title = $tr->translate($guia->title);
        }
    
        $steps = $guia->steps;
    
        foreach ($steps as &$pas) {
            // Traduir el títol del pas si existeix i no està buit
            if (!empty($pas['title'])) {
                $pas['title'] = $tr->translate($pas['title']);
            }
    
            // Traduir els textos dins de 'lines'
            foreach ($pas['lines'] as &$linia) {
                if (!empty($linia['text_raw'])) {
                    $linia['text_raw'] = $tr->translate($linia['text_raw']);
                }
                if (!empty($linia['text_rendered'])) {
                    $linia['text_rendered'] = $tr->translate($linia['text_rendered']);
                }
            }
        }
    
        // Assignar els passos traduïts i desar la guia
        $guia->steps = $steps;
        $guia->save();
    }
}
