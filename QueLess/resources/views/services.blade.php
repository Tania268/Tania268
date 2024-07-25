@extends('layouts.app')

@section('content')
    <!-- Services Page -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-[#2c5f7e] mb-10">Government Service Applications</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <a href="{{ route('service.licence_registration') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2"> Trading Licence Registration</h3>
                    <p>Apply for various types of licences.</p>
                </a>
                <a href="{{ route('service.visa_application') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Visa Application</h3>
                    <p>Submit your visa application online.</p>
                </a>
                <a href="{{ route('service.refugee_asylum') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Refugee Asylum</h3>
                    <p>Apply for refugee asylum status.</p>
                </a>
                <a href="{{ route('service.passport') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Passport</h3>
                    <p>Apply for a new passport or renew an existing one.</p>
                </a>
                <a href="{{ route('service.civil_registration') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Civil Registration</h3>
                    <p>Register civil events like births, deaths, and marriages.</p>
                </a>
                <a href="{{ route('service.identity_cards') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Identity Cards</h3>
                    <p>Apply for or renew your identity card.</p>
                </a>
                <a href="{{ route('service.citizenship') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Citizenship</h3>
                    <p>Apply for citizenship or permanent residency.</p>
                </a>
                <a href="{{ route('service.company_registration') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Company Registration</h3>
                    <p>Register a new company or business.</p>
                </a>
                <a href="{{ route('service.trading_licence') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Trading Licence</h3>
                    <p>Apply for a trading licence for your business.</p>
                </a>
                <a href="{{ route('service.work_permits') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Work Permits</h3>
                    <p>Apply for or renew your work permit.</p>
                </a>
                <a href="{{ route('service.vehicle_licence') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Vehicle Licence</h3>
                    <p>Apply for or renew your vehicle licence.</p>
                </a>
                <a href="{{ route('service.birth_certificate') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Birth Certificate</h3>
                    <p>Apply for a new or replacement birth certificate.</p>
                </a>
                <a href="{{ route('service.private_ewsc') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Private Companies - EWSC</h3>
                    <p>Services for the Eswatini Water Services Corporation.</p>
                </a>
                <a href="{{ route('service.private_enpf') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Private Companies - ENPF</h3>
                    <p>Services for the Eswatini National Provident Fund.</p>
                </a>
                <a href="{{ route('service.private_eec') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Private Companies - EEC</h3>
                    <p>Services for the Eswatini Electricity Company</p>
                </a>
                <a href="{{ route('service.private_pspf') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:bg-[#ff9000] hover:text-white transition duration-300">
                    <h3 class="text-xl font-semibold mb-2">Private Companies - PSPF</h3>
                    <p>Services for the Public Service Pension Fund.</p>
                </a>
            </div>
        </div>
    </section>
@endsection
