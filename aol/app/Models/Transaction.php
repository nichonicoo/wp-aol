<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    public $fillable = ['user_id', 'amount', 'status', 'snap_token'];
}
