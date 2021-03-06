<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function index(Request $request)
    {
        return $institutes = Institute::all();
    }

    public function show(Institute $institute)
    {
        return response()->json($institute->load('mnqf', 'institute'));
    }

}
