<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['judul'])]
class Quiz extends Model
{
    protected $table = 'quiz';
}
