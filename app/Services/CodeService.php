<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\ValidationCode;

class CodeService{
    public function generateCode()
    {
        // $code = str_pad(mt_rand(0, 5), 6, '0', STR_PAD_LEFT);
        $code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);

        return $code;
    }
    public function verifyCode($muser)
    {
        $user_id = $muser->id;
        $promo_id = $muser->promo_id;
        $otp = $this->generateCode();
        
        $deFinder = ValidationCode::where('code' , $otp)->value('code');
        
        if(!$deFinder){
            ValidationCode::create([
                "code"=>$otp,
                "user_id"=>$user_id,
                "promo_id"=>$promo_id,
                "path"=>"definder",
            ]);
            return $otp;
        }else{
            while($deFinder){
                // $code = str_pad(mt_rand(0, 8), 6, '0', STR_PAD_LEFT);
                $code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
                $confirmer = ValidationCode::where('code' , $code)->value('code');
                if(!$confirmer){
                    ValidationCode::create([
                        "code"=>$code,
                        "user_id"=>$user_id,
                        "promo_id"=>$promo_id,
                        "path"=>"confirmer",
                    ]);
                }

                $deFinder = $confirmer;
            }
            return $code;
        }

        return 'Sorry, Something happend. Please call the IT team for support';
    }
    // public function createCode()
    // {
    //     $otp = $this->generateCode();
        
    //     $deFinder = ValidationCode::where('code' , $otp)->value('code');

    //     if($deFinder){
    //         return 'am in the if';
    //     }else{
    //         return 'am in the else';
    //     }

    //     return $deFinder;
    // }
    // public function sendValidationCode()
    // {
    //     $otp = $this->generateCode();
        
    //     $deFinder = ValidationCode::where('code' , $otp)->value('code');

    //     if($deFinder){
    //         return 'am in the if';
    //     }else{
    //         return 'am in the else';
    //     }

    //     return $deFinder;
    // }
}