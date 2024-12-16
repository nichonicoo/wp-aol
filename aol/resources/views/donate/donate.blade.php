@extends('layouts.navigation')

@section('content')
<div class="container mx-auto px-4 py-8 lex flex-col items-center justify-center px-24 py-24 mx-auto">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Donate to Oceanis</h2>
    <p class="font-light text-gray-500 dark:text-gray-400">Every donation, no matter how small,
        holds great value and helps make a positive difference. Thank you for your support!</p>

        {{-- <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0"> --}}

            <form action="{{ route('donate.process') }}" method="POST" class="mb-4" class="mt-4 space-y-4 lg:mt-5 md:space-y-5">
                @csrf
                <div class="mb-4">
                    <label for="amount" class="block text-sm font-medium text-gray-700 items-center justify-center">Amount (IDR)</label>
                    <input type="number" name="amount" id="amount" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>
                <button type="submit"  class="w-full bg-indigo-500 text-white p-3 rounded-md shadow-sm hover:bg-indigo-600">Donate</button>

            </form>
        {{-- </div> --}}

    {{-- <form action="{{ route('donate.process') }}" method="POST" class="mb-4">
        @csrf
        <div class="mb-4">
            <label for="amount" class="block text-sm font-medium text-gray-700">Amount (IDR)</label>
            <input type="number" name="amount" id="amount" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        </div>
        <button type="submit"  class="w-full bg-indigo-500 text-white p-3 rounded-md shadow-sm hover:bg-indigo-600">Donate</button>

    </form> --}}

</div>


{{-- @if (isset($snapToken))
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            snap.pay('{{ $snapToken }}');
        };
    </script>
@endif --}}
@endsection
