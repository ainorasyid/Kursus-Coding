<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['pengguna_id', 'soal_id', 'jawaban'])]
class Jawaban extends Model
{
    protected $table = 'jawaban';
}
