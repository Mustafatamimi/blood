<?php

namespace App\Http\Controllers\LogAndRegister;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class LogAndRegisControll extends Controller
{
    public function show(){
        return view('Login_Register.registerAndLogin');
    }
}
