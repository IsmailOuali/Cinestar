
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
                @if ($isAvailable)
                    <a href="{{ route("available.schedules", $film->slug) }}" class="btn btn-primary w-fit">
                        <ion-icon name="play"></ion-icon>
                        <span>Book now</span>
                    </a>
                @endunless

            </div>

        </div>
        <div>
           
            
               
                @foreach ($show as $sh)
                 <form action="{{  route("booking.show", $sh->id) }}" method="get">
                    <button class="w-16 h-16 bg-blue-400 rounded-2xl">{{ $sh->room->name }}</button>

                       </form>
                    
                @endforeach
          
         
        </div>
    </section>

</x-layout>
