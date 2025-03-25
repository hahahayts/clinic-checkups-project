<script setup>
import { ref } from "vue";
</script>

<template>
    <section class="bg-gray-50 text-gray-900">
        <!-- Navigation -->
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <h1 class="text-2xl font-bold text-blue-600">
                                MedConnect
                            </h1>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a
                            href="/login"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition"
                        >
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
            <div
                class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 text-center"
            >
                <h1 class="text-4xl font-extrabold sm:text-5xl mb-4">
                    Healthcare Scheduling Made Simple
                </h1>
                <p class="mt-4 text-xl max-w-3xl mx-auto">
                    Easily book, manage, and track your medical appointments
                    with just a few clicks.
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <a
                        href="#features"
                        class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100 transition"
                    >
                        Learn More
                    </a>
                    <a
                        href="#"
                        class="bg-green-500 text-white px-6 py-3 rounded-md font-semibold hover:bg-green-600 transition"
                    >
                        Get Started
                    </a>
                </div>
            </div>
        </header>

        <!-- Features Section -->
        <section id="features" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        Powerful Features for Seamless Healthcare Management
                    </h2>
                    <p class="mt-4 text-xl text-gray-600">
                        Designed to simplify scheduling for patients and
                        healthcare providers
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div
                        class="bg-gray-50 p-6 rounded-lg shadow-md text-center"
                    >
                        <div class="flex justify-center mb-4">
                            <i
                                data-feather="calendar"
                                class="text-blue-600 w-12 h-12"
                            ></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Easy Booking</h3>
                        <p class="text-gray-600">
                            Book appointments with available doctors instantly.
                            View multiple time slots and choose what works best
                            for you.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-gray-50 p-6 rounded-lg shadow-md text-center"
                    >
                        <div class="flex justify-center mb-4">
                            <i
                                data-feather="bell"
                                class="text-blue-600 w-12 h-12"
                            ></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            Smart Reminders
                        </h3>
                        <p class="text-gray-600">
                            Receive automated SMS and email reminders to reduce
                            missed appointments and improve healthcare
                            continuity.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-gray-50 p-6 rounded-lg shadow-md text-center"
                    >
                        <div class="flex justify-center mb-4">
                            <i
                                data-feather="shield"
                                class="text-blue-600 w-12 h-12"
                            ></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            Secure Platform
                        </h3>
                        <p class="text-gray-600">
                            Advanced security protocols ensure your personal and
                            medical information remains confidential and
                            protected.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="bg-gray-100 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        How MedConnect Works
                    </h2>
                    <p class="mt-4 text-xl text-gray-600">
                        A simple, intuitive process for booking medical
                        appointments
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-4 text-2xl font-bold"
                        >
                            1
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Register</h3>
                        <p class="text-gray-600">
                            Create your secure account with basic personal and
                            contact information.
                        </p>
                    </div>

                    <div class="text-center">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-4 text-2xl font-bold"
                        >
                            2
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            Select Doctor
                        </h3>
                        <p class="text-gray-600">
                            Browse available doctors, view their specialties,
                            and check real-time availability.
                        </p>
                    </div>

                    <div class="text-center">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-4 text-2xl font-bold"
                        >
                            3
                        </div>
                        <h3 class="text-xl font-semibold mb-3">
                            Confirm Appointment
                        </h3>
                        <p class="text-gray-600">
                            Choose your preferred time slot and confirm your
                            appointment with a single click.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section
            class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-16"
        >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-extrabold sm:text-4xl mb-6">
                    Ready to Simplify Your Healthcare Scheduling?
                </h2>
                <p class="text-xl mb-8">
                    Join thousands of patients who have transformed their
                    appointment booking experience.
                </p>
                <div class="space-x-4">
                    <a
                        href="#"
                        class="bg-white text-blue-600 px-8 py-3 rounded-md font-semibold hover:bg-gray-100 transition"
                    >
                        Sign Up Now
                    </a>
                    <a
                        href="#"
                        class="border-2 border-white text-white px-8 py-3 rounded-md font-semibold hover:bg-white hover:text-blue-600 transition"
                    >
                        Learn More
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">MedConnect</h3>
                        <p class="text-gray-400">
                            Revolutionizing healthcare scheduling with
                            technology and user-centric design.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li>
                                <a
                                    href="#"
                                    class="text-gray-400 hover:text-white"
                                    >Home</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-gray-400 hover:text-white"
                                    >Features</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-gray-400 hover:text-white"
                                    >About Us</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-gray-400 hover:text-white"
                                    >Contact</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Contact Us</h4>
                        <p class="text-gray-400">
                            Email: support@medconnect.com<br />
                            Phone: (555) 123-4567
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</template>
