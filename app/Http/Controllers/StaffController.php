<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function login(Request $request)
    {
        $data = user::where('mobile', $request->mobile)->first();
        return redirect('page.staff',  compact('data'));
    }
}
