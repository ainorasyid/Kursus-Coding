<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['pengguna_id', 'quiz_id', 'nilai'])]
class Hasil extends Model
{
    protected $table = 'hasil';
}
