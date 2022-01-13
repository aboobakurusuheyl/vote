<?php

namespace App\Http\Livewire;

use App\Models\institute;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class InstitutionComponent extends Component
{

    public $search;
    public $institutes;


    // public function mount()
    // {
    //     $this->institutes = institute::where('blacklisted', 0)->get();
    //     // $newinstitutes = DB::table('institutes')->where('blacklisted', 0)->get();
    //     //$this->institutes = $institutes;
    //     //dd($newinstitutes);
    //     //dd();
    // }

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->institutes = institute::where('blacklisted', 0)
            ->where('name', 'like',  $search)->get();
        return view('livewire.institution-component');
    }
}
