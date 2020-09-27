<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $guarded = array('id');

    // ルール
    public static $rules = array(
        'requestday' => 'required',
        'appclass' => 'required',
        'start' => 'required',
        'end' => 'required',
        'alltime' => 'required',
    );
}
