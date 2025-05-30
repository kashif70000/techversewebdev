@extends('layouts.auth.layout')

@section('content')
    <div class="row h-100">
        <div class="col-12 col-md-5 pe-0 position-relative">
            <div class="p-5" style="position: absolute;top: 50%;transform: translateY(-50%);">
                <h2>UMT Item Recovery Portal</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email" class="form-label">Email:</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password" class="form-label">Password:</label>

                                <div class="input-group mb-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" aria-describedby="basic-addon1">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="mdi mdi-eye"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 my-1 text-end">
                            <a href="#" style="text-decoration: none;">Forgot Password?</a>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                        <div class="col-12 text-center mt-1">
                            Dont have an account? <br>
                            <a href="{{ route('register') }}" style="text-decoration: none;">Create a new one</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-7" style="background-color: gray">

        </div>
    </div>
@endsection
