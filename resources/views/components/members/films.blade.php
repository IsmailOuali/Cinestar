<div class="w-auto flex flex-row overflow-x-auto pl-28 pt-6 pb-10">
    @foreach($films as $film)
        <a href="movie/" class="group max-w-[300px]">
            <div
                class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col mr-8 duration-100">
                <div class="overflow-hidden rounded-[32px]">
                    <img src="{{ asset("storage/". $film->image->path) }}" alt="dfsdfds"
                         class="w-[360px] h-[300px] rounded-[32px] group-hover:scale-125 duration-200">
                </div>

                <span
                    class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">{{ $film->title }}</span>
                <span class="font-inter text-sm mt-1">{{ $film->year }}</span>

                <div class="flex flex-row mt-1 items-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 21H8V8L15 1L16.25 2.25C16.3667 2.36667 16.4627 2.525 16.538 2.725C16.6127 2.925 16.65 3.11667 16.65 3.3V3.65L15.55 8H21C21.5333 8 22 8.2 22.4 8.6C22.8 9 23 9.46667 23 10V12C23 12.1167 22.9873 12.2417 22.962 12.375C22.9373 12.5083 22.9 12.6333 22.85 12.75L19.85 19.8C19.7 20.1333 19.45 20.4167 19.1 20.65C18.75 20.8833 18.3833 21 18 21ZM6 8V21H2V8H6Z"
                            fill="#38B6FF"></path>
                    </svg>

                    <span class="font-inter text-sm ml-1">dfdsfdsf</span>
                </div>
            </div>
        </a>
    @endforeach
</div>
