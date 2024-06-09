<?php

namespace App\Http\Controllers;

use App\Models\BookMark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
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
        $data = BookMark::create([
            'user_id' =>  $validasi['user_id'],
            'makanan_id' => $validasi['makanan_id']
        ]);
        return response()->json(['massage','ADD Bookmark Success']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $query = request()->input('query');
    
        // Build the query
        $bookmarks = Bookmark::with('makanan')->where('user_id', $id);
    
        if ($query) {
            $bookmarks->whereHas('makanan', function ($q) use ($query) {
                $q->where('makanan', 'LIKE', "%{$query}%");
            });
        }
        $total = $bookmarks->count();
        $result = $bookmarks->limit(5)->offset((request()->input('page', 1) - 1) * 5)->get();
    
        return response()->json([
            'total' => $total,
            'data' => $result
        ]);
    }
    public function getBookmarks($user_id)
    {
        $bookmarks = Bookmark::with('makanan')->where('user_id', $user_id)->get();
        return response()->json($bookmarks);
    }
    
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookMark $bookMark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookMark $bookMark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = BookMark::where('id', $id)->delete();
        return response()->json(['message' => 'Bookmark deleted successfully'], 200);
    }
}
