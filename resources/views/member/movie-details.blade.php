<x-layout>
    <section class="movie-detail">
        <div class="container">

            <figure class="movie-detail-banner">

                <img src="/assets/images/movie-4.png" alt="Free guy movie poster">

                <button class="play-btn">
                    <ion-icon name="play-circle-outline"></ion-icon>
                </button>

            </figure>

            <div class="movie-detail-content">

                <p class="detail-subtitle">{{ $film->category->name }}</p>

                <h1 class="h1 detail-title">
                    {{ $film->title }}
                </h1>

                <div class="meta-wrapper">

                    <div class="badge-wrapper">
                        <div class="badge badge-fill">PG 13</div>

                        <div class="badge badge-outline">HD</div>
                    </div>

                    <div class="ganre-wrapper">
                        @php
                            $genres = explode(',', $film->genre);
                        @endphp
                        @foreach ($genres as $genre)
                            <a href="#">{{ $genre }},</a>
                        @endforeach
                    </div>

                    <div class="date-time">

                        <div>
                            <ion-icon name="calendar-outline"></ion-icon>

                            <time datetime="{{ $film->year }}">{{ $film->year }}</time>
                        </div>

                        <div>
                            <ion-icon name="time-outline"></ion-icon>

                            <time datetime="PT115M">{{ $film->duration }}</time>
                        </div>

                    </div>

                </div>
                <p class="storyline">
                    {{ $film->description }}
                </p>
                @if (count($availableSchedules) >= 1)
                    <a href="#timing" class="btn btn-primary w-fit">
                        <ion-icon name="play"></ion-icon>
                        <span>Book now</span>
                    </a>
                @endunless

        </div>

    </div>
    <div id="timing" class="flex flex-col items-center my-32">
        <h2 class=" text-white font-bold text-4xl mt-8">This movie is available in this times</h2>
        <p class="text-white my-4">choose a good time for you</p>
        <div class="min-h-screen gap-8 py-6 flex justify-center sm:py-12">
            @foreach ($availableSchedules as $schedule)
                @php
                    $date = Carbon\Carbon::parse($schedule->screening_date)->format('M d Y');
                    $time = Carbon\Carbon::parse($schedule->screening_date)->format('H:i');
                @endphp

                <div class="py-3 sm:max-w-xl sm:mx-auto">
                    <div
                        class="bg-white shadow-lg border-gray-100 max-h-80	 border sm:rounded-3xl p-8 flex space-x-8">
                        <div class="h-48 overflow-visible w-1/2">
                            <img class="rounded-3xl shadow-lg"
                                src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1LRLLWGvs5sZdTzuMqLEahb88Pc.jpg"
                                alt="">
                        </div>
                        <div class="flex flex-col w-1/2 space-y-4">
                            <div class="flex justify-between items-start">
                                <div class="">
                                    <div class="text-sm text-gray-400">Room Name</div>
                                    <h2 class="text-3xl font-bold">{{ $schedule->room->name }}</h2>
                                </div>
                                <div class="bg-yellow-400 font-bold rounded-xl p-2">7.2</div>
                            </div>
                            <div>
                                <div class="text-sm text-gray-400">Screening date: </div>
                                <div class="text-lg text-gray-800">{{ $date . ' - ' . $time }}</div>
                            </div>
                            <div>
                                <div class="text-sm text-gray-400">Number of Zones: <span class="text-lg text-gray-800">{{ count($schedule->room->zones) }}</span></div>
                                <div class="text-sm text-gray-400">Number of Seats: <span class="text-lg text-gray-800">{{ $schedule->room->seats_total }}</span></div>
                            </div>

                            <div class="flex text-2xl font-bold text-a">
                                <a href="{{ route("booking.create", $schedule->id) }}" class="btn btn-primary w-fit">
                                    <ion-icon name="play"></ion-icon>
                                    <span>Book now</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

</x-layout>
