<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Xendit\Xendit

class PaymentController extends Controller
{
    public function callback(Request $request)
    {
        $amount = $request->input('harga');

        Xendit::setApiKey(env('XENDIT_SECRET_KEY'))

        $invoice  \Xendit\Invoice::create(([
            'external_id' => 'invoice-' . time(),
            'amount' => $amount,

        ]));
    }
} -->
