@extends('Home')
@section('content')
<section class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Visit Our Location</h2>
        </div>
        <div class="mt-16 lg:mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="rounded-lg overflow-hidden">
                    <!-- Google Maps Embed for Binus Jakarta Palmerah -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.381568490722!2d106.78426981535242!3d-6.179484395499045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5b8b3cf2f9d%3A0x8db2d6a7f1739e3c!2sBINUS%20University%20Kemanggisan!5e0!3m2!1sen!2sid!4v1623327735954!5m2!1sen!2sid
"
                        width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div>
                    <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Our Address</h3>
                            <p class="mt-1 text-gray-600">BINUS University Palmerah, Jl. Kebon Jeruk Raya No. 9, Palmerah, Jakarta Barat, Indonesia</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Hours</h3>
                            <p class="mt-1 text-gray-600">Monday - Friday: 9am - 5pm</p>
                            <p class="mt-1 text-gray-600">Saturday: 10am - 4pm</p>
                            <p class="mt-1 text-gray-600">Sunday: Closed</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Contact</h3>
                            <p class="mt-1 text-gray-600">Email: info@binus.edu</p>
                            <p class="mt-1 text-gray-600">Phone: +62 21 5365 1044</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="bg-gray-800 text-white text-center py-4 mt-10">
    <p>&copy; 2024 Your Company. All rights reserved.</p>
</footer>
@endsection
