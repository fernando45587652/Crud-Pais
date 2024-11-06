<?php

namespace App\Http\Controllers;

use App\Models\Contry;
use Illuminate\Http\Request;

class ContryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('contry.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('contry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contry $contry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contry $contry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contry $contry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contry $contry)
    {
        //
    }
}