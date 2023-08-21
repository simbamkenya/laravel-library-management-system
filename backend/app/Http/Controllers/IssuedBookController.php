<?php

namespace App\Http\Controllers;

use App\Models\IssuedBook;
use App\Http\Requests\StoreIssuedBookRequest;
use App\Http\Requests\UpdateIssuedBookRequest;

class IssuedBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $issued_books = IssuedBook::all();
        return response()->json(['success' => true, 'issued_books' => $issued_books]);
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
    public function store(StoreIssuedBookRequest $request)
    {
        //
        $issued_books = IssuedBook::create($request->validated());
        return response()->json(['success' => true, 'issued_books' => $issued_books]);
    }

    /**
     * Display the specified resource.
     */
    public function show(IssuedBook $issuedBook)
    {
        //
        return response()->json(['success' => true, 'issued_book' => $issuedBook]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IssuedBook $issuedBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssuedBookRequest $request, IssuedBook $issuedBook)
    {
        //
        $issued_book = $issuedBook->update($request->validated());
        return response()->json(['success' => true, 'issued_books' => $issued_book]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IssuedBook $issuedBook)
    {
        //
        $issuedBook->delete();
        return response()->json(['success' => true]);
    }
}
