<div id="movies-list">
    <div class="row relative ">
        <div class="prev-movie">
            <i class="fa-solid fa-angle-left"></i>
        </div>
        <div class="next-movie">
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class="center">
            @foreach ($results as $item )
            <div class="movie-box">
                <img style=" object-fit: cover;
                width: 100%;
                max-height: 100%;" src='https://image.tmdb.org/t/p/w780{{$item->poster_path}}' alt='$item->title' />
                <div class="av open">
                    <div class="status">
                        Tickets Available
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>