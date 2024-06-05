<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use LdapRecord\Laravel\Auth\ListensForLdapBindFailure;


class LoginTestController extends Controller
{
    use ListensForLdapBindFailure;
    public function __invoke()
    {

        $credentials = [
            'uid' => 'einstein',
            'password' => 'password',
        ];

        if (Auth::attempt($credentials)) {
            $user = auth::user();

            echo 'dziala';
        }
        else{
            echo 'nie dziala';
        }
    }
}
