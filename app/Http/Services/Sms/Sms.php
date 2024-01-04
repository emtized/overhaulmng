<?php

namespace App\Http\Services\Sms;


class Sms
{
    private $apiUrl = 'https://api.sms.ir/v1/send/verify';
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    
    public function send($mobile, $templateId, $parameters)
    {
        $postData = [
            'Mobile' => $mobile,
            'TemplateId' => $templateId,
            'Parameters' => $parameters,
        ];

        $headers = [
            'Content-Type: application/json',
            'x-sms-ir-secure-token: ' . $this->apiKey,
        ];

        $ch = curl_init($this->apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return curl_error($ch);
        }

        curl_close($ch);

        return $response;
    }

}
