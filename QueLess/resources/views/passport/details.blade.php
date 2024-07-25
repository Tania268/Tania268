<!-- resources/views/passport/details.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10">
        <div class="bg-white p-5 rounded shadow-md">
            <h1 class="text-2xl font-bold mb-5">Passport Application Details</h1>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Full Name:</label>
                <p>{{ $passport->fullname }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Email:</label>
                <p>{{ $passport->email }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Physical Address:</label>
                <p>{{ $passport->physical_address }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Phone Number:</label>
                <p>{{ $passport->phone_number }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Department:</label>
                <p>{{ ucfirst(str_replace('_', ' ', $passport->department)) }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Documents:</label>
                <ul>
                    @foreach ($passport->documents as $key => $file)
                        <li>
                            <a href="{{ Storage::url($file) }}" target="_blank" class="text-blue-600 hover:underline">
                                {{ ucfirst(str_replace('_', ' ', $key)) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Total Fee:</label>
                <p>E{{ number_format($passport->total_fee, 2) }}</p>
            </div>
        </div>
    </div>
@endsection
