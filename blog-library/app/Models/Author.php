<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table='authors';
    use HasFactory;

    public function books(){
        return $this->hasMany(Book::class);
    }

    protected $fillable = [
        'name and surname',
        'born at',
    ];
}
