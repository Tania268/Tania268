@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Company Registration Form</h2>
        <form action="{{ route('company_registration.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="fullname" class="block text-gray-700 font-bold mb-2">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="w-full p-3 border rounded"
                    value="{{ old('fullname') }}" required>
                @error('fullname')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
                <input type="email" name="email" id="email" class="w-full p-3 border rounded"
                    value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="physical_address" class="block text-gray-700 font-bold mb-2">Physical Address</label>
                <input type="text" name="physical_address" id="physical_address" class="w-full p-3 border rounded"
                    value="{{ old('physical_address') }}" required>
                @error('physical_address')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone_number" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="w-full p-3 border rounded"
                    value="{{ old('phone_number') }}" required>
                @error('phone_number')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="company_name" class="block text-gray-700 font-bold mb-2">Company Name</label>
                <input type="text" name="company_name" id="company_name" class="w-full p-3 border rounded"
                    value="{{ old('company_name') }}" required>
                @error('company_name')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="application_letter" class="block text-gray-700 font-bold mb-2">Application Letter</label>
                <input type="file" name="application_letter" id="application_letter" class="w-full p-3 border rounded"
                    required>
                @error('application_letter')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-[#ff9000] text-white px-6 py-3 rounded-lg hover:bg-[#ff9000]/80 transition duration-300">
                    Submit Application
                </button>
            </div>
        </form>
    </div>
@endsection
