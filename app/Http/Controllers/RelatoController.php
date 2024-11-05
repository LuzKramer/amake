<?php

namespace App\Http\Controllers;
use App\Models\Relato;

use Illuminate\Http\Request;

class RelatoController extends Controller
{

    public function index()
    {

        return view('relatos', ['relatos' => Relato::all()]);
    }

    public function create()
    {
        return view('relatoadd');
    }

    public function store(Request $request)
    {
        $relato =  new Relato();
        $relato->texto = $request->input('texto');
        $relato->save();
        return redirect('/relatos');
    }
}
