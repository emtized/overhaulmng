<?php

namespace App\Http\Services\Api;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class FinnotechApi
{

    public function ibanOwnerVerification($birth_date, $nid, $iban)
    {

         $response = $this->refreshToken();
         $token = $response->original;

        $url = "https://apibeta.finnotech.ir/kyc/v2/clients/OverhaulMNG/ibanOwnerVerification";
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$token}",
        ])->get($url, [
            'trackId' => '',
            'birthDate' => $birth_date,
            'nid' => $nid,
            'iban' => $iban,
        ]);

        return $response->json();
    }


    //refresh token
    public function refreshToken()
    {
        $client = new Client();

        $url = 'https://apibeta.finnotech.ir/dev/v2/oauth2/token';

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' .'T3ZlcmhhdWxNTkc6UmlWcFVjWUgyVkc3R0ZCM3VFWWk=',
        ];

        $data = [
            "grant_type" => "refresh_token",
            "refresh_token"=>"XmAUr5NKPcRTLqA1fO17O23fa25iHKBtwzfuD0OBpJU6h5psxR9oa66PaT3JV2PH5N1QH9xmnenQ8ZebHCp9a9pFcIikd9gkCI5ZHXSch991tAFW9zQDLe0sxaXA3CnRh1fmUyhb0GOGbOLdVXY4iJdu0fsM5dIvlZDOj310jMVPPPNWaxeNRtNLr5tOW12tmZCifTgvkV0NzsDwiNSNYwn8xB0igH2MyAXJSdaRBUtfuYhQSWNTgPkOzSRohcPX",
            "token_type" => "CLIENT-CREDENTIAL"
        ];

        $response = $client->post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

        $body = $response->getBody();
        $tokenData = json_decode($body, true);


        return response()->json($tokenData['result']['value']);
    }
}

