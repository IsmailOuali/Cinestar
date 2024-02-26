<section class="">
    <div class="flex justify-between mb-12">
        <div class="">
            <h1 class="text-2xl font-bold">
                Rooms management
            </h1>
        </div>
        <x-modals.button modalId="room-create">
            Create New Room
        </x-modals.button>
    </div>
    <div class="rooms flex justify-center gap-2 flex-wrap">
        <x-helpers.empty-rooms :rooms="$rooms"/>
        @foreach($rooms as $room)
            <div
                class="w-[400px] mx-4 bg-white border border-gray-200 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg w-full h-72"
                         src="{{isset($room->image->path) ? asset("storage/".$room->image->path): ""}}" alt=""/>
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            {{ $room->name }}</h5>
                    </a>
                    <p class="font-bold border-2 rounded-full w-fit px-4 my-4">{{ count($room->zones) }} Zones</p>
                    <a href="{{ route("rooms.show", $room->slug) }}"
                       class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-blue-500 rounded-full shadow-md group">
                         <x-svg-icon name="more-details"/>
                        <span
                            class="absolute flex items-center justify-center w-full h-full text-blue-500 transition-all duration-300 transform group-hover:translate-x-full ease">More Details</span>
                        <span class="relative invisible">More Details</span>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
    <div class="block">
        {{ $rooms->links() }}
    </div>
</section>
