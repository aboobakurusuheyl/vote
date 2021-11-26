<?php

namespace App\View\Components;

use Illuminate\View\Component;

class People extends Component
{
    public $people;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($people)
    {
        $this->people = $people;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.people');
    }
}
