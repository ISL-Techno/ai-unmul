<nav class="fixed top-4 left-0 right-0 z-50 flex justify-center">
    <div class="w-full max-w-4xl mx-2">
        <div class="bg-base-100 shadow rounded-lg">
            <div class="navbar px-2 py-1">

                <!-- Left: logo + title (aligned left) -->
                <div class="navbar-start">
                    <a class="p-0 mr-2 flex items-center gap-2">
                        <img src="{{ asset('images/logo/LogoAI (3).png') }}" alt="Logo AI" class="h-7 w-7">
                        <div class="flex flex-col leading-tight">
                            <span class="text-left text-sm sm:text-base font-semibold">AI UNMUL</span>
                            <span class="text-[10px] opacity-70 hidden sm:inline">Association of Informatics</span>
                        </div>
                    </a>
                </div>

                <!-- Center: nav buttons (compact, centered on md+) -->
                <div class="navbar-center hidden md:flex">
                    <ul class="menu menu-horizontal px-1 gap-2">
                        <li><a class="px-3 py-2 text-sm font-medium rounded-md transition-all duration-200 hover:bg-primary hover:text-primary-content hover:scale-105" href="#">Beranda</a></li>
                        <li><a class="px-3 py-2 text-sm font-medium rounded-md transition-all duration-200 hover:bg-primary hover:text-primary-content hover:scale-105" href="#">Tentang Kami</a></li>
                        <li><a class="px-3 py-2 text-sm font-medium rounded-md transition-all duration-200 hover:bg-primary hover:text-primary-content hover:scale-105" href="#">Kontak</a></li>
                    </ul>
                </div>

                <!-- Right: social icons -->
                <div class="navbar-end ml-auto flex items-center gap-2">
                    <a href="https://wa.me/6285183792261" target="_blank" rel="noopener noreferrer" class="p-1 transition-all" aria-label="WhatsApp">
                        <img src="{{ asset('images/socmed/wa.svg') }}" alt="WhatsApp" class="h-6 w-6 grayscale hover:grayscale-0 transition-all" />
                    </a>
                    <a href="https://www.instagram.com/ai.unmul/" target="_blank" rel="noopener noreferrer" class="p-1 transition-all" aria-label="Instagram">
                        <img src="{{ asset('images/socmed/ig.svg') }}" alt="Instagram" class="h-6 w-6 grayscale hover:grayscale-0 transition-all" />
                    </a>
                    <a href="https://tiktok.com/@ai.unmul" target="_blank" rel="noopener noreferrer" class="p-1 transition-all" aria-label="TikTok">
                        <img src="{{ asset('images/socmed/tiktok.svg') }}" alt="TikTok" class="h-6 w-6 grayscale hover:grayscale-0 transition-all" />
                    </a>

                    <!-- mobile dropdown fallback for nav links -->
                    <div class="dropdown md:hidden">
                        <label tabindex="0" class="btn btn-ghost p-2" aria-label="Open menu">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </label>
                        <ul tabindex="0" class="menu menu-compact dropdown-content mt-2 p-1 shadow-sm bg-base-100 rounded-box w-44 right-0">
                            <li><a class="px-2 py-1" href="#">Beranda</a></li>
                            <li><a class="px-2 py-1" href="#">Tentang</a></li>
                            <li><a class="px-2 py-1" href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>