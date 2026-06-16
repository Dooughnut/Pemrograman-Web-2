<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['judul', 'penulis', 'penerbit', 'tahun_terbit'])]
class Buku extends Model
{
    protected $table = 'buku';
    public $timestamps = false;
}
