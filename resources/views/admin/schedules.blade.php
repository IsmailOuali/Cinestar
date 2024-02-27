<x-dashboard-layout>
    <div class="mb-4 ">
        <div
            class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
            <div
                class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                <div>
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                        The Films</h6>

                </div>
                <x-modals.button modalId="schedule-create" styled="true">Create a Schedule</x-modals.button>

            </div>
            <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                <table class="w-full min-w-[640px] table-auto">
                    <thead>
                    <tr>
                        <x-elements.th>Id</x-elements.th>
                        <x-elements.th>Film Name</x-elements.th>
                        <x-elements.th>Room Name</x-elements.th>
                        <x-elements.th>Is Full</x-elements.th>
                        <x-elements.th>screening date</x-elements.th>

                        <x-elements.th>Actions</x-elements.th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($schedules as $schedule)
                        <tr>
                            <x-elements.td
                                class="leading-normal text-blue-red-900 font-bold">{{ $schedule->id }}</x-elements.td>
                            <x-elements.td>{{ $schedule->film->title }}</x-elements.td>
                            <x-elements.td>{{ $schedule->room->name }}</x-elements.td>
                            <x-elements.td>{{ $schedule->screening_date }}</x-elements.td>
                            @if($schedule->is_full)
                                <x-elements.td><span class="bg-red-700 text-white p-2 rounded-full">Full</span>
                                </x-elements.td>
                            @else
                                <x-elements.td><span class="bg-green-500 p-2 text-white rounded-full">Available</span>
                                </x-elements.td>
                            @endif

                            <td class="py-3 px-5 border-b border-blue-gray-50 flex items-center gap-2">
                                <button
                                    data-name="{{ $schedule->room->name }}"
                                    data-modal-target="schedule-edit"
                                    data-modal-toggle="schedule-edit"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"
                                    type="button">
                                    <x-svg-icon name="edit"/>
                                </button>
                                <form action="{{ route("schedules.destroy", $schedule->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <p>{{ $schedule->id }}</p>
                                    <button>
                                        <x-svg-icon name="delete"/>
                                    </button>
                                </form>
                            </td>

                        </tr>
                        <x-modals.modal modalId="schedule-edit" modalTitle="Update the schedule" width="max-w-xl">
                            @dump($schedule->id)
                            <form action="{{ route("schedules.update", $schedule->id) }}" method="post" class="p-8 md:p-5">
                                @method("put")
                                @csrf
                                <div class="flex flex-col gap-4 items-center">
                                    <h2 class="font-bold text-xl">Change the date or the room of movie</h2>
                                    <x-inputs.select-loop :data="$data['rooms']" name="room_id"/>
                                    <div class="flex flex-col gap-2">
                                        <label for="screening_date">Screening Date</label>
                                        <input class="rounded-xl" id="screening_date" type="datetime-local" name="screening_date" value="{{ $schedule->screening_date }}">
                                    </div>
                                    <button type="submit"
                                            class=" my-4 text-white inline-flex bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        <x-svg-icon name="add"/>
                                        Update Category
                                    </button>
                                </div>
                            </form>
                        </x-modals.modal>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-modals.schedule-create :data="$data"/>
</x-dashboard-layout>
