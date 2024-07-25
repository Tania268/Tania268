@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10 text-center">Submitted Forms</h1>

            <div class="bg-white p-6 rounded-lg shadow-md">
                @if ($submittedForms->isEmpty())
                    <p>No forms submitted yet.</p>
                @else
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Full Name</th>
                                <th class="py-2 px-4 border-b">Age</th>
                                <th class="py-2 px-4 border-b">Physical Address</th>
                                <th class="py-2 px-4 border-b">Phone Number</th>
                                <th class="py-2 px-4 border-b">Email Address</th>
                                <th class="py-2 px-4 border-b">Documents</th>
                                <th class="py-2 px-4 border-b">Submitted At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submittedForms as $form)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $form->full_name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $form->age }}</td>
                                    <td class="py-2 px-4 border-b">{{ $form->physical_address }}</td>
                                    <td class="py-2 px-4 border-b">{{ $form->phone_number }}</td>
                                    <td class="py-2 px-4 border-b">{{ $form->email_address }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <ul>
                                            <li><a href="{{ Storage::url($form->lease_agreement) }}"
                                                    class="text-blue-500">Lease Agreement</a></li>
                                            <li><a href="{{ Storage::url($form->bank_statement) }}"
                                                    class="text-blue-500">Bank Statement</a></li>
                                            @if ($form->temporary_resident_permit)
                                                <li><a href="{{ Storage::url($form->temporary_resident_permit) }}"
                                                        class="text-blue-500">Temporary Resident Permit</a></li>
                                            @endif
                                            <li><a href="{{ Storage::url($form->citizenship_certificate) }}"
                                                    class="text-blue-500">Citizenship Certificate</a></li>
                                            <li><a href="{{ Storage::url($form->certificate_of_incorporation) }}"
                                                    class="text-blue-500">Certificate of Incorporation</a></li>
                                            <li><a href="{{ Storage::url($form->memorandum_articles) }}"
                                                    class="text-blue-500">Memorandum and Articles of Association</a></li>
                                            <li><a href="{{ Storage::url($form->form_j) }}" class="text-blue-500">Form
                                                    J</a></li>
                                            <li><a href="{{ Storage::url($form->form_c) }}" class="text-blue-500">Form
                                                    C</a></li>
                                        </ul>
                                    </td>
                                    <td class="py-2 px-4 border-b">{{ $form->created_at->format('d-m-Y H:i:s') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
@endsection
