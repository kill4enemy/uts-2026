<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    'label',
    'name',
    'description',
    'photo',
    'stat_project',
    'stat_major',
    'stat_university',
    ];  
}
