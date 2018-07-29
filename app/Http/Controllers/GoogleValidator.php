<?php
namespace App\Http;

use PragmaRX\Google2FA\Google2FA;

class GoogleValidator {
    /**
     * Validate the Google2FA secret
     *
     *
     */
    public function validate($attribute, $value, $parameters, $validator){
        $google2fa = new Google2FA();
        if($google2fa->verifyKey($parameters[0], $value)){
            return true;
        }else{
            return false;
        }
    }
}
