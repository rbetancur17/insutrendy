<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = "insutrendy.products";
    protected $fillable = ['name','code','description','price','id_categorie','status','outstanding'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
