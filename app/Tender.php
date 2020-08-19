<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
   // public $table = 'tenders';
    protected $guarded = [];
   /* public function category()
    {
       return $this->hasOne(Category::class);
    }*/
    public function users()
    {
        return $this->belongsTo('User');
    }
}
