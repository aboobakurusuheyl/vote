<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;

class FileGroupComponent extends Component
{
    public $type = null;
    public $filegroup = [];
    public $files = [];
    public $selected_id = 0;
    public function mount($type)
    {
        //dd($type['data'], File::where('page', $type['data']['filegroup'][0]->id)->get());
        $this->selected_id = $type['data']['filegroup'][0]->id;
        $this->files = File::where('page', $type['data']['filegroup'][0]->id)->get();
        $this->type = collect($type['data'])->toArray();
        foreach ($this->type['filegroup'] as $group) {

            $this->filegroup[] =  (array) $group;
        }
        //dd($this->filegroup);
        $this->type['filegroup'] = $this->filegroup;
        //$this->type['filegroup'] =
        //dd($this->type);
    }

    public function select($id)
    {
        //    dd($id, File::where('page', $id)->get(), $this->type);
        $this->selected_id = $id;
        $this->files = File::where('page', $id)->get();
    }

    public function render()
    {
        return view('livewire.file-group-component');
    }
}
