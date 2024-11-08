<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhistleblowingModel extends Model
{
    use HasFactory;

    protected $table = "whistle";

    protected $fillable = [
        'pic',
        'cabang',
        'perihal',
        'file',
    ];
}
