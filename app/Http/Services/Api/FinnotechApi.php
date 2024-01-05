<?php

namespace App\Http\Services\Api;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class FinnotechApi
{

    public function getToken()
    {
        $client = new Client();

        $url = 'https://apibeta.finnotech.ir/dev/v2/oauth2/token';

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' .'T3ZlcmhhdWxNTkc6UmlWcFVjWUgyVkc3R0ZCM3VFWWk=',
        ];

        //dd($headers);

        $data = [
            'nid' => '5899952776',
            'grant_type' => 'client_credentials',
            'scopes' => 'kyc:iban-owner-verification:get',
        ];

        $response = $client->post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

        $body = $response->getBody();
        $tokenData = json_decode($body, true);


        return response()->json($tokenData['result']['value']);
    }

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
            "refresh_token"=>"5tVNNT0FRS0aFcPilrFrnUf2A7wwckkxsQb8syftd4mLJDFnnTdsoAysBabIa9GzFGDmswbqfRjC7BuhhoWgmw45GBlZCElvrBCLjW7iu5EARjOTKs2pTYZLuizGbbj45HP3CiUFoxmAn1jlTB7OOs4MWlwRwOmiLpcRLnh1XruHdDZeghZvq9kROd86gCR61CUoxE9hcw8hh3Lnp8jOm3GIKVM6caCFaZFSNMsVw2DSCGCoTA3dBbpHfHPHcAYB",
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

    public function ibanOwnerVerification($birth_date, $nid, $iban)
    {

         $token = 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbklkIjoiNjhiNDA1YTQtMmQ2My00NTU0LWE5YTUtMzc5YzdiMThlYTdmIiwicmVmcmVzaFRva2VuIjoiNXRWTk5UMEZSUzBhRmNQaWxyRnJuVWYyQTd3d2Nra3hzUWI4c3lmdGQ0bUxKREZublRkc29BeXNCYWJJYTlHekZHRG1zd2JxZlJqQzdCdWhob1dnbXc0NUdCbFpDRWx2ckJDTGpXN2l1NUVBUmpPVEtzMnBUWVpMdWl6R2JiajQ1SFAzQ2lVRm94bUFuMWpsVEI3T09zNE1XbHdSd09taUxwY1JMbmgxWHJ1SGREWmVnaFp2cTlrUk9kODZnQ1I2MUNVb3hFOWhjdzhoaDNMbnA4ak9tM0dJS1ZNNmNhQ0ZhWkZTTk1zVncyRFNDR0NvVEEzZEJicEhmSFBIY0FZQiIsImNyZWF0aW9uRGF0ZSI6IjE0MDIxMDE1MjAzNTAzIiwibGlmZVRpbWUiOjg2NDAwMDAwMCwiY2xpZW50SWQiOiJPdmVyaGF1bE1ORyIsInVzZXJJZCI6IjU4OTk5NTI3NzYiLCJhY3RpdmUiOnRydWUsInNjb3BlcyI6WyJreWM6aWJhbi1vd25lci12ZXJpZmljYXRpb246Z2V0Il0sInR5cGUiOiJDTElFTlQtQ1JFREVOVElBTCIsImJhbmsiOiIwNjIiLCJpYXQiOjE3MDQ0NzQzMDMsImV4cCI6MTcwNTMzODMwM30.cjV8VtrvkngmCR_yQXhd1hLz6OybtWlkht_XMxRWgpMzCLaPA0rCpzHfEiscw70ABKVz-3jKXbnVsYQXWaP9SlIhpZroG9OgGLrtX_r9VflfRQrAxjwj1uBQgYYvBTSH7AbUthrFUhh0B-ZhVSgTD8XN5KyFjWBPZICVY4NS0fGiifZNZQ-8OsayYqlthpdm_31tZYbMw_yrKQWF0XZ18d-QivBaFe-5H5bXaqReHIxJo_R5Wf-hgavCZz62WOI6sp-aDOJvfxCXi66g_xVqC_Ju5NCykts7-NAhnyPsOSZetEbuJ9UVLiZaFX9VJVV3jY3Z2M8cqXhevMeCWW1wQQ';

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
}

