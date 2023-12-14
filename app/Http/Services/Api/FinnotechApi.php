<?php

namespace App\Http\Services\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;


class FinnotechApi
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function verifyNationalCode($clientId, $nid, $trackId = null, $token)
    {
        $url = "https://apibeta.finnotech.ir/oak/v2/clients/{$clientId}/users/{$nid}/customerInfo";
        $headers = [
            'Authorization' => "Bearer {$token}",
        ];

        try {
            $response = $this->client->post($url, [
                'headers' => $headers,
                'query' => [
                    'trackId' => $trackId,
                ],
            ]);

            $result = json_decode($response->getBody(), true);

            return $result;
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }


    public function verifyIbanOwner($clientId, $trackId, $birthDate, $nationalCode, $iban)
    {
        $url = "https://apibeta.finnotech.ir/{address}/kyc/v2/clients/{$clientId}/ibanOwnerVerification";
        $headers = [
            'Authorization' => 'Bearer YOUR_ACCESS_TOKEN',
        ];

        try {
            $response = $this->client->request('POST', $url, [
                'headers' => $headers,
                'query' => [
                    'trackId' => $trackId,
                    'birthDate' => $birthDate,
                    'nid' => $nationalCode,
                    'iban' => $iban,
                ],
            ]);

            $result = json_decode($response->getBody(), true);


            return $result;
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

