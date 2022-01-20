<?php

namespace App\Http\Livewire;

use App\Models\Institute;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class BlacklistedComponent extends Component
{

    public Institute $institute;
    public $search;
    

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->institutes = Institute::where('blacklisted', 1)
            ->where('name', 'like',  $search)->get();
        return view('livewire.blacklisted-component');
    }
}
