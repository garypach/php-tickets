
<div id="movies-list">
    <div class="row">
            @foreach ($results as $item )
            <div class="col-md-3">

            <div class="movie-box mb-5">
                <img style=" object-fit: cover;
                width: 100%;
                max-height: 100%;" src='https://image.tmdb.org/t/p/w780{{$item->poster_path}}' alt='$item->title'/>
                <div class="av open">
                <div class="status">
                    Tickets Available
                </div>
            </div>
            </div>
        </div>

            @endforeach
    </div>
</div>
