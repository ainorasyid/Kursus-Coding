<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['soal', 'kursus_id', 'pilihan_a', 'pilihan_b', 'pilihan_c', 'pilihan_d', 'jawaban_benar'])]
class Soal extends Model
{
    protected $table = 'soal';

    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }
    
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
}
