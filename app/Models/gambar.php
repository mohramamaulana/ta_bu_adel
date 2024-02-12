<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    use HasFactory;

    protected $table = 'gambars';
    protected $fillable = ['judul' , 'image' , 'nama' , 'deskripsi' , 'release_date'];
}
