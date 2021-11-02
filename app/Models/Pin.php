<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    use HasFactory;

    /**
     * The attributes that are not mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
