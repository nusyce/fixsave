<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bewerbung extends Model
{
    protected $table = 'initiative';

    protected $guarded = ['id'];

    //protected $dateFormat = 'U';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [

        'anrede', 'titel', 'vorname','nachname','strabe','hausnummer','plz_landercode','plz','ort','geburtsdatum','tagsuber','email','letzte_position','bedeutendste','weitere','aktuelles','raumliche','bewer','profiltyp','komentar','kundigungsfirst'

    ];

}
