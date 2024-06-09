<?php

namespace App\Http\Controllers;

use App\Models\Makanan as ModelsMakanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query1 = $request->input('query1');
        $query2 = $request->input('query2');
    
        $query = ModelsMakanan::where('daerah', 'LIKE', "%{$query1}%");
    
        if ($query2) {
            $query->where('makanan', 'LIKE', "%{$query2}%");
        }
    
        $data = $query->get();
    
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = ModelsMakanan::with('detail')->find($id);
        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($data);
    }
    
}
