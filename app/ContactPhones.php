<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPhones extends Model
{
    protected $table = 'contact_phones';

    protected $fillable = ['id', 'phone', 'telephone_call', 'viber'];

}
