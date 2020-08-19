<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tor extends Model
{
   
    protected $fillable =['name','categories_id','date','subject','type','background','objective',
    'work_required','scope_of_work','roles_responsibilities','time_frame','deliverables',
    'terms_conditions','service_provider','assignment_location','applying_procedure',
    'evaluation_criteria','documents_submit','financial_offer','submitted_on','acknowledgement',
    'tenderer_signature','note'];
    public function categories(){
        return $this->belongsTo('App\Category');
    }

    public function templates(){
        return $this->belongsTo('App\Template');
    }
    public function bidders(){
        return $this->belongsTo('App\Bidder');
    }
}
