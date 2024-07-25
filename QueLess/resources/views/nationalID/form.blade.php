@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">National ID Application Form</h1>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('nationalid.submitForm') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-3 border rounded"
                            value="{{ old('email') }}" required>
                        @error('email')
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
                        <label for="age" class="block text-gray-700 font-bold mb-2">Age</label>
                        <input type="number" name="age" id="age" class="w-full p-3 border rounded"
                            value="{{ old('age') }}" required>
                        @error('age')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="applicant_type" class="block text-gray-700 font-bold mb-2">Applicant Type</label>
                        <select name="applicant_type" id="applicant_type" class="w-full p-3 border rounded" required>
                            <option value="" disabled selected>Select Applicant Type</option>
                            <option value="liswati">Liswati</option>
                            <option value="non_liswati">Non-Liswati</option>
                        </select>
                        @error('applicant_type')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div id="liswati_docs" class="applicant-type-docs hidden">
                        <div class="mb-4">
                            <label for="birth_certificate" class="block text-gray-700 font-bold mb-2">Certified Copy of
                                Birth Certificate</label>
                            <input type="file" name="birth_certificate" id="birth_certificate"
                                class="w-full p-3 border rounded" required>
                            @error('birth_certificate')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="graded_tax_certificate" class="block text-gray-700 font-bold mb-2">Certified Copy of
                                Graded Tax Certificate (for males 16 years and above)</label>
                            <input type="file" name="graded_tax_certificate" id="graded_tax_certificate"
                                class="w-full p-3 border rounded">
                            @error('graded_tax_certificate')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="citizenship_certificate" class="block text-gray-700 font-bold mb-2">Certified Copy
                                of Citizenship Certificate</label>
                            <input type="file" name="citizenship_certificate" id="citizenship_certificate"
                                class="w-full p-3 border rounded">
                            @error('citizenship_certificate')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div id="non_liswati_docs" class="applicant-type-docs hidden">
                        <div class="mb-4">
                            <label for="passport_copy" class="block text-gray-700 font-bold mb-2">Certified Copy of Passport
                                Page with Particulars, Photo, and Entry Stamp</label>
                            <input type="file" name="passport_copy" id="passport_copy" class="w-full p-3 border rounded">
                            @error('passport_copy')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="residence_permit" class="block text-gray-700 font-bold mb-2">Valid Temporal
                                Residence, Work or Student Permit</label>
                            <input type="file" name="residence_permit" id="residence_permit"
                                class="w-full p-3 border rounded">
                            @error('residence_permit')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="tax_clearance_certificate" class="block text-gray-700 font-bold mb-2">Tax
                                Clearance
                                Certificate</label>
                            <input type="file" name="tax_clearance_certificate" id="tax_clearance_certificate"
                                class="w-full p-3 border rounded">
                            @error('tax_clearance_certificate')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <button type="submit"
                            class="bg-[#ff9900] text-white py-3 px-6 rounded-lg shadow-md hover:bg-[#ff8c00]">Submit
                            Application</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const applicantTypeSelect = document.getElementById('applicant_type');
            const liswatiDocs = document.getElementById('liswati_docs');
            const nonLiswatiDocs = document.getElementById('non_liswati_docs');

            applicantTypeSelect.addEventListener('change', function() {
                if (applicantTypeSelect.value === 'liswati') {
                    liswatiDocs.classList.remove('hidden');
                    nonLiswatiDocs.classList.add('hidden');
                } else if (applicantTypeSelect.value === 'non_liswati') {
                    nonLiswatiDocs.classList.remove('hidden');
                    liswatiDocs.classList.add('hidden');
                } else {
                    liswatiDocs.classList.add('hidden');
                    nonLiswatiDocs.classList.add('hidden');
                }
            });
        });
    </script>
@endsection
