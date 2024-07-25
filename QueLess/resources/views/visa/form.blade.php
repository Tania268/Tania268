@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">Visa Application Form</h1>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('visa.submitForm') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="full_name" class="block text-gray-700 font-bold mb-2">Full Name</label>
                        <input type="text" name="full_name" id="full_name" class="w-full p-3 border rounded"
                            value="{{ old('full_name') }}" required>
                        @error('full_name')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="age" class="block text-gray-700 font-bold mb-2">Age</label>
                        <input type="number" name="age" id="age" class="w-full p-3 border rounded"
                            value="{{ old('age') }}" required>
                        @error('age')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email_address" class="block text-gray-700 font-bold mb-2">Email Address</label>
                        <input type="email" name="email_address" id="email_address" class="w-full p-3 border rounded"
                            value="{{ old('email_address') }}" required>
                        @error('email_address')
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
                        <label for="completed_form" class="block text-gray-700 font-bold mb-2">Completed Application
                            Form</label>
                        <input type="file" name="completed_form" id="completed_form" class="w-full p-3 border rounded"
                            required>
                        @error('completed_form')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="police_certificate" class="block text-gray-700 font-bold mb-2">Original Police
                            Certificate</label>
                        <input type="file" name="police_certificate" id="police_certificate"
                            class="w-full p-3 border rounded" required>
                        @error('police_certificate')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="passport_photos" class="block text-gray-700 font-bold mb-2">Two Passport
                            Photographs</label>
                        <input type="file" name="passport_photos[]" id="passport_photos"
                            class="w-full p-3 border rounded" multiple accept="image/png, image/jpeg" required>
                        @error('passport_photos')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="medical_references" class="block text-gray-700 font-bold mb-2">Medical
                            References</label>
                        <input type="file" name="medical_references" id="medical_references"
                            class="w-full p-3 border rounded" required>
                        @error('medical_references')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="motivation_letter" class="block text-gray-700 font-bold mb-2">Letter of Motivation from
                            Employer</label>
                        <input type="file" name="motivation_letter" id="motivation_letter"
                            class="w-full p-3 border rounded" required>
                        @error('motivation_letter')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="qualifications" class="block text-gray-700 font-bold mb-2">Copies of
                            Qualifications</label>
                        <input type="file" name="qualifications" id="qualifications" class="w-full p-3 border rounded"
                            required>
                        @error('qualifications')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="proof_position_open" class="block text-gray-700 font-bold mb-2">Proof of Position
                            Availability</label>
                        <input type="file" name="proof_position_open" id="proof_position_open"
                            class="w-full p-3 border rounded" required>
                        @error('proof_position_open')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-[#ff9000] text-white px-6 py-3 rounded-lg hover:bg-[#ff9000]/80 transition duration-300">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
