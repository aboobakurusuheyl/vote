<?php

namespace Laravel\Nova\Http\Controllers;
//namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
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
        return $institute->with('courses');
        //return response()->json($institute->load('courses'));
    }

}