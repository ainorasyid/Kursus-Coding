<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['soal', 'quiz_id', 'pilihan_a', 'pilihan_b', 'pilihan_c', 'pilihan_d', 'jawaban_benar'])]
class Soal extends Model
{
    protected $table = 'soal';

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
