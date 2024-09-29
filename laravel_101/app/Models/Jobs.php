<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Jobs extends Model
{
    use HasFactory;

    protected $table = 'jobs_listing';

    protected $fillable = ['title', 'salary'];
}
