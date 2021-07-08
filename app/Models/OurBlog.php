<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurBlog extends Model
{
    use HasFactory;
    protected $table = 'our_blog';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'text',
        'photo',
        'created_at'
    ];
}
