<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyword;

class KeywordController extends Controller
{
    //
    public function index() {
        return response()->json(Keyword::orderBy('name')->get());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:100|unique:keywords,name',
        ]);
        $keyword = Keyword::create($data);
        return response()->json($keyword, 201);
    }
}
