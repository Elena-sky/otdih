<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'id',
        'name',
        'title',
        'sub_title',
        'floor',
        'category_id',
        'column_one',
        'column_two',
        'description',
        'status',
        'serial_number'
    ];
}
