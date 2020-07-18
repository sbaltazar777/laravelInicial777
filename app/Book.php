<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //relaciones un libro pertence a muchos autores
    function authors(){
    	return $this->belongsToMany(Author::class);

    }

}
