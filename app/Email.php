<?php

namespace App;
use URL;
use Illuminate\Support\Facades\Mail;

class Email
{
    public static function EmailSubscriptionData(){
        $front_user = 'viral@mailinator.com';
        $message = "<h2>Hello Viral test</h2>
        <br>Password Reset Link <br>
        <a href='activation_link'> Reset Password </a>";
        $search = ['activation_link'];


        $content = 'welcome';

        Mail::send(
            ['html' => 'system_emails.email_html'],
            array(
                'content' => $content,
            ),
            function ($message) use ($front_user) {
                $message->from(env('MAIL_USERNAME'),'test');
                $message->to($front_user)->subject("Password Reset");
            }
        );
        dd('success');
    }
}
