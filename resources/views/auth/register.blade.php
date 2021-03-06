@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


<!-- new code -->

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                @if ($errors->has('age'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                                <input id="age" type="number" class="form-control" name="age" >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="interest" class="col-md-4 col-form-label text-md-right">{{ __('Interest') }}</label>

                            <div class="col-md-6">
                              @if ($errors->has('interest'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('interest') }}</strong>
                                  </span>
                              @endif
                                {{-- <input id="interest" type="text" class="form-control" name="interest" required> --}}
                                <select name="interest[]" multiple class="form-control" required>
                                  <option>Select Interests</option>
                                  @foreach($interests as $inter)
                                    <option value="{{ $inter->name }}">{{ $inter->name }}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                        <div class="col-sm-6">
                          @if ($errors->has('gender'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('gender') }}</strong>
                              </span>
                          @endif
                                <label class="radio-inline">
                            				<input type="radio" name="gender" id="gender1" value="male">  Male
                          			 </label>
                          			<label class="radio-inline">
                            				<input type="radio" name="gender" id="gender2" value="female">  Female
                          			</label>

                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="about" class="col-md-4 col-form-label text-md-right">{{ __('About') }}</label>

                            <div class="col-md-6">
                              @if ($errors->has('about'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('about') }}</strong>
                                  </span>
                              @endif
                                <textarea id="about"  class="form-control" name="about" ></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="work" class="col-md-4 col-form-label text-md-right">{{ __('Work') }}</label>

                            <div class="col-md-6">
                              @if ($errors->has('work'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('work') }}</strong>
                                  </span>
                              @endif
                                <input id="work" type="text" class="form-control" name="work" >
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="hidden" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> --}}



<!-- end code -->


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
