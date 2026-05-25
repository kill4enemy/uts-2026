<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectReport extends Model
{
    protected $fillable = [
        'type',
        'title',
        'description',
        'status',
        'progress_percentage',
    ];
}
