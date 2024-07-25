@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">View Visa Application Uploads</h1>

            <div class="bg-white p-6 rounded-lg shadow-md">
                @if ($applications->isEmpty())
                    <p>No visa applications have been submitted yet.</p>
                @else
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-gray-800 text-white font-bold uppercase text-sm leading-4 tracking-wider">
                                    Full Name</th>
                                <th
                                    class="py-4 px-6 bg-gray-800 text-white font-bold uppercase text-sm leading-4 tracking-wider">
                                    Age</th>
                                <th
                                    class="py-4 px-6 bg-gray-800 text-white font-bold uppercase text-sm leading-4 tracking-wider">
                                    Email</th>
                                <th
                                    class="py-4 px-6 bg-gray-800 text-white font-bold uppercase text-sm leading-4 tracking-wider">
                                    Phone Number</th>
                                <th
                                    class="py-4 px-6 bg-gray-800 text-white font-bold uppercase text-sm leading-4 tracking-wider">
                                    Submitted At</th>
                                <th
                                    class="py-4 px-6 bg-gray-800 text-white font-bold uppercase text-sm leading-4 tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $application)
                                <tr>
                                    <td class="py-4 px-6 border-b">{{ $application->full_name }}</td>
                                    <td class="py-4 px-6 border-b">{{ $application->age }}</td>
                                    <td class="py-4 px-6 border-b">{{ $application->email_address }}</td>
                                    <td class="py-4 px-6 border-b">{{ $application->phone_number }}</td>
                                    <td class="py-4 px-6 border-b">{{ $application->created_at->format('d-m-Y H:i:s') }}
                                    </td>
                                    <td class="py-4 px-6 border-b">
                                        <a href="{{ asset('storage/' . $application->completed_form) }}"
                                            class="text-blue-600 hover:underline mr-4" target="_blank">Application Form</a>
                                        <a href="{{ asset('storage/' . $application->police_certificate) }}"
                                            class="text-blue-600 hover:underline mr-4" target="_blank">Police
                                            Certificate</a>
                                        <a href="{{ asset('storage/' . $application->passport_photo_1) }}"
                                            class="text-blue-600 hover:underline mr-4" target="_blank">Passport Photo 1</a>
                                        <a href="{{ asset('storage/' . $application->passport_photo_2) }}"
                                            class="text-blue-600 hover:underline mr-4" target="_blank">Passport Photo 2</a>
                                        <a href="{{ asset('storage/' . $application->medical_references) }}"
                                            class="text-blue-600 hover:underline mr-4" target="_blank">Medical
                                            References</a>
                                        <a href="{{ asset('storage/' . $application->employer_motivation_letter) }}"
                                            class="text-blue-600 hover:underline mr-4" target="_blank">Employer Motivation
                                            Letter</a>
                                        <a href="{{ asset('storage/' . $application->qualification_copies) }}"
                                            class="text-blue-600 hover:underline mr-4" target="_blank">Qualifications</a>
                                        <a href="{{ asset('storage/' . $application->position_proof) }}"
                                            class="text-blue-600 hover:underline mr-4" target="_blank">Position Proof</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
@endsection
