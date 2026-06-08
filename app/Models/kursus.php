<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['judul', 'deskripsi'])]
class Kursus extends Model
{
    protected $table = 'kursus';

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }

    public function soal()
    {
        return $this->hasMany(Soal::class);
    }

    public function hasil()
    {
        return $this->hasMany(Hasil::class);
    }
}
