<?php

namespace App\Models\Seekers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeekerModel extends Model
{
    protected $table    = 'seeker';
    protected $fillable = [
        'name',
        'phone',
        'age',
        'group_blood',
        'gender' ,
        'dateNeed',
        'city',
        'street',
        'email',
        'notes',
        'login_id'
    ];
    protected  $hidden = [
        'created_at',
        'updated_at'
    ];
    public $timestamps = false ;

    ################### Begin realationship with login model ###################
    public  function loginRealation(){
        return $this -> belongsTo('App\Models\Login\LoginModel','login_id');
    }
    ################### End realationship with login model   ###################

    use HasFactory;
}
