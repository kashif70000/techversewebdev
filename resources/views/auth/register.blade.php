@section('content')
    <div class="row h-100">
        <div class="col-12 col-md-5 pe-0 position-relative">
            <div class="p-5" style="position: absolute;top: 50%;transform: translateY(-50%);">
                <h2>UMT Item Recovery Portal</h2>
                <form method="POST" action="{{ route('register') }}">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email" class="form-label">User Name:</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password" class="form-label">Email:</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
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
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password" class="form-label">Confirm Password:</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn mt-3 btn-primary w-100">Login</button>
                        </div>
                        <div class="col-12 text-center mt-1">
                            Already have an account? <br>
                            <a href="{{ route('login') }}" style="text-decoration: none;">Sign in now</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-7" style="background-color: gray">

        </div>
    </div>
@endsection
