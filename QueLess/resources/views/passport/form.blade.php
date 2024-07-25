@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">Passport Application Form</h1>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('passport.submitForm') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="fullname" class="block text-gray-700 font-bold mb-2">Full Name</label>
                        <input type="text" name="fullname" id="fullname" class="w-full p-3 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-3 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="physical_address" class="block text-gray-700 font-bold mb-2">Physical Address</label>
                        <input type="text" name="physical_address" id="physical_address"
                            class="w-full p-3 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="phone_number" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="w-full p-3 border rounded"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="department" class="block text-gray-700 font-bold mb-2">Department</label>
                        <select name="department" id="department" class="w-full p-3 border rounded" required>
                            <option value="">Select Department</option>
                            <option value="international_passport_holidays">International Passport - Holidays Outside SADC
                                Region</option>
                            <option value="international_passport_private_visit">International Passport - Private Visit
                            </option>
                            <option value="international_passport_study">International Passport - Study</option>
                            <option value="civil_servants_official_duty">Civil Servants Traveling on Official Duty</option>
                            <option value="government_parastatals_private_companies">Officials from Government
                                Parastatals/Private Companies</option>
                            <option value="renewal_passport">Renewal of Passport / Regular Passport</option>
                        </select>
                    </div>

                    <!-- Document Uploads -->
                    <div id="document-uploads" class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Upload Documents</label>
                        <!-- Fields will be dynamically inserted here based on selected department -->
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-[#ff9000] text-white px-6 py-3 rounded-lg hover:bg-[#ff9000]/80 transition duration-300">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('department').addEventListener('change', function() {
            const department = this.value;
            const documentUploads = document.getElementById('document-uploads');
            documentUploads.innerHTML = '';

            switch (department) {
                case 'international_passport_holidays':
                    documentUploads.innerHTML += `
                    <label for="application_letter" class="block text-gray-700 font-bold mb-2">Application Letter</label>
                    <input type="file" name="documents[application_letter]" class="w-full p-3 border rounded" required>

                    <label for="bank_statement" class="block text-gray-700 font-bold mb-2">Three Months Bank Statement</label>
                    <input type="file" name="documents[bank_statement]" class="w-full p-3 border rounded" required>

                    <label for="itinerary" class="block text-gray-700 font-bold mb-2">Bookings/Itinerary</label>
                    <input type="file" name="documents[itinerary]" class="w-full p-3 border rounded" required>

                    <label for="identity_copy" class="block text-gray-700 font-bold mb-2">Certified Copy of Identity</label>
                    <input type="file" name="documents[identity_copy]" class="w-full p-3 border rounded" required>

                    <label for="birth_certificate" class="block text-gray-700 font-bold mb-2">Birth Certificate</label>
                    <input type="file" name="documents[birth_certificate]" class="w-full p-3 border rounded" required>

                    <label for="marriage_certificate" class="block text-gray-700 font-bold mb-2">Marriage Certificate (if applicable)</label>
                    <input type="file" name="documents[marriage_certificate]" class="w-full p-3 border rounded">

                    <label for="passport_photo_1" class="block text-gray-700 font-bold mb-2">Passport Photo 1</label>
                    <input type="file" name="documents[passport_photo_1]" class="w-full p-3 border rounded" required>

                    <label for="passport_photo_2" class="block text-gray-700 font-bold mb-2">Passport Photo 2</label>
                    <input type="file" name="documents[passport_photo_2]" class="w-full p-3 border rounded" required>

                    <label for="finger_prints" class="block text-gray-700 font-bold mb-2">Finger Prints</label>
                    <input type="file" name="documents[finger_prints]" class="w-full p-3 border rounded" required>
                `;
                    break;
                case 'international_passport_private_visit':
                    documentUploads.innerHTML += `
                    <label for="application_letter" class="block text-gray-700 font-bold mb-2">Application Letter</label>
                    <input type="file" name="documents[application_letter]" class="w-full p-3 border rounded" required>

                    <label for="invitation_letter" class="block text-gray-700 font-bold mb-2">Invitation Letter from Host</label>
                    <input type="file" name="documents[invitation_letter]" class="w-full p-3 border rounded" required>

                    <label for="bank_statement" class="block text-gray-700 font-bold mb-2">Three Months Bank Statement</label>
                    <input type="file" name="documents[bank_statement]" class="w-full p-3 border rounded" required>

                    <label for="identity_copy" class="block text-gray-700 font-bold mb-2">Certified Copy of Identity</label>
                    <input type="file" name="documents[identity_copy]" class="w-full p-3 border rounded" required>

                    <label for="birth_certificate" class="block text-gray-700 font-bold mb-2">Birth Certificate</label>
                    <input type="file" name="documents[birth_certificate]" class="w-full p-3 border rounded" required>

                    <label for="marriage_certificate" class="block text-gray-700 font-bold mb-2">Marriage Certificate (if applicable)</label>
                    <input type="file" name="documents[marriage_certificate]" class="w-full p-3 border rounded">

                    <label for="passport_photo_1" class="block text-gray-700 font-bold mb-2">Passport Photo 1</label>
                    <input type="file" name="documents[passport_photo_1]" class="w-full p-3 border rounded" required>

                    <label for="passport_photo_2" class="block text-gray-700 font-bold mb-2">Passport Photo 2</label>
                    <input type="file" name="documents[passport_photo_2]" class="w-full p-3 border rounded" required>

                    <label for="finger_prints" class="block text-gray-700 font-bold mb-2">Finger Prints</label>
                    <input type="file" name="documents[finger_prints]" class="w-full p-3 border rounded" required>
                `;
                    break;
                case 'international_passport_study':
                    documentUploads.innerHTML += `
                    <label for="application_letter" class="block text-gray-700 font-bold mb-2">Application Letter</label>
                    <input type="file" name="documents[application_letter]" class="w-full p-3 border rounded" required>

                    <label for="consent_letter" class="block text-gray-700 font-bold mb-2">Consent Letter from Parents or Scholarship Award</label>
                    <input type="file" name="documents[consent_letter]" class="w-full p-3 border rounded" required>

                    <label for="acceptance_letter" class="block text-gray-700 font-bold mb-2">Acceptance/Administration Letter & Scholarship Award</label>
                    <input type="file" name="documents[acceptance_letter]" class="w-full p-3 border rounded" required>

                    <label for="bank_statement" class="block text-gray-700 font-bold mb-2">Parents' Three Months Bank Statement (if parents are responsible)</label>
                    <input type="file" name="documents[bank_statement]" class="w-full p-3 border rounded">

                    <label for="identity_copy" class="block text-gray-700 font-bold mb-2">Certified Copy of Identity</label>
                    <input type="file" name="documents[identity_copy]" class="w-full p-3 border rounded" required>

                    <label for="birth_certificate" class="block text-gray-700 font-bold mb-2">Birth Certificate</label>
                    <input type="file" name="documents[birth_certificate]" class="w-full p-3 border rounded" required>

                    <label for="marriage_certificate" class="block text-gray-700 font-bold mb-2">Marriage Certificate (if applicable)</label>
                    <input type="file" name="documents[marriage_certificate]" class="w-full p-3 border rounded">

                    <label for="passport_photo_1" class="block text-gray-700 font-bold mb-2">Passport Photo 1</label>
                    <input type="file" name="documents[passport_photo_1]" class="w-full p-3 border rounded" required>

                    <label for="passport_photo_2" class="block text-gray-700 font-bold mb-2">Passport Photo 2</label>
                    <input type="file" name="documents[passport_photo_2]" class="w-full p-3 border rounded" required>

                    <label for="finger_prints" class="block text-gray-700 font-bold mb-2">Finger Prints</label>
                    <input type="file" name="documents[finger_prints]" class="w-full p-3 border rounded" required>
                `;
                    break;
                case 'civil_servants_official_duty':
                    documentUploads.innerHTML += `
                    <label for="memorandum_letter" class="block text-gray-700 font-bold mb-2">Memorandum Letter</label>
                    <input type="file" name="documents[memorandum_letter]" class="w-full p-3 border rounded" required>

                    <label for="identity_copy" class="block text-gray-700 font-bold mb-2">Certified Copy of Identity</label>
                    <input type="file" name="documents[identity_copy]" class="w-full p-3 border rounded" required>

                    <label for="birth_certificate" class="block text-gray-700 font-bold mb-2">Birth Certificate</label>
                    <input type="file" name="documents[birth_certificate]" class="w-full p-3 border rounded" required>

                    <label for="marriage_certificate" class="block text-gray-700 font-bold mb-2">Marriage Certificate (if applicable)</label>
                    <input type="file" name="documents[marriage_certificate]" class="w-full p-3 border rounded">

                    <label for="passport_photo_1" class="block text-gray-700 font-bold mb-2">Passport Photo 1</label>
                    <input type="file" name="documents[passport_photo_1]" class="w-full p-3 border rounded" required>

                    <label for="passport_photo_2" class="block text-gray-700 font-bold mb-2">Passport Photo 2</label>
                    <input type="file" name="documents[passport_photo_2]" class="w-full p-3 border rounded" required>

                    <label for="supporting_documents" class="block text-gray-700 font-bold mb-2">Supporting Documents</label>
                    <input type="file" name="documents[supporting_documents]" class="w-full p-3 border rounded" required>

                    <label for="finger_prints" class="block text-gray-700 font-bold mb-2">Finger Prints</label>
                    <input type="file" name="documents[finger_prints]" class="w-full p-3 border rounded" required>
                `;
                    break;
                case 'government_parastatals_private_companies':
                    documentUploads.innerHTML += `
                    <label for="application_letter" class="block text-gray-700 font-bold mb-2">Application Letter on Company Letterheads</label>
                    <input type="file" name="documents[application_letter]" class="w-full p-3 border rounded" required>

                    <label for="supporting_documents" class="block text-gray-700 font-bold mb-2">Supporting Documents</label>
                    <input type="file" name="documents[supporting_documents]" class="w-full p-3 border rounded" required>

                    <label for="identity_copy" class="block text-gray-700 font-bold mb-2">Certified Copy of Identity</label>
                    <input type="file" name="documents[identity_copy]" class="w-full p-3 border rounded" required>

                    <label for="birth_certificate" class="block text-gray-700 font-bold mb-2">Birth Certificate</label>
                    <input type="file" name="documents[birth_certificate]" class="w-full p-3 border rounded" required>

                    <label for="marriage_certificate" class="block text-gray-700 font-bold mb-2">Marriage Certificate (if applicable)</label>
                    <input type="file" name="documents[marriage_certificate]" class="w-full p-3 border rounded">

                    <label for="passport_photo_1" class="block text-gray-700 font-bold mb-2">Passport Photo 1</label>
                    <input type="file" name="documents[passport_photo_1]" class="w-full p-3 border rounded" required>

                    <label for="passport_photo_2" class="block text-gray-700 font-bold mb-2">Passport Photo 2</label>
                    <input type="file" name="documents[passport_photo_2]" class="w-full p-3 border rounded" required>

                    <label for="finger_prints" class="block text-gray-700 font-bold mb-2">Finger Prints</label>
                    <input type="file" name="documents[finger_prints]" class="w-full p-3 border rounded" required>
                `;
                    break;
                case 'renewal_passport':
                    documentUploads.innerHTML += `
                    <label for="application_letter" class="block text-gray-700 font-bold mb-2">Application Letter</label>
                    <input type="file" name="documents[application_letter]" class="w-full p-3 border rounded" required>

                    <label for="bank_statement" class="block text-gray-700 font-bold mb-2">Three Months Bank Statement</label>
                    <input type="file" name="documents[bank_statement]" class="w-full p-3 border rounded" required>

                    <label for="identity_copy" class="block text-gray-700 font-bold mb-2">Certified Copy of Identity</label>
                    <input type="file" name="documents[identity_copy]" class="w-full p-3 border rounded" required>

                    <label for="birth_certificate" class="block text-gray-700 font-bold mb-2">Birth Certificate</label>
                    <input type="file" name="documents[birth_certificate]" class="w-full p-3 border rounded" required>

                    <label for="marriage_certificate" class="block text-gray-700 font-bold mb-2">Marriage Certificate (if applicable)</label>
                    <input type="file" name="documents[marriage_certificate]" class="w-full p-3 border rounded">

                    <label for="passport_photo_1" class="block text-gray-700 font-bold mb-2">Passport Photo 1</label>
                    <input type="file" name="documents[passport_photo_1]" class="w-full p-3 border rounded" required>

                    <label for="passport_photo_2" class="block text-gray-700 font-bold mb-2">Passport Photo 2</label>
                    <input type="file" name="documents[passport_photo_2]" class="w-full p-3 border rounded" required>

                    <label for="finger_prints" class="block text-gray-700 font-bold mb-2">Finger Prints</label>
                    <input type="file" name="documents[finger_prints]" class="w-full p-3 border rounded" required>
                `;
                    break;
                default:
                    documentUploads.innerHTML = '';
                    break;
            }
        });
    </script>
@endsection
