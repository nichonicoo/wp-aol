@extends('layouts.navigation')

@section('content')
<div class="container mx-auto px-4 py-8 flex flex-col items-center justify-center">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Payment Successful</h2>

    <div class="mb-4 text-center">
        <p class="text-lg">Thank you for your donation of <strong>IDR {{ number_format($transaction->amount, 0, ',', '.') }}</strong>.</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('donate.form') }}" class="w-full bg-indigo-500 text-white p-3 rounded-md shadow-sm hover:bg-indigo-600 text-center">Donate Again</a>
    </div>
</div>

@endsection
