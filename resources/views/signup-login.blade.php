@extends('base')

@section('content')
	<div class="container level">
		<div class="signup-login">
			<div class="column">
				<h2>Sign Up</h2>
				<form>
					<div class="form-input with-margin-bottom with-border">
						<label for="name" class="hidden">Name</label>
						<input type="text" name="name" id="name" placeholder="Name">
					</div>
					<div class="form-input with-margin-bottom with-border">
						<label for="email" class="hidden">Email Address</label>
						<input type="text" name="email" id="email" placeholder="Email Address">
					</div>
					<div class="form-input with-margin-bottom with-border">
						<label for="phone" class="hidden">Phone Number (optional)</label>
						<input type="text" name="phone" id="phone" placeholder="Phone Number (optional)">
					</div>
					<div class="form-input with-margin-bottom with-border">
						<label for="password" class="hidden">Password</label>
						<input type="password" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-input with-margin-bottom with-border">
						<label for="confirm_password" class="hidden">Confirm Password</label>
						<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
					</div>
					<div class="form-input">
						<button type="submit" class="btn">Sign Up</button>
					</div>
				</form>
			</div>
			<div class="column">
				<h2>Login</h2>
				<form>
					<div class="form-input with-margin-bottom with-border">
						<label for="email" class="hidden">Email Address</label>
						<input type="text" name="email" id="email" placeholder="Email Address">
					</div>
					<div class="form-input with-margin-bottom with-border">
						<label for="password" class="hidden">Password</label>
						<input type="password" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-input">
						<button type="submit" class="btn">Login</button>
					</div>					
				</form>
			</div>
		</div>
		<p>Accounts are optional, however if you would like to contribute to our growing list of neighborhoods and streets having an account will bypass the approval process which makes our moderators jobs easier!</p>
	</div>
@endsection