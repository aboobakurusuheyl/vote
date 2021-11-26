<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;


    public function peopleType()
    {
        return $this->belongsTo(PeopleType::class);
    }
}
