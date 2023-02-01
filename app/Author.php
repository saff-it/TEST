<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function authors(){
        return $this->hasOne(Author::class);
    }
}
