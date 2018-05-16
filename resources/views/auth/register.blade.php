@extends('layouts.app')

@section('content')
<div id="register">
    <h2 style="text-align: center;"><span class="fontawesome-lock"></span>Register</h2>
    <form method="POST" action="{{ route('register') }}">
                        @csrf
        <fieldset>
            <div class="col-md-4 first">
                <p><label for="name">Name</label> 
                 </p>
                <p><label for="email">E-mail </label>
                 </p>

                <p><label for="email">Password</label>
                 
                 </p>
                  <p><label for="email">Confirm Password</label>
                 </p>
                 <p><label for="phone">Phone</label>
                 
                 </p>

                 <p><label for="address">Adress</label>
                 
                 </p>
                  <p><label for="birthday">Birthday</label>
                 
                 </p>
                 <p><label for="birthday">Gender</label>
                 
                 </p>
            </div>

            <div class="col-md-8">
             <p>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('name') }}</strong>
                    </span>
                 @endif
              </p>

                <p><input  type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
                </p> 

                <p><input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
                    @if ($errors->has('password'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('password') }}</strong>
                    </span>
                 @endif
                </p>
                <p><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    @if ($errors->has('password-confirm'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('password-confirm') }}</strong>
                    </span>
                 @endif

                </p>

                <p><input id="name" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('phone'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                 @endif
                </p>

                

                <p><input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>
                    @if ($errors->has('address'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('address') }}</strong>
                    </span>
                 @endif
                </p>

                <p><input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required autofocus>
                    @if ($errors->has('birthday'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('birthday') }}</strong>
                    </span>
                 @endif
                </p>
                <p><select  className="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @if ($errors->has('gender'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                 @endif
                </p>

                    <button type="submit" class="btn btn-primary" style="background-color: #1fd24efc; border: none;">
                             {{ __('  Register   ') }}
                </button>
                        </fieldset>
                    </form>
            </div>
</div>
@endsection
