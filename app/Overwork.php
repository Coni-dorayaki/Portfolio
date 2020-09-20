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
        'worktimeA' => 'required',
        'worktimeB' => 'required',
        'worktimeC' => 'required',
        'worktimeD' => 'required',
        'place' => 'required',
        'reason' => 'required',
    );
}
