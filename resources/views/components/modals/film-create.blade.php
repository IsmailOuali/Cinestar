<x-modals.modal modalId="film-create" modalTitle="Create Film" width="max-w-4xlxl">
    <form action="{{ route("films.store") }}" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-4 mb-4 ">
            <x-inputs.n-input name="title" type="text" placeholder="Enter the Film title !! "/>
            <x-inputs.n-input name="genre" type="text" placeholder="Eg: comedy, action ...."/>
            <x-inputs.n-input name="actors" type="text" placeholder="Eg: jhon snow, akil salah, aymane "/>
            <div class="flex justify-around">
                <x-inputs.n-input name="duration" type="time"/>
                <div class="col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Year</label>
                    <input class="min-w-[170px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" type="number" min="1900" max="2099" step="1" value="2016" />
                    @error("year")
                    <span>{{ $message }}</span>
                    @enderror
                </div>
                <x-inputs.select-loop name="category_id" :data="$data['categories']"/>
                <x-inputs.select-enum name="country" :enum="App\Enums\Countries::cases()"/>
                <x-inputs.select-enum name="language" :enum="App\Enums\Language::cases()"/>
            </div>
            <x-inputs.textarea name="description" label="description"/>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <x-svg-icon name="add"/>
            Add new Film
        </button>
    </form>
</x-modals.modal>
