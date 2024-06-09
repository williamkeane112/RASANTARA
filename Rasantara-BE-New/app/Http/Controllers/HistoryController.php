<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
            $validasi = $request->validate([
                'user_id' => 'required',
                'makanan_id' => 'required',
            ]);
            $cekData= History::where('user_id', $validasi['user_id'])
                                       ->where('makanan_id', $validasi['makanan_id'])
                                       ->first();
        
            if (!$cekData) {
                $data = History::create([
                    'user_id' =>  $validasi['user_id'],
                    'makanan_id' => $validasi['makanan_id']
                ]);
                return response()->json(['message' => 'ADD History Success']);
            } else {
             
                $cekData->touch(); 
                return response()->json(['message' => 'History Updated']);
            }
        }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $itemsPerPage = 5;
        $page = request()->input('page', 1);
        $offset = ($page - 1) * $itemsPerPage;
        $filter = request()->input('filter', 'terbaru'); 
    
        $query = History::with('makanan')->where('user_id', $id);
        if ($filter === 'terbaru') {
            $query->orderBy('updated_at', 'desc');
        } else if ($filter === 'terlama') {
            $query->orderBy('updated_at', 'asc');
        }
        $total = $query->count();
        $data = $query->limit($itemsPerPage)->offset($offset)->get();
    
        return response()->json([
            'total' => $total,
            'data' => $data,
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        DB::table('histories')->truncate();

        return response()->json(['message' => 'All history records deleted successfully.'], 200);
    }
}
