<?php

namespace App\View\Components\Home;

use App\Models\Post;
use Illuminate\View\Component;

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
        //dd($items);
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
