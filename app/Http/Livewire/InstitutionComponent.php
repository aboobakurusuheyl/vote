<?php

namespace App\Http\Livewire;

use App\Models\Institute;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class InstitutionComponent extends Component
{

    public Institute $institute;
    public $search;

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
