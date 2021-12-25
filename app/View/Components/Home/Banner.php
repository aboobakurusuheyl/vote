<?php

namespace App\View\Components\Home;

use App\Models\Hero;
use Illuminate\View\Component;

class Banner extends Component
{

    public $banners = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->banners = Hero::get();
        // dd($this->banners);
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.banner');
    }
}
