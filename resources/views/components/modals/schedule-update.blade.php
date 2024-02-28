@props(["rooms"])
<x-modals.modal modalId="schedule-edit" modalTitle="Update the schedule" width="max-w-xl">
    <form id="schedule-update" method="post" class="p-8 md:p-5" enctype="multipart/form-data">
        @method("put")
        @csrf
        <div class="flex flex-col gap-4 items-center">
            <h2 class="font-bold text-xl">Change the date or the room of movie</h2>
            <x-inputs.select-loop :data="$rooms" name="room_id"/>
            <div class="flex flex-col gap-2">
                <label for="screening_date">Screening Date</label>
                <input class="rounded-xl" id="screening_date" type="datetime-local" name="screening_date">
            </div>
            <button type="submit"
                    class=" my-4 text-white inline-flex bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <x-svg-icon name="add"/>
                Update Category
            </button>
        </div>
    </form>
</x-modals.modal>
