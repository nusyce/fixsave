<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wahle extends Model
{


    protected $table = 'wahle';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];


    protected $fillable = [

        'name'
    ];
}
