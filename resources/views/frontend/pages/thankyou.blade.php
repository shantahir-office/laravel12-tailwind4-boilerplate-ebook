@extends('components.layouts.lp.master')
@section('main-content')
    <section class="min-h-[calc(100dvh-205px)] 2xl:min-h-[calc(100dvh-325px)] flex flex-col justify-center">
        <div class="container">
            <div class="px-2 text-center mx-auto max-w-[850px]">
                <h1 class="text-[clamp(30px,6vw,40px)] mb-4 font-bold text-primary">Thank You for Showing Your Interest!
                </h1>
                <h4 class="block mb-2">You will be contacted shortly by one of our Sr. Book Consultants.
                </h4>
                <div class="p-6 text-center">
                    <button type="button" onclick="openChatWidget()">
                        <img src="{{ asset('assets/img/icons/chat.svg') }}" alt="quote icon" width="50" height="50"
                            class=" object-contain image-primary mx-auto  mb-4" loading="lazy">
                        <h3 class="mb-0">Live Chat</h3>
                        <h4 class="mt-0">For Instant Support</h4>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- @section('custom-footer')
    <footer class="bg-black py-10 text-sm overflow-x-hidden ">
        <div class="container">
            <!-- Top Section -->
            <div
                class="flex flex-col md:flex-row  justify-between gap-6 md:gap-10 xl:gap-1 4xl:gap-20 items-center md:items-center mb-4">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="#">
                        <img loading="lazy" src="{{ asset('assets/img/logo-white.svg') }}"
                            alt="Elite Author Publishers - White Logo" class="object-contain w-[clamp(150px,12vw,200px)]">
                    </a>
                </div>

                <!-- CTA Text -->
                <div class="text-white font-semibold ">
                    <p class="text-white w-full  text-xl whitespace-nowrap"> Want To Achieve Guaranteed<br> Book Publishing
                        Success?</p>
                </div>

                <!-- Phone -->
                <div class="flex items-center space-x-3 shrink-0">
                    <a href="tel:{{ config('var.phone') }}" class="size-[clamp(30px,2.5vw,40px)] flex-shrink-0">
                        <img loading="lazy" src="{{ asset('assets/img/icons/phone-cirlce.svg') }}" alt="Call us"
                            class="object-contain size-full">
                    </a>
                    <div class="border-l border-white pl-3 ">
                        <span class="text-white font-normal block text-[16px] ">Speak To An Expert:</span>
                        <a href="tel:{{ config('var.phone') }}" class="text-white hover:text-primary text-[18px] ">
                            {{ config('var.phone') }}
                        </a>
                    </div>
                </div>

                <!-- Live Chat -->
                <div class="flex items-center space-x-3 shrink-0">
                    <button type="button" onclick="openChatWidget()" class="size-[clamp(30px,2.5vw,40px)] flex-shrink-0">
                        <img loading="lazy" src="{{ asset('assets/img/icons/white-chat.svg') }}" alt="Live chat"
                            class="object-contain size-full">
                    </button>
                    <div class="border-l border-white pl-3 ">
                        <span class="text-white font-normal block text-[16px] ">Need Instant Help:</span>
                        <button type="button" onclick="openChatWidget()"
                            class="text-white hover:text-primary text-[18px] ">
                            Live Chat
                        </button>
                    </div>
                </div>

                <!-- Address -->
                <div class="flex items-center space-x-3 shrink-0">
                    <a href="#" class="size-[clamp(30px,2.5vw,40px)] flex-shrink-0">
                        <img loading="lazy" src="{{ asset('assets/img/icons/adress.svg') }}" alt="Address"
                            class="object-contain size-full">
                    </a>
                    <div class="border-l border-white pl-3 ">
                        <span class="text-white font-normal block text-[16px] ">Our Office:</span>
                        <a href="#" class="text-white hover:text-primary text-[12px]  block">
                            {{ config('var.address') }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="py-4 px-6 border-t border-white/10">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white">
                    <!-- Left: Copyright -->
                    <p class="text-white">Copyright © 2025 - Elite Author Publishers. All Rights Reserved.</p>

                    <!-- Center: Payment & Social Icons -->
                    <div class="flex flex-wrap justify-center gap-2">
                        <!-- Payment Methods -->
                        <img src="{{ asset('assets/img/logos/pay-logo1.webp') }}" alt="Visa" class="h-6"
                            loading="lazy">
                        <img src="{{ asset('assets/img/logos/pay-logo2.webp') }}" alt="Visa" class="h-6"
                            loading="lazy">
                        <img src="{{ asset('assets/img/logos/pay-logo3.webp') }}" alt="Visa" class="h-6"
                            loading="lazy">
                        <img src="{{ asset('assets/img/logos/pay-logo4.webp') }}" alt="Visa" class="h-6"
                            loading="lazy">
                        <img src="{{ asset('assets/img/logos/pay-logo5.webp') }}" alt="Visa" class="h-6"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection --}}
