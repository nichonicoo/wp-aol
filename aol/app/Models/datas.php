<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class datas extends Model
{
    protected $fillable = [
        'photo_url',
        'Title',
        'Description',
        'Location',
        'Tingkat_Kesulitan',
        'Status',
        'users_id'
    ];

}
