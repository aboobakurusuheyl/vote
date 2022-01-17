<?php

namespace App\Http\Livewire;

use App\Models\institute;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class BlacklistedComponent extends Component
{

    public $search;
    public $institutes;

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->institutes = institute::where('blacklisted', 1)
            ->where('name', 'like',  $search)->get();
        return view('livewire.blacklisted-component');
    }
}
