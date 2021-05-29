<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    //
    public  function store(Request $request)
    {
        \Log::info($request->all());
        $momoFormData = [
            'tx_ref' => 'ORDER-' . Str::random(4),
            'amount' => 200,
            'currency' => 'RWF',
            'fullname' => 'Africa XYZ',
            'email' => 'info@africa.xyz',
            'phone_number' => $request->get('phone_number')
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => env('FTW_BASE_API_URL') . "/charges?type=mobile_money_rwanda",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($momoFormData, true),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer " . env('FTW_SECRET_KEY')
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $jsonResponse = json_decode($response, true);


        if ($jsonResponse['status'] == 'error') {
            return response(['error' => $jsonResponse['message']], Response::HTTP_BAD_REQUEST);
        }
        return response(['redirectUrl' => $jsonResponse['meta']['authorization']['redirect']], Response::HTTP_OK);
    }


    public function approveTransaction(Request $request)
    {

        $jsonResponse = $request->all();
        $jsonResponseData = $jsonResponse['data'];

        if (isset($jsonResponseData['tx_ref'])) {

            $tx_ref = explode('-', $jsonResponseData['tx_ref']);

            if (isset($jsonResponseData) && $jsonResponseData['status'] == 'successful') {
                return response(['status' => $jsonResponseData['payment_type']], Response::HTTP_OK);
            }
        }

        return response(['status' => $jsonResponseData['payment_type']], Response::HTTP_BAD_REQUEST);
    }
}
