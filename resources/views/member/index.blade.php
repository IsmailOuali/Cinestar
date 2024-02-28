<x-layout>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <p class="hero-subtitle">Cine Star</p>

                <h1 class="h1 hero-title">
                    Unlimited <strong>Movie</strong>, TVs Shows, & More.
                </h1>

                <div class="meta-wrapper">

                    <div class="badge-wrapper">
                        <div class="badge badge-fill">PG 18</div>

                        <div class="badge badge-outline">HD</div>
                    </div>

                    <div class="ganre-wrapper">
                        <a href="#">Romance,</a>

                        <a href="#">Drama</a>
                    </div>

                    <div class="date-time">

                        <div>
                            <ion-icon name="calendar-outline"></ion-icon>

                            <time datetime="2022">2022</time>
                        </div>

                        <div>
                            <ion-icon name="time-outline"></ion-icon>

                            <time datetime="PT128M">128 min</time>
                        </div>

                    </div>

                </div>

                <button class="btn btn-primary">
                    <ion-icon name="play"></ion-icon>

                    <span>Watch now</span>
                </button>

            </div>

        </div>
    </section>

    <section class="upcoming">
        <div class="container">

            <div class="flex-wrapper">

                <div class="title-wrapper">
                    <p class="section-subtitle">Online Streaming</p>

                    <h2 class="h2 section-title">Upcoming Movies</h2>
                </div>

                <ul class="filter-list">

                    <li>
                        <button class="filter-btn">Movies</button>
                    </li>

                    <li>
                        <button class="filter-btn">TV Shows</button>
                    </li>

                    <li>
                        <button class="filter-btn">Anime</button>
                    </li>

                </ul>

            </div>

           <x-all-schedules :schedules="$schedules"/>
        </div>
    </section>


    <section class="top-rated">
        <div class="container">
            <x-movie-types />

            <p class="section-subtitle">Coming Movies</p>

            <h2 class="h2 section-title">All</h2>

            <x-all-movies :films="$films" />

        </div>
    </section>

    </div>
    </section>


</x-layout>
