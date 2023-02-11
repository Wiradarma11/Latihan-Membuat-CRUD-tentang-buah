<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buah extends Model
{
    use HasFactory;
    protected $fillable = ['nama','gambar'];
    protected $table = 'buah';
    public $timestamps = false;
}
