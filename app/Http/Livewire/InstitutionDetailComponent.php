<?php

namespace App\Http\Livewire;

use App\Models\Mnqf;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InstitutionDetailComponent extends Component
{
    public $institute;
    public $courses;
    public $levels = [];
    public $current_level = 0;
    protected $queryString = ['current_level'];
    public function mount($institute)
    {
        $this->institute = $institute;
        //dd();
        //dd();
        $this->getLevels();
        if (count($this->levels) > 0) {
            if (isset($this->current_level) && $this->current_level > 0) {
                $this->selectLevel($this->current_level);
            } else {
                $this->selectLevel($this->levels[0]->level);
            }
        }
    }

    public function getLevels()
    {

        $this->levels = DB::table('courses')
            ->join('mnqfs', 'courses.mnqf_id', '=', 'mnqfs.id')
            ->selectRaw('mnqfs.`level`, COUNT(courses.mnqf_id) as total')
            ->where('courses.institute_id', $this->institute->id)
            ->groupBy('mnqfs.level')
            ->get();
        //dd($this->levels);
    }

    public function selectLevel($level)
    {
        $this->current_level = $level;
        $this->courses =  $this->institute->courses->whereIn('mnqf_id', Mnqf::select('id')->where('level', $level)->get()->pluck('id'));
        //   $this->getLevels();
    }

    public function render()
    {
        $this->getLevels();
        return view('livewire.institution-detail-component');
    }
}
