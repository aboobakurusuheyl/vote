<?php

use App\Models\Course;
use App\Models\File;
use App\Models\Gallery;
use App\Models\Institute;
use App\Models\Post;
use App\Models\QuickLinks;
use App\Models\Staff;
use App\Models\User;
use App\Nova\Institute as NovaInstitute;
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

Route::get('/', function () {
    //dd(Auth::user()->getAllPermissions()->pluck('name')->toArray());
    //$latestposts = Post::orderBy('id', 'desc')->take(3)->get();
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::post('logincheck', function (Request $request) {

    $rules = array(
        'mobile' => 'required|min:7|max:7',
    );

    $v = Validator::make($request->all(), $rules);

    if ($v->fails()) {
       
        // return to login page with errors
        return Redirect::to('login')
            ->withInput()
            ->withErrors($v->errors());
    } else {
        if ($request->mobile != null ){
            dd('test');
            $user = Staff::where('mobile', $request->mobile)->first();
            if ($user != null) {
                $userdata = array(
                    'mobile' => $request->mobile,
                );
        
                Redis::set('user:'.$request->mobile, [
                    'login_date' =>now()
                ]);
                return Redirect::to('staff');
            } else {
                return Redirect::to('login')
                    ->withInput()
                    ->withErrors(['mobile' => 'Mobile number not registered']);
            }
        } else {
            return Redirect::to('login')
                ->withInput()
                ->withErrors(['mobile' => 'Mobile number is required']);
        }
        
        
    }
});


Route::get('/staff', function () {
    $staff = Staff::all();
    return view('page.staff', compact('staff'));
});



Route::get('/blacklisted', function () {
    //$institute = Institute::where('blacklisted', 1)->get();
    return view('page.blacklisted');
});






Route::get('/contact', function () {
    //dd(nova_get_pages_structure());
    return view('page.contact');
});
