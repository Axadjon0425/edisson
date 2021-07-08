<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory; 
    protected $table = 'clients';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'company',
        'service_id',
        'created_at'
    ];
}
