<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function mnqf()
    {
        return $this->belongsTo(Mnqf::class);
    }

    public function institute()
    {
        return $this->belongsTo(institute::class);
    }
}
