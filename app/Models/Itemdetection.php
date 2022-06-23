<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemdetection extends Model
{
    protected $table = 'itemdetection';
    public $timestamps = false;

    protected $fillable = [
        's', 'station'
    ];
}
