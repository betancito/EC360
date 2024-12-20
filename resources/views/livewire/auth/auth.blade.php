@section('title','Authentication')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/Auth/auth.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
                <input class="toggle" type="checkbox">
                <span class="slider"></span>
                <span class="card-side"></span>
                <div class="flip-card__inner">
                    <div class="flip-card__front">
                        <div class="title">Log in</div>
                        <form action="" class="flip-card__form">
                            <input type="email" placeholder="Email" name="email" class="flip-card__input">
                            <input type="password" placeholder="Password" name="password" class="flip-card__input">
                            <button class="flip-card__btn">Let`s go!</button>
                        </form>
                    </div>
                    <div class="flip-card__back">
                        <div class="title">Sign up</div>
                        <form action="" class="flip-card__form">
                            <input type="name" placeholder="Name" class="flip-card__input">
                            <input type="email" placeholder="Email" name="email" class="flip-card__input">
                            <input type="password" placeholder="Password" name="password" class="flip-card__input">
                            <button class="flip-card__btn">Confirm!</button>
                        </form>
                    </div>
                </div>
            </label>
        </div>
    </div>
</div>
@section('scripts')

@endsection
