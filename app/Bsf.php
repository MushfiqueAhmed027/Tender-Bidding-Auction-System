<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bsf extends Model
{
    protected $fillable =['understanding_of_work'];

    // public function categories(){
    //     return $this->belongsTo('App\Category');
    // }


    public function tors(){
      
            return $this->belongsTo('App\Tor','id');
       
    }

    // public function bidders(){
    //     return $this->hasMany('App\Bidder');
    // }
}
