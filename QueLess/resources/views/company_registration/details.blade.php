@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Company Registration Details</h2>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif
        <ul>
            <li><strong>Full Name:</strong> {{ $companyRegistration->fullname }}</li>
            <li><strong>Email:</strong> {{ $companyRegistration->email }}</li>
            <li><strong>Physical Address:</strong> {{ $companyRegistration->physical_address }}</li>
            <li><strong>Phone Number:</strong> {{ $companyRegistration->phone_number }}</li>
            <li><strong>Company Name:</strong> {{ $companyRegistration->company_name }}</li>
            <li><strong>Reservation Status:</strong> {{ $companyRegistration->reservation_status }}</li>
            <li><strong>Payment Status:</strong> {{ $companyRegistration->payment_status ? 'Paid' : 'Unpaid' }}</li>
        </ul>

        @if ($companyRegistration->documents)
            <h3>Documents</h3>
            <ul>
                @foreach ($companyRegistration->documents as $document => $path)
                    <li>
                        <a href="{{ Storage::url($path) }}"
                            target="_blank">{{ ucfirst(str_replace('_', ' ', $document)) }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
