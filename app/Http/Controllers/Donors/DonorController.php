<?php

namespace App\Http\Controllers\Donors;

use App\Http\Requests\Donor\DonorRequest;
use App\Models\Donors\DonorsModel;
use App\Models\Login\LoginModel;
use App\Traits\DonorsTraits\DonorTrait;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class DonorController extends Controller
{
    use DonorTrait;

    public function addNewDonor(DonorRequest $request)
    {
        // Here for saving the image
       $file_name = $this->uploadDonorImage($request->donorPhoto , 'images/Donors');

        // Here to insert data to Login table
        LoginModel::create([
            'user_name' => $request -> donorUserName,
            'user_pass' => $request -> donorPass,
            'user_type' => 'don'
        ]);

        //To get the id of inserted raw in user_security table to store it as a foreign key in donar table
        $login_id = LoginModel::all()->last()->id;


        // Here to insert the data to the donar table


        $donar = DonorsModel::create([
            'name'           => $request -> donorName,
            'phone'          => $request -> donorPhone ,
            'email'          => $request -> donorEmail,
            'gender'         => $request -> donorSexd,
            'age'            => $request -> donorAge,
            'city'           => $request -> donorCity,
            'street'         => $request -> donorStreet,
            'stat_show'      => $request -> donorIsShow,
            'group_type'     => $request -> donorGroupType,
            'last_donet_date'=> $request -> donorLastDate,
            'login_id'       => $login_id,
            'photo'          => $file_name,

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
