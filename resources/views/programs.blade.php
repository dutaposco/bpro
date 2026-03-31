@extends('layouts.app')

@section('title', 'Programs - BPRO')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-red-700 to-red-800 text-white py-10 md:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl font-bold mb-4">Training Programs</h1>
            <p class="text-lg text-red-100">Find the perfect program to develop your football skills with BPRO</p>
        </div>
    </section>

    <!-- Programs Grid -->
    <section class="py-12 md:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($programs as $program)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 border-t-4 border-red-600 transform hover:-translate-y-1">
                        <div class="relative overflow-hidden h-56 bg-gray-200">
                            <img src="{{ $program['image'] }}" alt="{{ $program['title'] }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        
                        <div class="p-8">
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-2xl font-bold text-gray-900 flex-1">{{ $program['title'] }}</h3>
                                <span class="text-sm bg-red-100 text-red-600 px-3 py-1 rounded-full whitespace-nowrap ml-2 font-semibold">{{ $program['duration'] }}</span>
                            </div>
                            
                            <p class="text-gray-600 mb-6">{{ $program['description'] }}</p>

                            @if(isset($program['features']))
                                <div class="mb-6 space-y-3">
                                    @foreach($program['features'] as $feature)
                                        <div class="flex items-center text-sm text-gray-700">
                                            <span class="text-red-600 mr-3 font-bold">✓</span>
                                            {{ $feature }}
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="border-t border-gray-200 pt-6 mb-6">
                                <p class="text-sm text-gray-600 mb-2">Package Price</p>
                                <p class="text-4xl font-bold text-red-600">{{ $program['price'] }}</p>
                            </div>

                            <button class="w-full bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition font-bold text-lg">
                                Enroll Now
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-900 mb-16 text-center">Frequently Asked Questions</h2>
            
            <div class="space-y-6">
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition border-l-4 border-red-600">
                    <h4 class="font-bold text-gray-900 text-lg mb-3">How do I enroll in a program?</h4>
                    <p class="text-gray-600">Simply click the "Enroll Now" button on your chosen program, fill in your personal information, and complete the payment process.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition border-l-4 border-red-600">
                    <h4 class="font-bold text-gray-900 text-lg mb-3">Is there a free trial?</h4>
                    <p class="text-gray-600">Yes, we offer a 7-day free trial for all programs. No credit card required to get started.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition border-l-4 border-red-600">
                    <h4 class="font-bold text-gray-900 text-lg mb-3">Can I cancel anytime?</h4>
                    <p class="text-gray-600">Of course. You can cancel your program at any time without additional fees or long-term commitment.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition border-l-4 border-red-600">
                    <h4 class="font-bold text-gray-900 text-lg mb-3">Can programs be customized?</h4>
                    <p class="text-gray-600">Absolutely. All programs can be tailored to your specific needs and football skill level. Get a free consultation with our coaches.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition border-l-4 border-red-600">
                    <h4 class="font-bold text-gray-900 text-lg mb-3">What if I need more support?</h4>
                    <p class="text-gray-600">Our support team is available 24/7 to help with any questions or concerns about your training program.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
