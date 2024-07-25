@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">Civil Registration Form</h1>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('civil.submitForm') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="id_or_passport" class="block text-gray-700 font-bold mb-2">Upload ID or Passport</label>
                        <input type="file" name="id_or_passport" id="id_or_passport" class="w-full p-3 border rounded"
                            required>
                        @error('id_or_passport')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="proof_of_residence" class="block text-gray-700 font-bold mb-2">Upload Proof of
                            Residence</label>
                        <input type="file" name="proof_of_residence" id="proof_of_residence"
                            class="w-full p-3 border rounded" required>
                        @error('proof_of_residence')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="picture_or_photo" class="block text-gray-700 font-bold mb-2">Upload Picture or
                            Photo</label>
                        <input type="file" name="picture_or_photo" id="picture_or_photo"
                            class="w-full p-3 border rounded" required>
                        @error('picture_or_photo')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="witness_1" class="block text-gray-700 font-bold mb-2">Upload Witness 1 Document
                            (Optional)</label>
                        <input type="file" name="witness_1" id="witness_1" class="w-full p-3 border rounded">
                        @error('witness_1')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="witness_2" class="block text-gray-700 font-bold mb-2">Upload Witness 2 Document
                            (Optional)</label>
                        <input type="file" name="witness_2" id="witness_2" class="w-full p-3 border rounded">
                        @error('witness_2')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="proof_of_birth" class="block text-gray-700 font-bold mb-2">Upload Proof of Birth
                            Document (Optional)</label>
                        <input type="file" name="proof_of_birth" id="proof_of_birth" class="w-full p-3 border rounded">
                        @error('proof_of_birth')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-[#ff9000] text-white px-6 py-3 rounded-lg hover:bg-[#ff9000]/80 transition duration-300">
                            Proceed
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
