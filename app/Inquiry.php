<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    
    protected $guarded = array('id');
    // ルール
    public static $rules = array(
        'companyname' => 'required',
        'name' => 'required',
        'to' => 'required',
        'cc' => 'required',
        'telnumber' => 'required',
        'usemachine' => 'required',
        'body' => 'required',
    );
}
