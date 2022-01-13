<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use App\Models\File;

class LatestCirculars extends Component
{
    public $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = File::where('page', 8)->orderBy('id', 'desc')->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.latest-circulars');
    }
}
