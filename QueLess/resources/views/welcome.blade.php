<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QueLess</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>


<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="text-xl font-bold text-[#2c5f7e]">QueLess</div>
            <nav class="space-x-4">
                <a href="{{ url('/') }}" class="text-gray-600 hover:text-[#ff9000]">Home</a>
                <a href="{{ route('services') }}" class="text-gray-600 hover:text-[#ff9000]">Services</a>
                <a href="#" class="text-gray-600 hover:text-[#ff9000]">Benefits</a>
                <a href="#" class="text-gray-600 hover:text-[#ff9000]">How It Works</a>
                <a href="#" class="text-gray-600 hover:text-[#ff9000]">Contact Us</a>
            </nav>
            <a href="{{ route('login') }}" class="bg-[#ff9000] text-white px-4 py-2 rounded">Get Started</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-[#2c5f7e] text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Simplify Your Government Service Applications</h1>
            <p class="mt-4 text-lg">Efficient, Transparent, and Fast Processing for All Your Government Service
                Needs
            </p>
            <a href="{{ route('services') }}" class="mt-6 bg-[#ff9000] text-white px-6 py-3 rounded inline-block">Start
                Your
                Application</a>
        </div>
    </section>

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

    <!-- Benefits Section -->
    <section class="bg-gray-200 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">Benefits</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Citizens</h3>
                    <ul class="list-disc list-inside">
                        <li class="mb-2">Quick and easy application process</li>
                        <li class="mb-2">Reduced wait times</li>
                        <li class="mb-2">24/7 access to services</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Government</h3>
                    <ul class="list-disc list-inside">
                        <li class="mb-2">Improved efficiency</li>
                        <li class="mb-2">Better resource management</li>
                        <li class="mb-2">Enhanced transparency</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">How It Works</h2>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-10">
                <div class="bg-white p-6 rounded shadow-md">
                    <a href="login.php"><i class="fas fa-user-plus text-blue-600 text-4xl mb-4"></i></a>
                    <h3 class="text-xl font-semibold mb-2">Sign Up and Login</h3>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-edit text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Fill Out Your Application</h3>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-upload text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Upload Required Documents</h3>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-paper-plane text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Submit and Track Your Application</h3>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <i class="fas fa-envelope text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Receive Updates and Notifications</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-[#2c5f7e] text-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">What Our Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white text-gray-800 p-6 rounded shadow-md">
                    <p class="mb-4">"The application process was so easy and fast. I got my approval in no time!"
                    </p>
                    <div class="flex items-center justify-center">
                        <img src="https://placehold.co/50x50" alt="User photo" class="rounded-full mr-4">
                        <div>
                            <p class="font-semibold">John Doe</p>
                            <p class="text-sm text-gray-600">Citizen</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white text-gray-800 p-6 rounded shadow-md">
                    <p class="mb-4">"Our department's efficiency has significantly improved thanks to
                        GovExpress."</p>
                    <div class="flex items-center justify-center">
                        <img src="https://placehold.co/50x50" alt="User photo" class="rounded-full mr-4">
                        <div>
                            <p class="font-semibold">Jane Smith</p>
                            <p class="text-sm text-gray-600">Government Official</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white text-gray-800 p-6 rounded shadow-md">
                    <p class="mb-4">"I love how I can track my application status in real-time. Great service!"
                    </p>
                    <div class="flex items-center justify-center">
                        <img src="https://placehold.co/50x50" alt="User photo" class="rounded-full mr-4">
                        <div>
                            <p class="font-semibold">Alice Johnson</p>
                            <p class="text-sm text-gray-600">Citizen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto text-center">
            <div class="mb-4">
                <a href="#" class="text-gray-400 hover:text-white mx-2">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white mx-2">Terms of Service</a>
                <a href="#" class="text-gray-400 hover:text-white mx-2">Contact Information</a>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>
