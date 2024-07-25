@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">View Citizenship Applications</h1>

            <div class="bg-white p-6 rounded-lg shadow-md">
                @if ($applications->isEmpty())
                    <p class="text-gray-600">No applications found.</p>
                @else
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Full Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Class</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($applications as $application)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $application->user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $application->class }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ Storage::url($application->application_form) }}"
                                            class="text-[#2c5f7e] hover:underline">Application Form</a>
                                        <a href="{{ Storage::url($application->finger_prints) }}"
                                            class="text-[#2c5f7e] hover:underline">Finger Prints</a>
                                        <a href="{{ Storage::url($application->covering_letter) }}"
                                            class="text-[#2c5f7e] hover:underline">Covering Letter</a>
                                        <a href="{{ Storage::url($application->passport_photo_1) }}"
                                            class="text-[#2c5f7e] hover:underline">Passport Photo 1</a>
                                        <a href="{{ Storage::url($application->passport_photo_2) }}"
                                            class="text-[#2c5f7e] hover:underline">Passport Photo 2</a>

                                        @if ($application->residence_permit_or_birth_certificate)
                                            <a href="{{ Storage::url($application->residence_permit_or_birth_certificate) }}"
                                                class="text-[#2c5f7e] hover:underline">Residence Permit / Birth
                                                Certificate</a>
                                        @endif
                                        @if ($application->covering_letter_from_husband)
                                            <a href="{{ Storage::url($application->covering_letter_from_husband) }}"
                                                class="text-[#2c5f7e] hover:underline">Covering Letter from Husband</a>
                                        @endif
                                        @if ($application->husband_birth_certificate)
                                            <a href="{{ Storage::url($application->husband_birth_certificate) }}"
                                                class="text-[#2c5f7e] hover:underline">Husband Birth Certificate</a>
                                        @endif
                                        @if ($application->marriage_certificate)
                                            <a href="{{ Storage::url($application->marriage_certificate) }}"
                                                class="text-[#2c5f7e] hover:underline">Marriage Certificate</a>
                                        @endif
                                        @if ($application->birth_certificate)
                                            <a href="{{ Storage::url($application->birth_certificate) }}"
                                                class="text-[#2c5f7e] hover:underline">Birth Certificate</a>
                                        @endif
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
