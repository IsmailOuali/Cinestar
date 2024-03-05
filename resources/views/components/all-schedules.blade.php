@props(['schedules'])
<ul class="movies-list  has-scrollbar">
    @foreach ($schedules as $schedule)
        <li>
            <div class="movie-card">

                <a href="{{ route('movies.show', $schedule->film->slug) }}">
                    <figure class="card-banner">
                        <img src="./assets/images/upcoming-1.png" alt="The Northman movie poster">
                    </figure>
                </a>

                <div class="title-wrapper">
                    <a href="{{ route('movies.show', $schedule->film->slug) }}">
                        <h3 class="card-title font-bold text-lg">{{ $schedule->film->title }}</h3>
                    </a>

                    <time datetime="{{ $schedule->film->year }}">{{ $schedule->film->year }}</time>
                </div>

                <div class="card-meta">
                    <p class="text-sm text-white"><span class="font-bold">Schedule Date:</span> {{ $schedule->screening_date }}</p>

                    <div class="duration">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="PT137M">{{ $schedule->film->duration }}</time>
                    </div>
                </div>

            </div>
        </li>
    @endforeach

</ul>
