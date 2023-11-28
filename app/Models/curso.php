<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso',
    ];

    public function cursos() {
        return $this->hasMany(Curso::class);
    }
}
