<?php

namespace App\Traits\DonorsTraits;

Trait DonorTrait
{
    function uploadDonorImage($image , $foldar)
    {
        if($image == "")
            return "";
        else{
            $file_extension = $image-> getClientOriginalExtension();
            $file_name      = time().'.'.$file_extension ;
            $path           = $foldar ;
            $image -> move($path , $file_name);

            return $file_name ;
        }
    }
}
