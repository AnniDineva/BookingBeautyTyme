@extends('layouts.layout')
@section('content')

<div class="card container">
    <div class="card-body">
        <h3 class="card-title text-center mainColor">Registrate Provider</h5>
        @if ($errors->any())
        <div class="alert alert-danger mx-3 mt-3">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('register')}}">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <x-label for="name" :value="__('Company Name')" />

                    <x-input id="register_name" class=" form-control" type="text" name="name" :value="old('name')" required autofocus />
                    
                </div>
                <!-- Email City -->
                <div class="mt-4 form-group">
                    <x-label for="city" :value="__('City')" />

                    <x-input id="city" class="form-control" type="text" name="city" :value="old('city')" required />
                </div>
                <!-- Contact Person -->
                <div class="mt-4 form-group">
                    <x-label for="contactPerson" :value="__('Contact Person')" />

                    <x-input id="contactPerson" class="form-control" type="text" name="contactPerson" :value="old('contactPerson')" required />
                </div>

                <!-- Email Address -->
                <div class="mt-4 form-group">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="register_email" class="form-control" type="email" name="email" :value="old('email')" required />
                </div>
                <!-- Phone -->
                <div class="mt-4 form-group">
                    <x-label for="phone" :value="__('Phone')" />

                    <x-input id="register_phone" class=" form-control"
                                    type="text"
                                    name="phone"
                                    :value="old('phone')"
                                    required  />
                </div>

                <!-- Password -->
                <div class="mt-4 form-group">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="register_password" class=" form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 form-group">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required />
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms">
                    <label class="form-check-label" for="terms">I accept the general conditions of use of the site</label>
                </div>
            </div>
            <div class="modal-footer">
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4 btn btn-primary mainColorBackground">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>
        </form>
    </div>
  </div>

  @endsection