<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oznam extends Model
{
    use HasFactory;

    protected $table = 'oznam';
    protected $fillable = [
        'nazov',
        'obsah',
        'autor'
    ];

    public function komentare()
    {
        return $this->hasMany(Komentar::class, 'id_prispevku');
    }

}
