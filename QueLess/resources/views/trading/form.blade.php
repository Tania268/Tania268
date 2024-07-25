@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">Trading Licence Application Form</h1>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('trading.submitForm') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="physical_address" class="block text-gray-700 font-bold mb-2">Physical Address</label>
                        <input type="text" name="physical_address" id="physical_address"
                            class="w-full p-3 border rounded" value="{{ old('physical_address') }}" required>
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
                        <label for="email_address" class="block text-gray-700 font-bold mb-2">Email Address</label>
                        <input type="email" name="email_address" id="email_address" class="w-full p-3 border rounded"
                            value="{{ old('email_address') }}" required>
                        @error('email_address')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Additional Document Uploads -->

                    <div class="mb-4">
                        <label for="lease_agreement" class="block text-gray-700 font-bold mb-2">Lease Agreement/Proof of
                            Ownership</label>
                        <input type="file" name="lease_agreement" id="lease_agreement" class="w-full p-3 border rounded"
                            required>
                        @error('lease_agreement')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="bank_statement" class="block text-gray-700 font-bold mb-2">Bank Statement</label>
                        <input type="file" name="bank_statement" id="bank_statement" class="w-full p-3 border rounded"
                            required>
                        @error('bank_statement')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="temporary_resident_permit" class="block text-gray-700 font-bold mb-2">Temporary Resident
                            Permit (if applicable)</label>
                        <input type="file" name="temporary_resident_permit" id="temporary_resident_permit"
                            class="w-full p-3 border rounded">
                        @error('temporary_resident_permit')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="citizenship_certificate" class="block text-gray-700 font-bold mb-2">Citizenship
                            Certificate/ID and Graded Tax (copies)</label>
                        <input type="file" name="citizenship_certificate" id="citizenship_certificate"
                            class="w-full p-3 border rounded" required>
                        @error('citizenship_certificate')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="certificate_of_incorporation" class="block text-gray-700 font-bold mb-2">Certificate of
                            Incorporation</label>
                        <input type="file" name="certificate_of_incorporation" id="certificate_of_incorporation"
                            class="w-full p-3 border rounded" required>
                        @error('certificate_of_incorporation')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="memorandum_articles" class="block text-gray-700 font-bold mb-2">Memorandum and Articles
                            of Association</label>
                        <input type="file" name="memorandum_articles" id="memorandum_articles"
                            class="w-full p-3 border rounded" required>
                        @error('memorandum_articles')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="form_j" class="block text-gray-700 font-bold mb-2">Form J</label>
                        <input type="file" name="form_j" id="form_j" class="w-full p-3 border rounded" required>
                        @error('form_j')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="form_c" class="block text-gray-700 font-bold mb-2">Form C</label>
                        <input type="file" name="form_c" id="form_c" class="w-full p-3 border rounded" required>
                        @error('form_c')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Download Form Button -->
                    <div class="mb-4">
                        <label for="downloaded_form" class="block text-gray-700 font-bold mb-2">Download Full Application
                            Form</label>
                        <div class="text-center mb-6">
                            <a href="https://drive.google.com/file/d/1bG1ybWpyk7cnXs3eO4-RbqvKPDVFe_re/view?usp=drive_link"
                                class="bg-[#ff9000] text-white px-6 py-3 rounded-lg hover:bg-[#ff9000]/80 transition duration-300">
                                Download Form
                            </a>
                        </div>
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
