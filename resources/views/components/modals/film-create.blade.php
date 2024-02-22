<!-- Main modal -->
<div id="film-create" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xlxl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Create New Film
                </h3>
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="film-create">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
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
                        <x-inputs.select-loop name="category_id" :data="$data['categories']" />
                        <x-inputs.select-loop name="room_id" :data="$data['rooms']" />
                        <x-inputs.select-enum name="country" :enum="App\Enums\Countries::cases()"/>
                        <x-inputs.select-enum name="language" :enum="App\Enums\Language::cases()"/>
                    </div>
                    <x-inputs.textarea name="description" label="description"/>
                    <x-inputs.file name="image"/>
                </div>
                <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                  <x-icon name="add" />
                    Add new Film
                </button>
            </form>
        </div>
    </div>
</div>
