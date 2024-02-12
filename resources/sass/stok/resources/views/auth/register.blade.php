@extends('layouts.auth')

@section('content')

<h4 class="mb-2">Ayo Register 🚀</h4>
              <p class="mb-4">Silahkan Buat akun anda!</p>

              <form  class="mb-3" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter your username"
                    value="{{ old('name') }}"
                    required autocomplete="name"
                    autofocus
                  />
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                   type="email"
                   class="form-control"
                   id="email"
                   name="email"
                   placeholder="Enter your email"
                   value="{{ old('email') }}"
                   required autocomplete="email" />
                   @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      required autocomplete="new-password"
                    />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Cpnfirm Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password-confirm"
                        class="form-control"
                        name="password_confirmation"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password"
                        required autocomplete="new-password"
                      />
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>

                <button class="btn btn-primary d-grid w-100">Sign up</button>
              </form>

              <p class="text-center">
                <span>Sudah punya akun?</span>
                <a href="{{ route('login') }}">
                  <span>Login</span>
                </a>
              </p>

@endsection
