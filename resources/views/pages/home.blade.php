@extends ('layouts.main')

@section('form-content')
    @include('components.LoginForm')
    @include('components.RegisterForm')
@endsection
@section('content')
    @include('components.hero')
    @include('components.MovieGrid')
    <div class="promotions-cont">
        <div class="promotions">
            <div class="promotions-image-cont">
                <img src="https://cdn.britannica.com/08/190708-050-634BBDC0/Woman-container-popcorn-cinema-movie-theater.jpg"
                    alt="popcorn bucket">
            </div>
            <div class="promotions-text-cont">
                <div class="promotions-text">
                    <h2>Save Every Time You Pop In</h2>
                    <p>Get your 2022 Refillable Popcorn Bucket today for only $20.99+tax, and refill it on every visit to for only $4.99+tax. Don't miss this terrific value on the perfect movie snack, valid
                        for the entire year!</p>
                    <button>Buy Now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="promotions-cont">
        <div class="promotions-type-two">
            <div class="promotions-image-cont">
                <img src="https://amc-theatres-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,w_1600/v1640127386/amc-cdn/general/food-and-drink/_2022/impossible-nuggets/FB1467_ImpossibleNuggets_WebPromo_1200x856.jpg"
                    alt="meal combo">
            </div>
            <div class="promotions-text-cont">
                <div class="promotions-text">
                    <h2>Save Every Time You Pop In</h2>
                    <p>Crispy. Tender. Delicious. Impossible™ Nuggets are now available. Made from plants and packed with flavor, pair yours with a refreshing AHA Sparkling Water and take your taste buds on a trip.</p>
                    <button>Order Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection