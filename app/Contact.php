<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Contact extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'contacts';

    protected $fillable = [
        'name', 'mobile','email'
    ];
}
