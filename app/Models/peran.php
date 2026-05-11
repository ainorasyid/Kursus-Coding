<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nama_peran'])]
class Peran extends Model
{
    protected $table = 'peran';
}
