<?php


namespace App\Http\Repositories;


use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;


class FatoorahRepository
{

    private $client_request;
    private $base_url;
    private $headers;
    public function __construct(Client $client_request)
    {
        $this->client_request = $client_request;
        $this->base_url = env("FATOORAH_BASE_URL");
        $this->headers = [
            "Content-Type" => "application/json",
            "Authorization" => "Bearer " . env("FATOORAH_API_KEY")
        ];

    }

    public function buildRequest($url, $method, $data = [])
    {
        $request = new Request($method, $this->base_url . $url, $this->headers);
        if (!$data)
            return false;
        $response = $this->client_request->send($request, [
            "json" => $data
        ]);

        if ($response->getStatusCode() != 200)
            return false;

        $response = json_decode($response->getBody(), true);
        return $response;

    }

    public function sendPay($data)
    {
        $response = $this->buildRequest("/v2/SendPayment", "POST", $data);
        return $response;
    }

    public function getPaymentStatues($data)
    {
        $response = $this->buildRequest("/v2/getPaymentStatus", "POST", $data);
        return $response;
    }

    public function subscribe($response)
    {
        $transactionID = $response['Data']['InvoiceTransactions'];
        if(empty(Auth::user()->pck_start) && empty(Auth::user()->pck_end))
        {
            if ($response["Data"]["InvoiceStatus"] == "Paid" && $response['Data']['CustomerEmail'] == Auth::user()->email)
            {
                $days = "";
                if($response['Data']['InvoiceDisplayValue'] == 999)
                {
                    $days = 365;
                }elseif ($response['Data']['InvoiceDisplayValue'] == 288)
                {
                    $days = 90;
                }elseif ($response['Data']['InvoiceDisplayValue'] == 99)
                {
                    $days = 30;
                }
                $user = User::where("id" , Auth::user()->id);
                $user->update([
                    "pck_start" => Carbon::now(),
                    "pck_end" => Carbon::now()->addDays($days)
                ]);
                return view("success", [
                    "statues" => $response["Data"]["InvoiceStatus"],
                    "paidVal" => $response['Data']['InvoiceDisplayValue'],
                    "transactionID" => $transactionID[0]['TransactionId']
                ]);
            }else{
                return "error";
            }
        }

    }



}
