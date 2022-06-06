<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalData extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'phone',
        'dob',
        'created_at',
        'updated_at',
    ];
}
