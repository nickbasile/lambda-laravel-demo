<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'bio',
        'portfolio_url',
        'github_url',
        'profile_photo_url',
    ];
}
