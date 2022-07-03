<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // public function user(){
    //     return $this->hasMany(User::class);
    // }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function author(){
        return $this->belongsToMany(Author::class , 'book_author');
    }

    // public function ratings(){
    //     return $this->hasMany(User::class);
    // }
}
