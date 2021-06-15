<?php

namespace App\Models\Donors;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DonorsModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected  $table = 'donor' ;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'age',
        'group_type',
        'last_donet_date',
        'gender',
        'city',
        'street',
        'stat_show',
        'login_id',
        'photo',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'photo',
        'created_at',
        'updated_at'
    ];
    public  $timestamps = false ;

    ################### Begin realationship with login model ###################
    public  function loginRealation(){
        return $this -> belongsTo('App\Models\Login\LoginModel','login_id');
    }
    ################### End realationship with login model   ###################



}
