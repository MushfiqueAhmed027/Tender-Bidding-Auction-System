<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    protected $fillable = ['company_name','categories_id','legal_status','registration_no','establishment_year','TIN','BIN','license_no','phone_no','description','Head_office_address','Zip_code','company_website','title','name','gender','national_id','department'];

    public function categories(){
        return $this->belongsTo('App\Category');
    }
    public function bsfs(){
                return $this->belongsTo('App\Bsf');
    }
}
