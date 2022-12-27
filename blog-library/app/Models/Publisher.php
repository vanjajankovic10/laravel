<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishers';
    use HasFactory;

    public function books(){
        return $this->hasMany(Book::class);
    }

    protected $fillable = [
        'name',
        'PIB',
    ];
}
