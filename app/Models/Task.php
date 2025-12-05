<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Allowed fields
    protected $fillable = [
        'title',
        'description',
        'is_done',
        'due_date',
    ];
    // Become is_done to boolean
    protected $casts = [
        'is_done' => 'boolean',
        'due_date' => 'date',
    ];
}
