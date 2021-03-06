<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $table = "insutrendy.blogs";
    protected $filliable = [
        'id',
        'title',
        'fecha',
        'introduction',
        'content',
        'image',
        'image01',
        'image02',
        'image03',
        'publish'

    ];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
