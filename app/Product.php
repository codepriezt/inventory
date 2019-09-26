<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{




    /**
     * The model table name.
     *
     * @var array
     */
    public $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable  = [
        'title' ,'category_id' , 'description' , 'price' , 'unit' 
    ];



    /**
     * category relationship
     *
     * @var array
     */
    public function category()
    {
        return $this->belongsTo('App\Category' , 'category_id');
    }
}
