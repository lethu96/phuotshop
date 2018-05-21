@extends('layouts.app')

@section('content')

<div id="login">
        <h2 style="text-align: center;"><span class="fontawesome-lock"></span>Sign In</h2>

        <form action="{{ route('login') }}" method="POST">
                @csrf
            <fieldset>

                <p><label for="email">E-mail address</label></p>
                 @if ($errors->has('email'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif

                <p><input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

                <p><label for="password">Password</label></p>
                <p> <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif</p> <!-- JS because of IE support; better: placeholder="password" -->
                <p style="padding-left: 30%">
                <button type="submit" class="btn btn-primary" style="background-color: #1fd24efc; border: none;">
                             {{ __('  Login   ') }}
                </button>

              <a class="btn btn-link" href="{{ url('/getMail') }}">
                {{ __('Forgot Your Password?') }}
                </a>
                </p>


            </fieldset>

        </form>

    </div> 

@endsection
