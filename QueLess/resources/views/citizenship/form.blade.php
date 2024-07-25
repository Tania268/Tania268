@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">Citizenship Application Form</h1>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('citizenship.submitForm') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="class" class="block text-gray-700 font-bold mb-2">Select Class</label>
                        <select name="class" id="class" class="w-full p-3 border rounded" required>
                            <option value="C1">Class C1 (Applicants above 21 years)</option>
                            <option value="C2">Class C2 (Women married to a Swazi citizen by birth)</option>
                            <option value="C3">Class C3 (Applicants below 21 years)</option>
                        </select>
                        @error('class')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="application_form" class="block text-gray-700 font-bold mb-2">Upload Application
                            Form</label>
                        <input type="file" name="application_form" id="application_form"
                            class="w-full p-3 border rounded" required>
                        @error('application_form')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="finger_prints" class="block text-gray-700 font-bold mb-2">Upload Finger Prints</label>
                        <input type="file" name="finger_prints" id="finger_prints" class="w-full p-3 border rounded"
                            required>
                        @error('finger_prints')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="covering_letter" class="block text-gray-700 font-bold mb-2">Upload Covering
                            Letter</label>
                        <input type="file" name="covering_letter" id="covering_letter" class="w-full p-3 border rounded"
                            required>
                        @error('covering_letter')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div id="class-c1-fields" class="hidden">
                        <div class="mb-4">
                            <label for="residence_permit_or_birth_certificate"
                                class="block text-gray-700 font-bold mb-2">Upload Residence Permit or Certified Birth
                                Certificate</label>
                            <input type="file" name="residence_permit_or_birth_certificate"
                                id="residence_permit_or_birth_certificate" class="w-full p-3 border rounded">
                        </div>

                        <div class="mb-4">
                            <label for="non_swazi_pin" class="block text-gray-700 font-bold mb-2">Non-Swazi Pin / Khonta
                                Classified Pin (if applicable)</label>
                            <input type="text" name="non_swazi_pin" id="non_swazi_pin" class="w-full p-3 border rounded">
                        </div>
                    </div>

                    <div id="class-c2-fields" class="hidden">
                        <div class="mb-4">
                            <label for="covering_letter_from_husband" class="block text-gray-700 font-bold mb-2">Upload
                                Covering Letter from Husband</label>
                            <input type="file" name="covering_letter_from_husband" id="covering_letter_from_husband"
                                class="w-full p-3 border rounded">
                        </div>

                        <div class="mb-4">
                            <label for="husband_birth_certificate" class="block text-gray-700 font-bold mb-2">Upload Husband
                                Birth or Citizenship Certificate</label>
                            <input type="file" name="husband_birth_certificate" id="husband_birth_certificate"
                                class="w-full p-3 border rounded">
                        </div>

                        <div class="mb-4">
                            <label for="marriage_certificate" class="block text-gray-700 font-bold mb-2">Upload Marriage
                                Certificate</label>
                            <input type="file" name="marriage_certificate" id="marriage_certificate"
                                class="w-full p-3 border rounded">
                        </div>

                        <div class="mb-4">
                            <label for="husband_pin" class="block text-gray-700 font-bold mb-2">Husband Pin</label>
                            <input type="text" name="husband_pin" id="husband_pin" class="w-full p-3 border rounded">
                        </div>

                        <div class="mb-4">
                            <label for="wife_pin" class="block text-gray-700 font-bold mb-2">Wife Pin</label>
                            <input type="text" name="wife_pin" id="wife_pin" class="w-full p-3 border rounded">
                        </div>
                    </div>

                    <div id="class-c3-fields" class="hidden">
                        <div class="mb-4">
                            <label for="birth_certificate" class="block text-gray-700 font-bold mb-2">Upload Birth
                                Certificate</label>
                            <input type="file" name="birth_certificate" id="birth_certificate"
                                class="w-full p-3 border rounded">
                        </div>

                        <div class="mb-4">
                            <label for="parents_citizenship_status" class="block text-gray-700 font-bold mb-2">Parents
                                Citizenship Status</label>
                            <input type="text" name="parents_citizenship_status" id="parents_citizenship_status"
                                class="w-full p-3 border rounded">
                        </div>

                        <div class="mb-4">
                            <label for="passport_number" class="block text-gray-700 font-bold mb-2">Passport Number
                                (optional)</label>
                            <input type="text" name="passport_number" id="passport_number"
                                class="w-full p-3 border rounded">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="passport_photo_1" class="block text-gray-700 font-bold mb-2">Upload Passport Size
                            Photo 1</label>
                        <input type="file" name="passport_photo_1" id="passport_photo_1"
                            class="w-full p-3 border rounded" required>
                        @error('passport_photo_1')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="passport_photo_2" class="block text-gray-700 font-bold mb-2">Upload Passport Size
                            Photo 2</label>
                        <input type="file" name="passport_photo_2" id="passport_photo_2"
                            class="w-full p-3 border rounded" required>
                        @error('passport_photo_2')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-[#ff9900] text-white p-3 rounded font-bold hover:bg-[#e68a00]">Proceed</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('class').addEventListener('change', function() {
            document.getElementById('class-c1-fields').style.display = 'none';
            document.getElementById('class-c2-fields').style.display = 'none';
            document.getElementById('class-c3-fields').style.display = 'none';

            if (this.value === 'C1') {
                document.getElementById('class-c1-fields').style.display = 'block';
            } else if (this.value === 'C2') {
                document.getElementById('class-c2-fields').style.display = 'block';
            } else if (this.value === 'C3') {
                document.getElementById('class-c3-fields').style.display = 'block';
            }
        });
    </script>
@endsection
