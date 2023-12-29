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


    public function verifyIbanOwner($birthDate, $nationalCode, $iban)
    {
        $url = "https://apibeta.finnotech.ir/kyc/v2/clients/{kpXVCJ9.eyJ0b2tlbklkIjoiMjNlMGFkMWQtZWFlYi00YjFkLWJmYjYtYTRiMWE0OTljY2RhIiwicmVmcmVzaFRva2VuIjoiNVdiOXBGdXZHd2hWSWxQR0VRcnZoT3NQSTkwNDlzR3c3SEZuc1lkWGRraUFoaEN2TU9TT2lJUVhLOW90eWp1b2w1QWZaN3RIR0pVN2lzQ2dScWdrR3hTZGx1T2Z2MmNwYjhVMkx1aVJ0cHlFOTQ4eEFybHQ3WVhyRWlOT0JSaWlXVHA3MmdGNkhpZWVsYzFKb3c2dDB0TkF4RWVLTk9ZejRXWlNHVHZ5b0dZblRwenNwUmZ4V1p4WTBmOUlVQWsxUmptYURpZWExR1lsNWJVeHZwS0lhdnlZOXM4eXFGTlNWR0gzYUZHU013eDVRTE44MGMyQUFqV3lUTHVMaFpQciIsImNyZWF0aW9uRGF0ZSI6IjE0MDIwOTI5MTYyOTUxIiwibGlmZVRpbWUiOjg2NDAwMDAwMCwiY2xpZW50SWQiOiJPdmVyaGF1bE1ORyIsInVzZXJJZCI6IjU4OTk5NTI3NzYiLCJhY3RpdmUiOnRydWUsInNjb3BlcyI6WyJreWM6aWJhbi1vd25lci12ZXJpZmljYXRpb246Z2V0Il0sInR5cGUiOiJDTElFTlQtQ1JFREVOVElBTCIsImNsaWVudEluZm8iOiJneU1Hb1lNUXREeWxwRlRKN1RQRnExK1p6dTNWZ0RNL21HWmF4NktnOXAzY0RvcjZKSjE5U3NTTlJ5TXFxSVBCIiwiYmFuayI6IjA2MiIsImlhdCI6MTcwMzA3NzE5MSwiZXhwIjoxNzAzOTQxMTkxfQ.SVpnHk_J3Iq-7-DwTwXBuAYHlE5vUARPsHWalpXolZewywhGrrvjgkW69XKWYu5C7ZNEvIHA8UYpsA6Ek2pGnkaLllyAQP6uPttWDViJi4zkqrtwWfCKRXDJODPjvh_073go1Y3T_akZDerzMc8zXqS369La7v0dzmTL2pD65OPZVEF3WS0L42Scvlm8x4H2wnh2LtCboKbHAOp8ArlWjTUMmY-4DR7c7c-C_xTU3NDhuuFReip3mTme6TSu3h94U-Qrl66oJoXm7XiXSGTyAsr7RfXL7CkGq19SUCykKtYODdbmRYw0JCjoHdEAjJp4Z08RXsK3MaIMGk0wNHVvig}/ibanOwnerVerification";
        $headers = [
            'Authorization' => 'Bearer',
        ];

        try {
            $response = $this->client->request('GET', $url, [
                'headers' => $headers,
                'query' => [
                    'trackId' => 'trackId',
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

