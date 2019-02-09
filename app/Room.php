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

    /**
     * Relation to Gesture
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(Image::class, 'room_id', 'id');
    }
}
