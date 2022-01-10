<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class institute extends Model
{
    use HasFactory;

    protected $with = ['courses'];
    
    public function courses()
    {
        return $this->HasMany(Course::class);
    }
}
