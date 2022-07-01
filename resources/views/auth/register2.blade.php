    
@extends('layouts.layout')
@section('content')


<script type="text/javascript">

    $(function() {
        $('#registerModal').modal('show');
    
    });
</script>
    
<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="registerModal">Register / <a class="underline text-sm mainColor hover:text-gray-900"  href="{{route('login')}}" >Login</a></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="register_name" class=" form-control" type="text" name="name" :value="old('name')" required autofocus />
                        
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
</div>


@endsection