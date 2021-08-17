<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopUser extends Model
{
    use HasFactory;
    protected $table = 'shopuser';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'firstname',
        'lastname',
        'phone',
        'price',
        'status',
        'created_at'
    ];
}
