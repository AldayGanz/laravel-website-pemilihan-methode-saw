<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Benang extends Model
{
    use HasFactory;

    protected $table = 'alternatif';
    public $timestamps = FALSE;
    
}
