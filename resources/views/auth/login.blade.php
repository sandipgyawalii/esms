<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>ESMS | Login Page</title>
	<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						{{-- <img src="" alt="logo" width="100"> --}}
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<div class="container mt-4">
								@if(session('status'))
								<div class="alert alert-success">
								{{ session('status') }}
								@endif
								</div>
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="post" action="{{url('login')}}">
                                @csrf
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value=""  autofocus>
									<div class="danger">
										@error('email')
										{{$message}}	
										@enderror
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="{{url('forgot-password')}}" class="float-end">
											Forgot Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
									<div class="danger">
										@error('password')
										{{$message}}	
										@enderror
									</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="{{url('register')}}" class="text-dark">Create One</a>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>