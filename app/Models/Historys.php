<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historys extends Model
{
    protected $table = "historys";
    protected $fillable = ['keterangan', 'deskripsi'];

   
}
