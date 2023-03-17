<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PokemonRequest;
use Illuminate\Support\Facades\Session;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pokemons.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PokemonRequest $request)
    {
        $pokemon = [
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $request->image,
        ];

        Session::push('pokemons.' . $request->title, $pokemon);
        return redirect('pokemons/' . $request->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $allPokemonsSession = session()->get('pokemons');
        if (isset($allPokemonsSession[$title])) {

            $pokemon = end($allPokemonsSession[$title]);
            return view('pokemons.show', compact('pokemon'));
        }

        abort(404);
    }
}
