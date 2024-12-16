@extends('layouts.navigation')

@section('content')
<div class="container mx-auto px-4 py-8 lex flex-col items-center justify-center px-24 py-24 mx-auto">
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Confirm Donation</h2>

    <div class="mb-4">
        <p class="text-lg">You are about to donate <strong>IDR {{ number_format($transaction->amount, 0, ',', '.') }}</strong></p>
    </div>

    <div id="payment-form">
        <button id="pay-button" class="w-full bg-green-500 text-white p-3 rounded-md shadow-sm hover:bg-green-600">Pay with Midtrans</button>
    </div>
</div>
</div>

@endsection

@section('scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key={{env('MIDTRANS_CLIENT_KEY')}}></script>

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
          // SnapToken acquired from previous step
          snap.pay('{{ $transaction->snap_token }}', {
            // Optional
            onSuccess: function(result){
            //   /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            window.location.href = '{{ route('donate.success', ['id' => $transaction->id]) }}';

            },
            // Optional
            onPending: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onError: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
          });
        };
      </script>

@endsection
