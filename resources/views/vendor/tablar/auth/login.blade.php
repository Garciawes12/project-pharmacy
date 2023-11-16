@extends('tablar::auth.layout')
@section('title', 'Login')
@section('content')
    <div class="container container-tight py-4">
        <div class="text-center mb-1 mt-5">
            {{-- <h2>FARMACIA FLEA</h2> --}}
            <a href="" class="navbar-brand navbar-brand-autodark">
                <img src="{{asset('logo2.jpeg')}}" width="70"
                     alt="" class="rounded"></a>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Iniciar Sesion</h2>
                <form action="{{route('login')}}" method="post" autocomplete="off" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                               placeholder="your@email.com"
                               autocomplete="off">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Contraseña
                            <span class="form-label-description">
                    <a href="{{route('password.request')}}">Olvide la contraseña</a>
                  </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Your password"
                                   autocomplete="off">
                            <span class="input-group-text">

                  </span>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input"/>
                            <span class="form-check-label">Recuérdame en este dispositivo</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Acceder</button>
                    </div>
                </form>
            </div>

    </div>
@endsection
