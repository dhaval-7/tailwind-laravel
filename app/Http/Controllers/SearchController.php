<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request, $q)
    {

        $results = User::where('name', 'like', '%' . $q . '%')->limit(10)->get();

        return response()->json($results);
    }
}
