<?php

namespace App\View\Components\Home;

use App\Models\Post;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class LatestNews extends Component
{
    public $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = Post::where('page', 5)->orderBy('id', 'desc')->take(3)->get();
        // $imageurl = "test";
        // foreach ($posts as $item)
        // {
            //Storage::url($user->profile_photo);
            // $imageurl = Storage::url($posts->featured_image);
            //$posts['featured_image'] = $imageurl;

        // }
        // $this->items = $posts;
        // Storage::get($user->profile_photo);
        // dd($this->items);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.latest-news');
    }
}
