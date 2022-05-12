<?php

use App\Http\Livewire\StaffVote as StaffVoteView;
use App\Http\Livewire\VoteResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('login', function (Request $request) {
    $rules = array(
        'mobile' => 'required|min:7|max:7',
        'password' => 'required|min:4|max:4',
    );

    $v = Validator::make($request->all(), $rules);

    if ($v->fails()) {

        // return to login page with errors
        return Redirect::to('login')
            ->withInput()
            ->withErrors($v->errors());
    } else {
        if (Auth::attempt(['mobile' => $request->mobile, 'password' =>  $request->password])) {
            return Redirect::to('/');
        }

        return Redirect::to('login')
        ->withInput()
        ->withErrors($v->errors());
    }
});

Route::get('/', StaffVoteView::class)->middleware('auth');

Route::get('/results', VoteResult::class)->middleware('auth');

Route::get('/blacklisted', function () {
    //$institute = Institute::where('blacklisted', 1)->get();
    return view('page.blacklisted');
});

Route::get('/contact', function () {
    //dd(nova_get_pages_structure());
    return view('page.contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
