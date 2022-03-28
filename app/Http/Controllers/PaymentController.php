<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatus;
use App\Models\Payment;
use Devpark\Transfers24\Requests\Transfers24;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private Transfers24 $transfers24;

    public function __construct(Transfers24 $transfers24)
    {
        $this->transfers24 = $transfers24;
    }

    /**
     * Update status of the payment.
     *
     */
    public function status(Request $request): void
    {
        $response = $this->transfers24->receive($request);
        $payment = Payment::where('session_id', $response->getSessionId())->firstOrFail();

        if (!is_null($payment)) {
            if ($response->isSuccess()) {
                $payment->status = PaymentStatus::SUCCESS;
            } else {
                $payment->status = PaymentStatus::FAIL;
                $payment->error_code = $response->getErrorCode();
                $payment->error_description = json_encode($response->getErrorDescription());
            }
            $payment->save();
        }
    }
}
