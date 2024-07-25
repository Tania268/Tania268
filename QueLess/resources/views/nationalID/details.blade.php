@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">National ID Application Details</h1>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="mb-4">
                    <h2 class="text-2xl font-bold text-gray-700 mb-2">Applicant Information</h2>
                    <p><span class="font-semibold">Full Name:</span> {{ $nationalid->fullname }}</p>
                    <p><span class="font-semibold">Email:</span> {{ $nationalid->email }}</p>
                    <p><span class="font-semibold">Physical Address:</span> {{ $nationalid->physical_address }}</p>
                    <p><span class="font-semibold">Phone Number:</span> {{ $nationalid->phone_number }}</p>
                    <p><span class="font-semibold">Applicant Type:</span> {{ ucfirst($nationalid->applicant_type) }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-2xl font-bold text-gray-700 mb-2">Uploaded Documents</h2>
                    <ul>
                        @foreach ($nationalid->documents as $key => $document)
                            <li><span class="font-semibold">{{ ucwords(str_replace('_', ' ', $key)) }}:</span> <a
                                    href="{{ asset('storage/' . $document) }}" class="text-blue-500 hover:underline"
                                    target="_blank">View Document</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-4">
                    <h2 class="text-2xl font-bold text-gray-700 mb-2">Total Fee</h2>
                    <p>{{ $nationalid->total_fee }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
