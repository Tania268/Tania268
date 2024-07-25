@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">View Civil Registrations</h1>

            <div class="bg-white p-6 rounded-lg shadow-md">
                @if ($civilRegistrations->isEmpty())
                    <p class="text-gray-600">No civil registrations found.</p>
                @else
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Full Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Age</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email Address</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Phone Number</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($civilRegistrations as $registration)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $registration->full_name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $registration->age }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $registration->email_address }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $registration->phone_number }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ Storage::url($registration->id_or_passport) }}"
                                            class="text-[#2c5f7e] hover:underline">ID/Passport</a>
                                        <a href="{{ Storage::url($registration->proof_of_residence) }}"
                                            class="text-[#2c5f7e] hover:underline">Proof of Residence</a>
                                        <a href="{{ Storage::url($registration->picture_or_photo) }}"
                                            class="text-[#2c5f7e] hover:underline">Picture/Photo</a>
                                        @if ($registration->witness_1)
                                            <a href="{{ Storage::url($registration->witness_1) }}"
                                                class="text-[#2c5f7e] hover:underline">Witness 1</a>
                                        @endif
                                        @if ($registration->witness_2)
                                            <a href="{{ Storage::url($registration->witness_2) }}"
                                                class="text-[#2c5f7e] hover:underline">Witness 2</a>
                                        @endif
                                        @if ($registration->proof_of_birth)
                                            <a href="{{ Storage::url($registration->proof_of_birth) }}"
                                                class="text-[#2c5f7e] hover:underline">Proof of Birth</a>
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
