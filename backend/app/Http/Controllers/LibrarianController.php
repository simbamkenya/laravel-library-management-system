<?php

namespace App\Http\Controllers;

use App\Models\Librarian;
use App\Http\Requests\StoreLibrarianRequest;
use App\Http\Requests\UpdateLibrarianRequest;

class LibrarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $librarians = Librarian::all();
        return response()->json(['success' => true, 'librarian' => $librarians]);
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
    public function store(StoreLibrarianRequest $request)
    {
        //
        $librarian = Librarian::create($request->validated());
        return response()->json(['success' => true, 'librarian' => $librarian]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Librarian $librarian)
    {
        //
        return response()->json(['success' => true, 'librarian' => $librarian]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Librarian $librarian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibrarianRequest $request, Librarian $librarian)
    {
        //
        $updated_libraian = $librarian->update($request->validated());
        return response()->json(['success' => true, 'librarian' => $updated_libraian]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Librarian $librarian)
    {
        //
        $librarian->delete();
        return response()->json(['success' => true]);
    }
}
