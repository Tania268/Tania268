@extends('layouts.app')

@section('content')
    <!-- Dashboard Page -->
    <section class="relative py-20 bg-cover bg-center bg-no-repeat"
        style="background-image: url(https://www.thesslstore.com/blog/wp-content/uploads/2016/08/iStock_70722447_SMALL-698x419.jpg">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="text-4xl font-bold text-[#ff9900] mb-10 text-center">Dashboard</div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Your content here -->
        </div>
        </div>
    </section>

    <!-- Slider -->
    <section class="relative py-10 bg-white">
        <div class="container mx-auto text-center">
            <div class="relative inline-block">
                <h1 class="text-4xl font-bold text-[#2c5f7e] inline-block">QUELESS</h1>
                <span class="text-4xl font-bold text-[#ff9000] inline-block">
                    |
                    <span id="sliding-text"></span>
                </span>
            </div>
        </div>
    </section>

    <script>
        const words = ['SECURE', 'FAST', 'RELEVANT', 'NO QUEUES'];
        let index = 0;
        const slidingText = document.getElementById('sliding-text');

        function changeWord() {
            slidingText.textContent = words[index];
            index = (index + 1) % words.length;
        }

        setInterval(changeWord, 1000); // Change word every second
        changeWord(); // Initial call to display the first word
    </script>
    <!-- Features Section -->
    <section class="py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-file-alt text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Online Application Submission</h3>
                    <p>Submit your applications online with ease.</p>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-clock text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Real-Time Tracking</h3>
                    <p>Track the status of your applications in real-time.</p>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-bell text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Automated Notifications</h3>
                    <p>Receive notifications about the progress of your applications.</p>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-lock text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Secure Document Storage</h3>
                    <p>Store your documents securely in our system.</p>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-globe text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Multi-Language Support</h3>
                    <p>Access our services in multiple languages.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
