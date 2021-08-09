<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable=[ 'carmake','thumbstart' ,'cover' , 'airconditioning'  , 'foglights'  ,    'alloywheels'   , 
    'electricwindows'  ,'frontfoglamps' ,  'amfmradio' , 'powersteering' , 'airconditioning' , 'tractioncontrol' ,   
    'electricmirrors'  ,'airbag'  ,'interior' ,   'duty' ,  'bodytype'   ,  'condition'   , 'description'  
      , 'location',   'price'  ,  'color' ,'yearofmanufacture',  'carmodel' ,   'engine'  ,'mileage','transmission'];

    public function images(){
        return $this->hasMany(image::class);
    }

}
