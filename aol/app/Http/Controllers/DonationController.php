<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    //

    public function process(Request $request){

        // dd($request);
        $request->validate([
            'amount' => 'required|numeric|min:1000',
        ]);

        $user = Auth    ::user();

        // Create a new transaction record
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->amount = $request->amount;
        $transaction->status = 'pending';
        $transaction->save();

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->amount,
            ),
            'customer_details' => array(
                'first_name' => $user->name,
                'email' => $user->email,
            ),
        );
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $transaction->snap_token = $snapToken;
        $transaction->save();

        // return redirect()->route('donate.donate', compact('snapToken'));
        return redirect()->route('donate.confirm',  ['id' => $transaction->id]);
    }

    public function confirmDonation($id)
    {
        $transaction = Transaction::findOrFail($id);
        // $amount = config('amount');

        return view('donate.confirmation', compact('transaction'));
    }

    public function success($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 'success';
        $transaction->save();

        return view('donate.success', compact('transaction'));
    }

    public function view_donation(){

        $totals = Transaction::where('status', 'success')->sum('amount');
        return view('donate.donate', compact('totals'));
    }


}
