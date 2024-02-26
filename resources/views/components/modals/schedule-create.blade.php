@props(["data"])
<x-modals.modal modalId="schedule-create" modalTitle="Create Schedule " width="max-w-3xl">
    <div class="flex justify-between m-8">
        <h1 class="font-bold text-3xl">create a new Schedule</h1>
    </div>
    <form action="{{ route("schedules.store") }}" method="post" class="mx-8">
        @csrf
        <div class="flex justify-center gap-8">
            <x-inputs.select-loop :data="$data['films']" accessor="title" name="film_id"/>
            <x-inputs.select-loop :data="$data['rooms']" name="room_id"/>
            <x-inputs.n-input type="datetime-local" name="screening_date"/>
        </div>

        <button type="submit"
                class="ml-8 my-4 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <x-svg-icon name="add"/>
            Add Zones
        </button>
    </form>

</x-modals.modal>
