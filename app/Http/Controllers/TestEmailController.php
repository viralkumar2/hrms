<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
class TestEmailController extends Controller
{
    public function test_email(){
        $email = 'viral@mailinator.com';
        $result =  Email::EmailSubscriptionData($email);

        dd('success');

    }
}
