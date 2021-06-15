<?php

namespace App\Models\Login;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table    = 'login';
    protected $fillable = [
        'user_name',
        'user_pass',
        'user_type',
        'created_at',
        'updated_at'
    ];
    protected  $hidden = [
        'created_at',
        'updated_at'
    ];
    public $timestamps = false ;

    ################### Begin realationship with donors model ###################
    public function donorRealation(){
        return $this->hasOne('App\Models\Donors\DonorsModel','login_id');
    }
    ################### End realationship with donors model   ###################

    ################### Begin realationship with donors model ###################
    public function seekerRealation(){
        return $this->hasOne('App\Models\Seekers\SeekerModel','login_id');
    }
    ################### End realationship with donors model   ###################
    use HasFactory;
}
