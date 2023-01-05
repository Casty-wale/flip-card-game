<?php

namespace App\Action;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Queue\ShouldQueue;

class SmsSender implements ShouldQueue
{
    public function sendingSms($vCode, $muser)
    {

        $endPoint = config('myconfig.host');
        $apiKey = config('myconfig.key');
        $url = $endPoint . '?key=' . $apiKey;
        $data = [
        'recipient' => [''.$muser->phoneNumber.''],
        'sender' => 'GDC LTD',
        'message' => 'Hello '.$muser->name.', Your promo code is '. $vCode.'.'. "\n" .'Kindly call 0302521694 / 0549281817 or send an email to support@ghana.com to purchase a product with your promo code.',
        // 'message' => 'Hello Kofi Kwame, Your promo code is '. $vCode.'.'. "\n" .'Kindly call 0302521694 / 0549281817 or send an email to support'."&#64;".' to purchase a product with your promo code.',
        'is_schedule' => 'false',
        'schedule_date' => ''
        ];

        $ch = curl_init();
        $headers = array();
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        $result = json_decode($result, TRUE);
        curl_close($ch);

        return $result;
    }

}