<x-dashboard-layout>
    <section>
        <h1 class="font-bold text-3xl my-4">{{ $room->name }}</h1>
        <img class="h-72 w-full" src="{{ asset("storage/" . $room->image->path) }}" alt="">
        <nav class="navigation my-4">
            <ul class="flex justify-around">
                <li><a class="text-gray-800 hover:text-blue-600" href="#">Zones</a></li>
                <li><a class="text-gray-800 hover:text-blue-600" href="#">Coming Shows</a></li>
                <li><a class="text-gray-800 hover:text-blue-600" href="#">History</a></li>
            </ul>
            <x-modals.button modalId="zone-create">
                Create New Zone
            </x-modals.button>
        </nav>
        <div class="zones" id="zones">
            <table class="w-full min-w-[640px] table-auto">
                <thead>
                <tr class="bg-gray-200">
                    <x-elements.th>Id</x-elements.th>
                    <x-elements.th>Zone Name</x-elements.th>
                    <x-elements.th>Price</x-elements.th>
                    <x-elements.th>Number of seats</x-elements.th>
                    <x-elements.th>Actions</x-elements.th>
                </tr>
                </thead>
                <tbody>
                @foreach($room->zones as $zone)
                    <tr>
                        <x-elements.td>{{ $zone->id }}</x-elements.td>
                        <x-elements.td>{{ $zone->name }}</x-elements.td>
                        <x-elements.td>{{ $zone->price }}</x-elements.td>
                        <x-elements.td>{{ $zone->number_of_seats }}</x-elements.td>
                        <td class="py-3 px-5 border-b border-blue-gray-50 flex items-center gap-2">
                            <button
                                data-id="{{ $zone->id }}"
                                data-slug="{{ $zone->slug }}"
                                data-name="{{ $zone->name }}"
                                data-price="{{ $zone->price }}"
                                data-seats="{{ $zone->number_of_seats }}"
                                data-modal-target="zone-edit"
                                data-modal-toggle="zone-edit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"
                                type="button">
                                <x-svg-icon name="edit"/>
                            </button>

                            <x-modals.zone-update :slug="$zone->slug"/>
                            <form action="{{ route('zones.destroy', $zone->slug) }}" method="post">
                                @method('delete')
                                @csrf
                                <button>
                                    <x-svg-icon name="delete"/>
                                </button>
                            </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <x-modals.zone-create :roomId="$room->id"/>
    <script src="/assets/js/zone-edit.js"></script>
</x-dashboard-layout>
