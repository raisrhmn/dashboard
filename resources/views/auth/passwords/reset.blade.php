@extends('layouts.front')

@section('content')
<div class="kt-login__signin">
	<div class="kt-login__head">
		<h3 class="kt-login__title">{{ __('Reset Password') }}</h3>
    </div>
    @if (session('success'))
    <div class="alert alert-success fade show" role="alert">
		<div class="alert-text">{{ session('success') }}</div>
		<div class="alert-close">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="la la-close"></i></span>
			</button>
		</div>
	</div>
    @endif
    <form class="kt-form" method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{$token}}">
		<div class="input-group">
			<input class="form-control" type="email" placeholder="Email" name="email" value="{{ $email ?? old('email') }}" id="kt_email" autocomplete="off" required>
        </div>
        <div class="input-group">
			<input class="form-control" type="password" placeholder="Password" name="password" required>
        </div>
        <div class="input-group">
			<input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required>
		</div>
		<div class="kt-login__actions">
			<button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">{{ __('Submit') }}</button>
		</div>
	</form>
</div>
@endsection
