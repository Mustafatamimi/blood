<?php

namespace App\Http\Controllers\Seekers;


use App\Http\Requests\Seeker\SeekerRequest;
use App\Models\Login\LoginModel;
use App\Models\Seekers\SeekerModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class SeekerController extends Controller
{
    public function addNewSeeker(SeekerRequest $request)
    {


        // Here to insert data to Login table
        LoginModel::create([
            'user_name' => $request -> seekerUserName,
            'user_pass' => $request -> seekerPass,
            'user_type' => 'seke'
        ]);

        //To get the id of inserted raw in user_security table to store it as a foreign key in donar table
        $login_id = LoginModel::all()->last()->id;


        // Here to insert the data to the donar table


        $donar = SeekerModel::create([
            'name'           => $request -> seekerName,
            'phone'          => $request -> seekerPhone ,
            'email'          => $request -> seekerEmail,
            'gender'         => $request -> seekerSexd,
            'age'            => $request -> seekerAge,
            'city'           => $request -> seekerCity,
            'street'         => $request -> seekerStreet,
            'dateNeed'       => $request -> seekerDateNeed,
            'group_blood'    => $request -> seekerGroupType,
            'notes'          => $request -> seekerNote,
            'login_id'       => $login_id,
        ]);


        // This is to go back and show message for user the insertion is successful

        if($donar)
            return response()->json([
                'status' => true ,
                'msg'    => 'تم الحفظ بنجاح',
                'ifss' => $login_id
            ]);
        else
            return response()->json([
                'status' => false ,
                'msg'    => 'فشل الحفظ الرجاء المحاولة مجددا'

            ]);
    }
}
