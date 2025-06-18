<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasLikes;

class Post extends Model
{
    use HasFactory, HasLikes;

    protected $fillable = ['title', 'content', 'user_id'];
}
