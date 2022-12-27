<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    use HasFactory;

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    protected $fillable=[
        'title',
        'description',
        'autor_id',
        'genre_id',
        'publisher_id',
    ];
}
