<x-modals.modal modalId="room-create" modalTitle="Create new room " width="max-w-3xl">
    <div class="flex justify-between m-8">
        <h1 class="font-bold text-3xl">create a new room</h1>
    </div>
    <form action="{{ route("rooms.store") }}" method="post" enctype="multipart/form-data" class="mx-8">
        @csrf
        <div class="flex flex-col gap-2">

            <x-inputs.n-input name="name" type="text" placeholder="enter room name"/>
            <x-inputs.n-input name="seats_total" type="number" placeholder="enter total number of seats"/>
            <x-inputs.file name="image"/>
        </div>
        <div class="flex justify-between my-4">
            <strong>Click to add new zone </strong>
            <button id="add-zone" class="bg-blue-700 p-2.5 rounded-full flex justify-center items-center" type="button">
                <x-svg-icon name="add"/>
            </button>
        </div>
        <div id="zone-container" class="hidden">

            <div id="input-groups"></div>
        </div>
        <button type="submit"
                class="ml-8 my-4 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <x-svg-icon name="add"/>
            Add Zones
        </button>
    </form>

</x-modals.modal>
