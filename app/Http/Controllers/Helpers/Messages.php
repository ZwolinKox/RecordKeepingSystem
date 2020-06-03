<?php

namespace App\Http\Controllers\Helpers;
use App\Orders;

class Messages 
{
    public static function sendSms($number, $templateName, $orderId)
    {
        $message = view("sms/".$templateName, ['scheme' => Orders::find($orderId)->name ]);

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://damian.nowynet.ostrog.net/sms/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "number=".$number."&message=".$message,
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public static function sendEmail($mail, $templateName, $orderId)
    {
        Mail::send('emails.welcome', $data, function ($message) {
            $message->from('us@example.com', 'Laravel');
            $message->to('foo@example.com')->cc('bar@example.com');
        });
    }
}
