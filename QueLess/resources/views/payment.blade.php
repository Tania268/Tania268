@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">Payment Page</h1>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('payment.process') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="payment_method" class="block text-gray-700 font-bold mb-2">Select Payment Method:</label>
                        <select name="payment_method" id="payment_method" class="w-full p-3 border rounded" required>
                            <option value="mtn">MTN</option>
                            <option value="swazi_mobile">Swazi Mobile</option>
                            <option value="nedbank">Nedbank</option>
                            <option value="swazibank">SwaziBank</option>
                            <option value="standard_bank">Standard Bank</option>
                            <option value="fnb">FNB</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="amount" class="block text-gray-700 font-bold mb-2">Amount:</label>
                        <input type="number" name="amount" id="amount" class="w-full p-3 border rounded" required>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-[#ff9000] text-white px-6 py-3 rounded-lg hover:bg-[#ff9000]/80 transition duration-300">
                            Submit Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
