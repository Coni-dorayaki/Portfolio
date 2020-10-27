<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded = array('id');

    // ルール
    public static $rules = array(
        'startday' => 'required',
        'actionreport' => 'required',
        'topics' => 'required',
    );
    
    public function user(){
    return $this->belongsTo('App\User');
    }
}
