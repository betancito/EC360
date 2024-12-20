@section('title','Authentication')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/Auth/auth.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="wrapper">
        <div class="card-switch" >
            <label class="switch">
                <input class="toggle" type="checkbox">
                <span class="slider"></span>
                <span class="card-side"></span>
                <div class="flip-card__inner">
                    <div class="flip-card__front">
                        <div class="title">Log in</div>
                        <form action="login" class="flip-card__form" wire:submit.prevent="login">
                            <input type="email"  class="flip-card__input" id="email"  name="email" wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            <input type="password" placeholder="Password" name="password" class="flip-card__input" id="password" wire:model="password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            <button type="submit" class="flip-card__btn">Let`s go!</button>
                        </form>
                        @if (session()->has('error'))
                        <div class="col-12">
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="flip-card__back">
                        <div class="title">Sign up</div>
                        <form action="register" class="flip-card__form" wire:submit.prevent="register">
                            <input type="name"  class="flip-card__input" name="name" id="name"  wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            <input type="email"  class="flip-card__input" id="email"  wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            <input type="password" placeholder="Password" name="password" class="flip-card__input" id="password" wire:model="r_password">
                            @error('r_password') <span class="text-danger">{{ $message }}</span> @enderror
                            <input type="text" class="flip-card__input" id="password_confirmation" wire:model="password_confirmation">
                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                            <button type="submit" class="flip-card__btn">Confirm!</button>
                        </form>
                    </div>
                </div>
            </label>
        </div>
    </div>
</div>
@section('scripts')

@endsection
