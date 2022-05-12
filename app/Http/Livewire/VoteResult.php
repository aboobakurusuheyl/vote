<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use Gate;

class VoteResult extends Component
{
    public function render()
    {
        if (Gate::denies('viewResult')) {
            abort(403, 'Nope');
        }

        $maleResults = DB::table('users')
        ->whereType('male')
            ->join('staff_votes', 'users.id', '=', 'staff_votes.staff_id')
            ->groupBy('staff_id')
            ->select('users.name', 'users.image', DB::raw('count(user_id) as count'))
            ->orderByDesc('count')
            ->take(5)->get();

        $femaleResults = DB::table('users')
        ->whereType('female')
            ->join('staff_votes', 'users.id', '=', 'staff_votes.staff_id')
            ->groupBy('staff_id')
            ->select('users.name', 'users.image', DB::raw('count(user_id) as count'))
            ->orderByDesc('count')
            ->take(5)->get();
        return view('livewire.vote-result', [
            'maleResults'=>$maleResults,
            'femaleResults'=>$femaleResults
        ])->layout('layout.master');
    }
}
