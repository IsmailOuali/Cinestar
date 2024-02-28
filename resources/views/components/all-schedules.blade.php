@props(['films'])

<ul class="movies-list">
@foreach ($films as $film)
    <li>
        <div class="movie-card">

            <a href="{{ route("movies.show", $film->slug) }}">
                <figure class="card-banner">
                    <img src="./assets/images/upcoming-1.png" alt="The Northman movie poster">
                </figure>
            </a>

            <div class="title-wrapper">
                <a href="{{ route("movies.show", $film->slug) }}">
                    <h3 class="card-title">{{ $film->title }}</h3>
                </a>

                <time datetime="{{ $film->year }}">{{ $film->year }}</time>
            </div>

            <div class="card-meta">
                <div class="badge badge-outline">{{ $film->category->name }}</div>

                <div class="duration">

                    <time datetime="PT137M">{{ $film->duration }}</time>
                </div>
            </div>

        </div>
    </li>
@endforeach

</ul>

