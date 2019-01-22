<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['id', 'name', 'status'];

    public function rooms()
    {
        return $this->hasMany(Room::class, 'category_id', 'id')->where('status','=','1');
    }
}
