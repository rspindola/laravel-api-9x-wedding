<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string, bool>
     */
    protected $fillable = [
        'origin',
        'rating',
        'treatment',
        'name',
        'escorts',
        'total',
        'men',
        'women',
        'children',
        'save_the_date',
        'confirmation',
        'invite',
        'gift',
    ];
}
