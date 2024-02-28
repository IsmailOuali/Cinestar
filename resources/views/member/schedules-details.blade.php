<x-layout>
    <section>
        
    </section>
    @foreach ($availableSchedules as $schedule)
        @php $date = Carbon\Carbon::parse($schedule->screening_date)->format('M d Y'); @endphp

    @endforeach
</x-layout>
