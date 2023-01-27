        <!-- header -->
        <header class="header my-8">
            <!-- container -->
            <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
                <!-- header wrapper -->
                    <div class="header-wrapper flex items-center justify-between">

                        <!-- header logo -->
                        <div class="header-logo">
                            <h1 class="font-semibold text-black leading-relaxed font-extrabold"><a href="">BALIANT;</a></h1>
                        </div>

                        <!-- mobile toggle -->
                        <div class="toggle md:hidden">
                            <button @click=" isOpen = true" @keydown.escape=" isOpen = false">
                                <svg 
                                    class="h-6 w-6 fill-current text-black"
                                    fill="none" stroke-linecap="round" 
                                    stroke-linejoin="round" stroke-width="2" 
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Navbar -->
                        <navbar class="navbar hidden md:block">
                            <ul class="flex space-x-8 text-sm font-semibold">
                                <li><a href="#" class="active border-b-2 border-green-500 pb-2">Home</a></li>
                                <li><a href="https://wa.me/6281934316124?text=Halo Baliant, " class="cta bg-green-500 hover:bg-green-600 px-3 py-2 rounded text-white font-normal">Contact</a></li>
                            </ul>
                        </navbar>

                    </div>
            </div>

        </header><!-- end header -->

        <!-- mobile navbar -->
        <div class="mobile-navbar">         

            <!-- navbar wrapper -->
            <div class="navbar-wrapper fixed top-0 left-0 h-full bg-white z-30 w-64 shadow-lg p-5" 
                x-show="isOpen" 
                @click.away=" isOpen = false"
                x-transition:enter="transition duration-300 -ml-64" 
                x-transition:enter-start=""
                x-transition:enter-end="transform translate-x-64"
                x-transition:leave="transition duration-300"
                x-transition:enter-start=""
                x-transition:leave-end="transform -translate-x-64">
                <div class="close">
                    <button class="absolute top-0 right-0 mt-4 mr-4" @click=" isOpen = false">
                        <svg 
                            class="w-6 h-6"
                            fill="none" stroke-linecap="round" 
                            stroke-linejoin="round" stroke-width="2" 
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    </button>
                </div>
                <ul class="divide-y">
                    <li><a href="#" class="my-4 inline-block active font-bold">Home</a></li>
                    <li><a href="https://wa.me/6281934316124?text=Halo Baliant, " class="my-8 w-full text-center font-semibold cta inline-block bg-green-500 hover:bg-green-600 px-3 py-2 rounded text-white font-normal">Contact</a></li>
                </ul>

                <!-- follow us -->
                <div class="follow">
                    <p class=" italic font-semibold">follow us:</p>
                    <div class="social flex space-x-5 mt-4 ">
                        <a href="https://www.instagram.com/baliant.projects/">
                            <svg 
                                aria-hidden="true" focusable="false" 
                                data-prefix="fab" data-icon="instagram" 
                                class="h-5 w-5 fill-current text-gray-600" role="img" 
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- end mobile navbar -->
