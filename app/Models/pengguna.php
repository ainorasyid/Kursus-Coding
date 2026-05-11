<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// #[Fillable(['users_id','firstname', 'lastname', 'fullname'])]
class Pengguna extends Model
{

    protected $table = 'pengguna';

    protected $fillable = [
        'users_id',
        'firstname',
        'lastname',
        'fullname'
    ];

    /** @use HasFactory<\Database\Factories\PenggunaFactory> */
    use HasFactory;

    
}
