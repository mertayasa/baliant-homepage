<section class="hero py-5">
    <!-- container -->
    <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
        <!-- hero wrapper -->
        <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">

            <!-- hero image -->
            <div class="hero-image col-span-6">
                <img src="{{ $thumbnail }}" alt="">
            </div>

            <!-- hero text -->
            <div class="hero-text col-span-6">
                <h1 class=" font-bold text-3xl md:text-4xl max-w-xl text-gray-900 leading-tight">Baliant Laundry - Sistem manajemen laundry dengan fitur order yang mumpuni</h1>
                <div class="get-app flex space-x-5 mt-10 justify-start md:justify-start">
                    <a href="{{ $demo_link ?? '#' }}" target="_blank" class="bg-green-500 hover:bg-green-600 shadow-md px-3 py-2 rounded text-white font-normal">Demo Program</a>
                    <button class="bg-white hover:bg-gray-200 shadow-md px-3 py-2 rounded font-normal">Lebih Lanjut</button>
                </div>
            </div>

        </div>
    </div>
</section>
