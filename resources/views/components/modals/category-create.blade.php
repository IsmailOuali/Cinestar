<x-modals.modal modalId="category-create" modalTitle="Create Film" width="max-w-xl">
    <!-- Modal body -->
    <form action="{{ route("category-store") }}" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-4 mb-4 ">
            <x-inputs.n-input name="name" type="text" placeholder="Enter the Category name !! "/>
            <x-inputs.textarea name="description" label="description"/>
            <x-inputs.file name="image"/>
        </div>
        <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <x-icon name="add"/>
            Add new Category
        </button>
    </form>
</x-modals.modal>
