<ul class="filter-list">
    @foreach (App\Enums\Types::cases() as $item)
    <li>
        <button class="filter-btn">{{ $item->value }}</button>
      </li>
    @endforeach
  </ul>