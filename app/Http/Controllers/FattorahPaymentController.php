<?php

namespace App\Http\Controllers;

use App\Http\Repositories\FatoorahRepository;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FattorahPaymentController extends Controller
{
    private $fatoorahRepository;
    private $invoiceVal;
    public function __construct(FatoorahRepository $fatoorahRepository)
    {
        $this->fatoorahRepository = $fatoorahRepository;
    }

    public function payForSubscribe()
    {

        if(Auth::user()->package == 1)
        {
            $this->invoiceVal = 999;
        }elseif (Auth::user()->package == 2)
        {
            $this->invoiceVal = 288;

        }elseif (Auth::user()->package == 3)
        {
            $this->invoiceVal = 99;
        }

        $data = [
            "CustomerName" => Auth::user()->name,
            "NotificationOption" => "Lnk",
            "InvoiceValue" => $this->invoiceVal,
            "MobileCountryCode" => "+2",
            "CustomerEmail" => Auth::user()->email,
            "CallBackUrl" => "http://127.0.0.1:8000/callback",
            "ErrorUrl" => "http://127.0.0.1:8000/error",
            "DisplayCurrencyIso" => "EGP",
            "Language" => "en",
            "CustomerMobile" => Auth::user()->phone

        ];

        $res = $this->fatoorahRepository->sendPay($data);
//        dd($res["Data"]['InvoiceURL']);
        return view("auth.payment",["url" => $res['Data']['InvoiceURL']]);
    }

    public function callback(Request $request)
    {

        if ($request->paymentId)
        {
            $data = [
                "Key" => $request->paymentId,
                "KeyType" => "paymentId"
            ];

            $response = $this->fatoorahRepository->getPaymentStatues($data);

            if($response['IsSuccess'])
            {
                return $this->fatoorahRepository->subscribe($response);

            }else{
                return redirect()->to("/error");
            }

        }else{
            return  redirect()->to("/error");
        }
    }

    public function error(Request $request)
    {

        return view("error");
    }
}
