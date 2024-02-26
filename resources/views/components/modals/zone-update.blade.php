<x-modals.modal modalId="zone-edit" modalTitle="edit zone" width="max-w-xl">
    <!-- Modal body -->
    <form id="zone-update" method="post" class="p-4 md:p-5">
        @method("put")
        @csrf
        <div class="flex flex-col gap-4 mb-4 ">
            <x-inputs.n-input name="name" type="text" placeholder="Enter the Zone name !! "/>
            <x-inputs.n-input name="price" type="text" placeholder="Enter the Zone price !! "/>
            <x-inputs.n-input name="number_of_seats" type="text" placeholder="Enter the Zone number of seats !! "/>
        </div>
        <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <x-svg-icon name="add"/>
            Update Zone
        </button>
    </form>
</x-modals.modal>
