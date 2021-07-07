<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(array $input){
        Validator::make($input, [
            'fullName' => ['required', 'string', 'max:255'],
            'userName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'address' => ['required'],
            'uType' => ['required'],
            'password' => $this->passwordRules($input['uType']),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'fullName' => $input['fullName'],
            'userName' => $input['userName'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'uType' => $input['uType'] ?? 3,
            'password' => Hash::make($input['password']),
        ]);
    }
}
