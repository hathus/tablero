<?php

namespace App\Http\Controllers;

use App\Models\Compromise;
use Illuminate\Http\Request;

class CompromiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Compromise $compromise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compromise $compromise)
    {
        return view('compromises.edit', [
            'compromise' => $compromise,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compromise $compromise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compromise $compromise)
    {
        //
    }
}
