<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffVote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'staff_id',
        'type',
    ];
}
