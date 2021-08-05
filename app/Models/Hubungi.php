<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hubungi extends Model
{
    protected $table = "hubungi";
    protected $fillable = ['nama', 'email', 'no_tlp', 'subjek', 'pesan'];

   
}
