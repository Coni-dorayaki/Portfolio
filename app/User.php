<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'area', 'employeeNumber', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected $guarded = array('id');

    // ルール
    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    );
    
    public function overworks(){
    return $this->hasMany('App\Overwork');
    }
    
    public function holidays(){
    return $this->hasMany('App\Holiday');
    }
    
    public function reports(){
    return $this->hasMany('App\Report');
    }
}
