<x-modals.modal modalId="film-create" modalTitle="Create Film" width="max-w-4xlxl">
    <!-- Modal body -->
    <form action="{{ route("film-store") }}" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-4 mb-4 ">
            <x-inputs.n-input name="title" type="text" placeholder="Enter the Film title !! "/>
            <x-inputs.n-input name="genre" type="text" placeholder="Eg: comedy, action ...."/>
            <x-inputs.n-input name="actors" type="text" placeholder="Eg: jhon snow, akil salah, aymane "/>
            <x-inputs.n-input name="duration" type="time"/>
            <div class="flex justify-around">
                <x-inputs.n-input name="year" type="date"/>
                <x-inputs.n-input name="screening_date" type="date"/>
                <x-inputs.select-loop name="category_id" :data="$data['categories']"/>
                <x-inputs.select-loop name="room_id" :data="$data['rooms']"/>
                <x-inputs.select-enum name="country" :enum="App\Enums\Countries::cases()"/>
                <x-inputs.select-enum name="language" :enum="App\Enums\Language::cases()"/>
            </div>
            <x-inputs.textarea name="description" label="description"/>
            <x-inputs.file name="image"/>
        </div>
        <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <x-icon name="add"/>
            Add new Film
        </button>
    </form>
</x-modals.modal>
