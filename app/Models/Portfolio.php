<?php

namespace App\Models;
use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
   use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar'
    ];
}
