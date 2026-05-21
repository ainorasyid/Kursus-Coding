<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['judul', 'kontent'])]
class Materi extends Model
{
    protected $table = 'materi';

    public function kursus()
{
    return $this->belongsTo(Kursus::class);
}
}
