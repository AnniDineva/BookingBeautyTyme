@extends('layouts.layout')
@section('content')


<script type="text/javascript">

    $(function() {
        $('#loginModal').modal('show');
    
    });
    </script>


<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="loginModalLabel">Login / <a class="underline text-sm mainColor hover:text-gray-900"  href="{{route('register')}}" >Registrate</a></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="modal-body">
                
                    <!-- Email Address -->
                    <div class="form-group">
                        <x-label for="email" :value="__('Email')" />
        
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4 form-group">
                        <x-label for="password" :value="__('Password')" />
        
                        <x-input id="password" class="block mt-1 w-full" class="form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                                    
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <!-- Remember Me -->
                    <div class=" mt-4 form-group">
                        <label for="remember_me" class="inline-flex ">
                            <input id="remember_me" type="checkbox"  name="remember">
                            {{ __('Remember me') }}
                        </label>
                    </div>
        
                
            
                </div>
                <div class="modal-footer">
                    <div class="flex items-center justify-end mt-4">
                        
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-3 btn btn-primary mainColorBackground">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    @media screen and (min-height: 615px) and (min-width: 1120px) {
        #footer {
            position: absolute;
            top: 30.5%;
            width: 100%;
    }
        }
      }
    </style>
@endsection