<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $publishers = Publisher::all();
        return response()->json(['success' => true, 'publisher' => $publishers]);
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
    public function store(StorePublisherRequest $request)
    {
        //
        $publisher = Publisher::create($request->validated());
        return response()->json(['success' => true, 'publisher' => $publisher]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        //
        return response()->json(['success' => true, 'publisher' => $publisher]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublisherRequest $request, Publisher $publisher)
    {
        //
        $publisher->update($request->validated());

        return response()->json([
            'success' => true,
            'publisher' => $publisher
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        //
        $publisher->delete();
        return response()->json(['success' => true]);
    }
}
