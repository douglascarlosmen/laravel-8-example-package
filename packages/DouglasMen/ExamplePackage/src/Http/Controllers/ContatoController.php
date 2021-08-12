<?php

namespace DouglasMen\ExamplePackage\Http\Controllers;

use App\Http\Controllers\Controller;
use DouglasMen\ExamplePackage\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller {
    public function index()
    {
        return view('example-package::contato');
    }

    public function store(Request $request)
    {
        Contato::create($request->all());
        return redirect()->route('form-contato');
    }
}
