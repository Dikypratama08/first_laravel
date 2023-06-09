<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'user_detail';

    protected $fillable = [
        'user_id',
        'nama_jabatan',
        'tunjangan',
    ];
}

