<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use SoftDeletes;
    protected $table = "insutrendy.categories";
    protected $fillable = ['name','code','description'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
