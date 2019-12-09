@extends('layouts.front')

@section('content')
<div class="kt-login__logo">
	<a href="#">
		<img src="https://ui-avatars.com/api/?size=80&name=Alto&background=0D8ABC&color=fff">
	</a>
</div>
<div class="kt-login__signin">
	<div class="kt-login__head">
		<h3 class="kt-login__title">Sign In To Admin</h3>
	</div>
	@if (session()->has('errors'))
	<div class="alert alert-warning fade show" role="alert">
		<div class="alert-text">{{$errors->first('email')}}</div>
		<div class="alert-close">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="la la-close"></i></span>
			</button>
		</div>
	</div>
	@endif
	<form class="kt-form" method="POST" action="{{ route('login') }}">
		@csrf
		<div class="input-group">
			<input class="form-control" type="email" placeholder="Email" name="email" autocomplete="off">
		</div>
		<div class="input-group">
			<input class="form-control" type="password" placeholder="Password" name="password">
		</div>
		<div class="row kt-login__extra">
			<div class="col">
				<a href="{{route('password.request')}}" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
			</div>
		</div>
		<div class="kt-login__actions">
			<button type="submit" id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">{{ __('Login') }}</button>
		</div>
	</form>
</div>	
@endsection