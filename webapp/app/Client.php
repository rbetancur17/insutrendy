<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    protected $table = "insutrendy.clients";
    protected $filliable = [
        'id',
        'name',
        'phone',
        'email',
        'country',
        'city',
        'bussinestype',
        'company',
        'user',
        'pass'
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at']
}
