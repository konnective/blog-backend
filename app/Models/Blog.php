<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'tblblog';
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'author',
        'img',
        'slug',
        'topic',

    ];
}
