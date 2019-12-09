@extends('layouts.front')

@section('content')
<div class="kt-login__signin">
	<div class="kt-login__head">
		<h3 class="kt-login__title">Forgotten Password ?</h3>
		<div class="kt-login__desc">Enter your email to reset your password:</div>
    </div>
    @if (session('status'))
    <div class="alert alert-success fade show" role="alert">
		<div class="alert-text">{{ session('status') }}</div>
		<div class="alert-close">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="la la-close"></i></span>
			</button>
		</div>
	</div>
    @endif
    <form class="kt-form" method="POST" action="{{ route('password.email') }}">
        @csrf
		<div class="input-group">
			<input class="form-control" type="email" placeholder="Email" name="email" id="kt_email" autocomplete="off">
		</div>
		<div class="kt-login__actions">
			<button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
            <a href="{{route('login')}}" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</a>
		</div>
	</form>
</div>
@endsection
