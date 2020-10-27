<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overwork extends Model
{
    protected $guarded = array('id');

    // ルール
    public static $rules = array(
        'requestday' => 'required',
        'start' => 'required',
        'end' => 'required',
        'worktime' => 'required',
        'place' => 'required',
        'reason' => 'required',
    );
    
    public function user(){
    return $this->belongsTo('App\User');
    }
}
