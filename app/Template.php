<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
      
    protected $fillable =['name','date','subject','type','background','objective',
    'work_required','scope_of_work','roles_responsibilities','time_frame','deliverables',
    'terms_conditions','service_provider','assignment_location','applying_procedure',
    'evaluation_criteria','documents_submit','financial_offer','submitted_on','acknowledgement',
    'tenderer_signature','note'];
    public function tors(){
        return $this->hasMany('App\Tor');
    }
}
