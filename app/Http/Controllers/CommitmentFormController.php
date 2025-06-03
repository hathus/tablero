<?php

namespace App\Http\Controllers;

use App\Models\CommitmentForm;
use Illuminate\Http\Request;

class CommitmentFormController extends Controller
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
    public function show(CommitmentForm $commitmentForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommitmentForm $commitmentForm)
    {
        return view('commitment_form.edit', ['commitmentForm' => $commitmentForm]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommitmentForm $commitmentForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommitmentForm $commitmentForm)
    {
        //
    }
}
