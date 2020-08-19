<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }
}
