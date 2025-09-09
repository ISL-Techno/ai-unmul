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
                        <li><a class="px-3 py-2 text-sm font-medium rounded-md transition-all duration-200 hover:bg-primary hover:text-primary-content active:bg-primary active:text-primary-content inline-flex items-center leading-tight hover:scale-105" href="#">Beranda</a></li>
                        <li><a class="px-3 py-2 text-sm font-medium rounded-md transition-all duration-200 hover:bg-primary hover:text-primary-content active:bg-primary active:text-primary-content inline-flex items-center leading-tight hover:scale-105" href="#">Tentang Kami</a></li>
            <li class="relative dropdown" id="servicesDropdown">
                <button type="button" id="servicesToggle" aria-haspopup="true" aria-expanded="false"
                    class="px-3 py-2 text-sm font-medium rounded-md transition-all duration-200 hover:bg-primary hover:text-primary-content hover:scale-105 inline-flex items-center gap-1 focus:outline-none appearance-none select-none leading-tight align-middle">
                                <span>Layanan</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200" id="servicesArrow" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                <ul tabindex="0" id="servicesMenu" class="absolute top-full left-0 p-0 shadow-lg bg-base-100 rounded-xl w-56 border border-base-300 flex flex-col gap-1 mt-1 z-50 invisible opacity-0 translate-y-1 transition-all duration-200">
                                <li class="px-3 py-1">
                                    <a href="#" class="block w-full px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-primary hover:text-primary-content active:bg-primary active:text-primary-content transition-colors duration-150">Posko Pengaduan</a>
                                </li>
                                <li class="px-3 py-1">
                                    <a href="#" class="block w-full px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-primary hover:text-primary-content active:bg-primary active:text-primary-content transition-colors duration-150">Layanan Dummy 1</a>
                                </li>
                                <li class="px-3 py-1">
                                    <a href="#" class="block w-full px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-primary hover:text-primary-content active:bg-primary active:text-primary-content transition-colors duration-150">Layanan Dummy 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="px-3 py-2 text-sm font-medium rounded-md transition-all duration-200 hover:bg-primary hover:text-primary-content active:bg-primary active:text-primary-content inline-flex items-center leading-tight hover:scale-105" href="#">Kontak</a></li>
                    </ul>
                </div>

                <!-- Right: social icons -->
                <div class="navbar-end ml-auto flex items-center gap-2">
                    <a href="https://whatsapp.com/channel/0029VazMHQcLI8YhavJcMh34" target="_blank" rel="noopener noreferrer" class="p-1 transition-all tooltip tooltip-bottom" aria-label="WhatsApp" data-tip="AI UNMUL WA Channel">
                        <img src="{{ asset('images/socmed/wa.svg') }}" alt="WhatsApp" class="h-6 w-6 grayscale hover:grayscale-0 transition-all" />
                    </a>
                    <a href="https://www.instagram.com/ai.unmul/" target="_blank" rel="noopener noreferrer" class="p-1 transition-all tooltip tooltip-bottom" aria-label="Instagram" data-tip="Instagram AI UNMUL">
                        <img src="{{ asset('images/socmed/ig.svg') }}" alt="Instagram" class="h-6 w-6 grayscale hover:grayscale-0 transition-all" />
                    </a>
                    <a href="https://tiktok.com/@ai.unmul" target="_blank" rel="noopener noreferrer" class="p-1 transition-all tooltip tooltip-bottom" aria-label="TikTok" data-tip="TikTok AI UNMUL">
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
<script>
    (function(){
        const toggle = document.getElementById('servicesToggle');
        const menu = document.getElementById('servicesMenu');
        const arrow = document.getElementById('servicesArrow');
        if(!toggle || !menu) return;

        function open(){
            toggle.classList.add('bg-primary','text-primary-content');
            menu.classList.remove('invisible','opacity-0','translate-y-1');
            menu.classList.add('opacity-100','translate-y-0');
            toggle.setAttribute('aria-expanded','true');
            arrow.classList.add('rotate-180');
        }
        function close(){
            toggle.classList.remove('bg-primary','text-primary-content');
            menu.classList.add('invisible','opacity-0','translate-y-1');
            menu.classList.remove('opacity-100','translate-y-0');
            toggle.setAttribute('aria-expanded','false');
            arrow.classList.remove('rotate-180');
        }
        function toggleMenu(e){
            e.stopPropagation();
            const expanded = toggle.getAttribute('aria-expanded') === 'true';
            expanded ? close() : open();
        }
        toggle.addEventListener('click', toggleMenu);
        // Close when clicking outside
        document.addEventListener('click', (e)=>{
            if(!menu.contains(e.target) && !toggle.contains(e.target)) close();
        });
        // Keyboard accessibility
        document.addEventListener('keydown', (e)=>{
            if(e.key === 'Escape') close();
        });
    })();
</script>