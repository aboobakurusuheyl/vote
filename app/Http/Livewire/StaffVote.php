<?php

namespace App\Http\Livewire;

use App\Models\StaffVote as StaffVoteModel;
use Livewire\Component;
use Auth;
use DB;

class StaffVote extends Component
{
    public $type='male';

    public $confirmingMaleVote=false;
    public $confirmingFemaleVote=false;

    public $selectedMaleStaff=null;
    public $selectedFemaleStaff=null;

    public function mount()
    {
        $this->check();
    }

    public function check()
    {
        if (StaffVoteModel::whereType('male')->where('user_id', Auth::id())->exists()) {
            if (StaffVoteModel::whereType('female')->where('user_id', Auth::id())->exists()) {
                $this->type='result';
            } else {
                $this->type='female';
            }
        } else {
            $this->type='male';
        }
    }



    public function selectStaff($user, $type)
    {
        if ($type=='male') {
            $this->confirmingMaleVote=true;
            $this->selectedMaleStaff=$user;
        } else {
            $this->confirmingFemaleVote=true;
            $this->selectedFemaleStaff=$user;
        }
    }


    public function voteMale()
    {
        StaffVoteModel::create([
            'user_id' => Auth::id(),
            'staff_id' => $this->selectedMaleStaff['id'],
            'type' => 'male'
        ]);
        $this->confirmingMaleVote=false;
        $this->check();
        // $this->selectedStaff=$user;
    }
    public function voteFemale()
    {
        StaffVoteModel::create([
            'user_id' => Auth::id(),
            'staff_id' => $this->selectedFemaleStaff['id'],
            'type' => 'female'
        ]);
        $this->confirmingFemaleVote=false;
        $this->check();
        // $this->selectedStaff=$user;
    }

    public function render()
    {
        $maleStaff=\App\Models\User::where('gender', 'male')->get();
        $femaleStaff=\App\Models\User::where('gender', 'female')->get();



        return view('livewire.staff-vote', [
            'maleStaffs'=>$maleStaff,
            'femaleStaffs'=>$femaleStaff,
        ])->layout('layout.master');
    }
}
