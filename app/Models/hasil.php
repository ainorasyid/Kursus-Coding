<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['pengguna_id', 'kursus_id', 'nilai'])]
class Hasil extends Model
{
    protected $table = 'hasil';

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }
}
