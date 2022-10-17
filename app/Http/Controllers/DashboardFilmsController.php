<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Cast;
use App\Models\Comment;
use App\Models\Film;

class DashboardFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::get();
        return view('dashboard.films.index', ['filmsList' => $films]);

        // $films = Film::all();
        // return view('dashboard.films.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.films.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function show(Films $films, $id)
    {
        return view ('dashboard.films.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function edit(Films $films)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Films $films)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function destroy(Films $films)
    {

    }

}
