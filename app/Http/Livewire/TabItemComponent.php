<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TabItemComponent extends Component
{
    public $tabs = [];
    public $selected = 0;
    public function mount($tabs)
    {
        $this->tabs = $tabs;
    }
    public function select($tab)
    {
        $this->selected =  $this->tabs[$tab];
    }
    public function render()
    {
        return view('livewire.tab-item-component');
    }
}
