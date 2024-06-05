<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $data = makanan::where('daerah','LIKE',"%{$query}%")->get();
        return response()->json($data); 
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
    public function show(makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(makanan $makanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, makanan $makanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(makanan $makanan)
    {
        //
    }
}
