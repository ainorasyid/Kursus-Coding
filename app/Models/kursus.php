<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['judul', 'deskripsi', 'video'])]
class Kursus extends Model
{
    protected $table = 'kursus';
    public function materi()
{
    return $this->hasMany(Materi::class);
}

public function quiz()
{
    return $this->hasMany(Quiz::class);
}
}
