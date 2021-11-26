<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleType extends Model
{
    use HasFactory;

    public function peoples()
    {
        return $this->hasMany(People::class);
    }
}
