<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    /**
     * model table name.
     *
     * @var array
     */
    public $table = 'categories';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];


}
