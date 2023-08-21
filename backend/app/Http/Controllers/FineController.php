<?php

namespace App\Http\Controllers;

use App\Models\Fine;
use App\Http\Requests\StoreFineRequest;
use App\Http\Requests\UpdateFineRequest;

class FineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fines = Fine::all();
        return response()->json(['success' => true, 'fines' => $fines]);
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
    public function store(StoreFineRequest $request)
    {
        //
        $fine = Fine::create($request->validated());
        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Fine $fine)
    {
        //
        return response()->json(['success' => true, 'fine' => $fine]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fine $fine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFineRequest $request, Fine $fine)
    {
        //
        $fine = Fine::create($request->validated());
        return response()->json(['success' => true, 'fine' => $fine]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fine $fine)
    {
        //
        $fine->delete();
        return response()->json(['success' => true]);
    }
}
