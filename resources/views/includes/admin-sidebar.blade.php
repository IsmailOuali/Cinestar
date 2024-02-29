<aside
    class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
    <div class="relative border-b border-white/20">
        <a class="flex items-center gap-4 py-6 px-8" href="#/">
            <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">
                CinemaStar Admin Panel</h6>
        </a>
        <button
            class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
            type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
        </button>
    </div>
    <div class="m-4">
        <ul class="mb-4 flex flex-col gap-1">
            <li>
                <a href="/dashboard"
                    class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                    type="a">
                    <x-svg-icon name="dashboard" />
                    <p
                        class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                        Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('films.index') }}"
                    class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                    type="a">
                    <i class='bx bx-film'></i>
                    <p
                        class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                        Films</p>
                </a>
            </li>
            <li>
                <a href="{{ route('categories.index') }}"
                    class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                    type="a">
                    <i class='bx bxs-camera-movie' ></i>
                    <p
                        class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                        Categories
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ route('rooms.index') }}"
                    class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                    type="a">
                    <i class='bx bxs-castle' ></i>
                    <p
                        class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                        Rooms</p>
                </a>
            </li>
            <li>
                <a href="{{ route('schedules.index') }}"
                    class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                    type="a">
                    <i class='bx bx-slideshow' ></i>
                    <p
                        class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                        schedule</p>
                </a>
            </li>
        </ul>
        <ul class="mb-4 flex flex-col gap-1">
            <li class="mx-3.5 mt-4 mb-2">
                <p
                    class="block antialiased font-sans text-sm leading-normal text-white font-black uppercase opacity-75">
                    Categories</p>
            </li>
            <li>
                <a href="/logout"
                    class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="w-5 h-5 text-inherit">
                        <path fill-rule="evenodd"
                            d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p
                        class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                        Log out</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
