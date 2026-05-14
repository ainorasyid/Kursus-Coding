<?php

namespace App\Models;
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

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /** @use HasFactory<\Database\Factories\PenggunaFactory> */
    use HasFactory;

    
}
