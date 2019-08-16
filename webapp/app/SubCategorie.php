<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategorie extends Model
{
    use SoftDeletes;
    protected $table = "insutrendy.subcategories";
    protected $fillable = ['name','code','description','status','id_categorie'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public static function select(){
        SubCategorie::all()->map(function($item) use (&$data){
            $data[$item->id] = $item->name;
        });
        return $data;
    }

    public static function collectData($collect, $key = 'id', $value = 'name'){
        $var = ["Seleccione un dato"];
        $collect->map(function($item) use(&$var, $key, $value){
            $var[ $item->$key ] = $item->$value;
        });

        return $var;
    }

}
