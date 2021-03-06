<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules($uType){
        if($uType == 1){
            return ['required', 'string', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^A-Za-z0-9@]).{12,}$/','confirmed'];
        }elseif ($uType == 2){
            return ['required', 'string', 'regex:/^(?=[^A-Z]*[A-Z])(?=[^a-z]*[a-z])(?=.*?[0-9])(?=.*?[^A-Za-z0-9@])(?!.*[pP]ass|.*[qQ]wer)(?!.*(.).*\1.*\1).{8,}$/','confirmed'];
        }else{
            return ['required', 'string', 'regex:/^(?=.*?[A-Za-z])(?=.*?[0-9]).{6,16}$/', 'confirmed'];
        }
    }
}
