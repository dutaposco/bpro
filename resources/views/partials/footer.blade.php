<footer class="bg-white text-gray-700 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- Brand -->
            <div>
                <h3 class="text-red-700 text-lg font-bold mb-4">BPRO</h3>
                <p class="text-sm text-gray-600">Professional football training resources - videos, e-books. Complete platform for all skill levels.</p>
            </div>

            <!-- Links -->
            <div>
                <h4 class="text-gray-900 font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-red-700 transition">Home</a></li>
                    <li><a href="{{ route('programs') }}" class="text-gray-700 hover:text-red-700 transition">Programs</a></li>
                    <li><a href="{{ route('videos.index') }}" class="text-gray-700 hover:text-red-700 transition">Videos</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-gray-900 font-semibold mb-4">Contact</h4>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>📞 +1 234 567 8900</li>
                    <li>📧 info@bpro.com</li>
                    <li>📍 USA</li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h4 class="text-gray-900 font-semibold mb-4">Follow Us</h4>
                <div class="flex gap-4 text-xl">
                    <a href="#" class="text-gray-700 hover:text-red-700 transition">f</a>
                    <a href="#" class="text-gray-700 hover:text-red-700 transition">𝕏</a>
                    <a href="#" class="text-gray-700 hover:text-red-700 transition">📷</a>
                    <a href="#" class="text-gray-700 hover:text-red-700 transition">▶</a>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-200 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-600">
                <p>&copy; 2026 BPRO. All rights reserved.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-700 hover:text-red-700 transition">Privacy Policy</a>
                    <a href="#" class="text-gray-700 hover:text-red-700 transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
