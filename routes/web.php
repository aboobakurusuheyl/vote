<?php

use App\Models\Course;
use App\Models\File;
use App\Models\institute;
use App\Models\Post;
use App\Models\QuickLinks;
use App\Nova\Institute as NovaInstitute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Console;

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

Route::get('/mqa', function () {
    $data = nova_get_page(1);
    //dd(nova_get_pages_structure());
    return view('page.maq',  compact('data'));
});


// Route::get('/mnqf', function () {
//     $data = nova_get_page(2);
//     return view('page.mnqf', compact('data'));
// });

Route::get('/approved-institutions', function () {
    //$institutes = Institute::all();
    return view('page.approved-institutions');
});

//Route::get('/approved-institutions/{id}', 'InstituteController@index');

Route::get('/approved-institutions/{id}', function ($id) {

    $institute = Institute::where('id', $id)->first();
    return view('page.institutions-deatail', compact('institute'));
});

Route::get('/course-detail/{id}', function ($id) {

    $course = Course::where('id', $id)->with('institute', 'mnqf')->first();
    return view('page.course-detail', compact('course'));
});

Route::get('/blacklisted', function () {
    //$institute = Institute::where('blacklisted', 1)->get();
    return view('page.blacklisted');
});


Route::get('/contact', function () {
    //dd(nova_get_pages_structure());
    return view('page.contact');
});

Route::get('/quick-links', function () {
    $links = QuickLinks::all();
    return view('page.links', compact('links'));
});
// Route::get('/download', function () {
//     //dd(nova_get_pages_structure());
//     return view('page.file-group');
// });

Route::get('/{slug}/{id}', function ($slug, $id) {
    //
    $data = nova_get_page_by_slug($slug);

    if ($data['template'] === "post-list") {
        $post =  Post::find($id);
        return view('page.post-detail', compact('data', 'post'));
    }
})->where(['slug' => '^((?!backend|nova-api|nova-vendor|storage).)*$']);



Route::get('/{slug}', function ($slug) {
    //dd(nova_get_pages_structure(), nova_get_page_by_slug($slug));
    $data = nova_get_page_by_slug($slug);

    if ($data['template'] === 'post-list') {
        $posts = Post::where('page', $data['id'])->get();
        //dd($posts[0]->getMedia('feature_image')->first()->getFullUrl());
        return view($data['view'], compact('data', 'posts'));
    } else if ($data['template'] === 'file-list') {
        $files = File::where('page', $data['id'])->get();

        //dd($files[0]->getMedia('attachment')->first()->getFullUrl(), $files);
        return view($data['view'], compact('data', 'files'));
    } else if ($data['template'] === "file-group") {
        return view($data['view'], compact('data'));
        dd($data);
    }

    return view($data['view'], compact('data'));
})->where(['slug' => '^((?!backend|nova-api|nova-vendor|storage).)*$']);

// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link');
// });
