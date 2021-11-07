<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public $items = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            ['name' => 'MQA', 'href' => '/mqa'],
            ['name' => 'MNQF', 'href' => '/mnqf'],
            ['name' => 'Approved Institution', 'href' => '/approved-institutions'],
            ['name' => 'Download', 'href' => '/mqa']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}
