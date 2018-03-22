@extends('layouts.auth')

@section('content')
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="{{ asset('img/logo.jpg') }}">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Forgot you password?</h4>
							<form method="POST" action="{{ route('password.email') }}">
                                @csrf {{-- Form field protection --}}
							 
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @else
                                        <div class="form-text text-muted">
                                            <small>By clicking on "Forget password" we will send your a reset link.</small>
                                        </div>
                                    @endif
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Request new password
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection