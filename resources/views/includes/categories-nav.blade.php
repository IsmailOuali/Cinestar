<ul class="flex justify-center my-6 gap-12">
    @foreach(App\Enums\Types::cases() as $type)
        <li class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100"><a
                href="#">{{ $type->value }}</a></li>
    @endforeach
</ul>
