<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;

    protected $table = 'shop';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'text',
        'price',
        'photo',
        'created_date'
    ];
}
