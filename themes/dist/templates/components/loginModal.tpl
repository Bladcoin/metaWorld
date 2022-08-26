<div class="modal fade" id="loginModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">
						Sign In
					</div>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					{* <p class="mb-4 text-muted">with</p> *}
					{* <div class="row mb-3">
						<div class="col">
							<a href="#" class="d-block w-100 bg-white rounded p-3 small text-dark">
								<img src="{$THEME_URL}/images/google.svg" class="mr-1" width="18" height="18" alt="">
								Google
							</a>
						</div>
						<div class="col">
							<a href="#" class="d-block w-100 bg-primary rounded p-3 small">
								<img src="{$THEME_URL}/images/fb.svg" class="mr-1" width="18" height="18" alt="">
								Facebook
							</a>
						</div>
					</div> *}
					{* <p class="mb-4 text-muted">or enter the</p> *}
					
					<form action="/public/sign-in.php" method="POST">
						<div class="mb-3">
							<div class="input-group mb-4">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="{$THEME_URL}/images/user.svg" class="mr-1" width="16" height="21" alt="">
									</div>
								</div>
								<input
									type="text"
									name="sign_in[email]"
									class="form-control"
									placeholder="email or username"
									required
								>
							</div>
						</div>
						<div class="input-group mb-4">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<img src="{$THEME_URL}/images/lock.svg" class="mr-1" width="16" height="21" alt="">
								</div>
							</div>
							<input
								type="password"
								name="sign_in[password]"
								class="form-control"
								placeholder="password"
								required
							>
						</div>
						<div class="row justify-content-between mb-5">
							{* <div class="col-auto">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" checked class="custom-control-input" id="staySigned">
									<label class="custom-control-label" for="staySigned">Stay signed in</label>
								</div>
							</div> *}
							<div class="col-auto">
								<button type="button" class="btn btn-link p-0 text-white small" data-dismiss="modal" data-toggle="modal" data-target="#forgotPasswordModal">
									Forgot Password?
								</button>
							</div>
						</div>
						<button	class="btn btn-lg btn-primary w-100 mb-5">
							Sign In
						</button>
						{* <span class="text-muted">
							Not a member?
						</span> *}
						{* <button type="button" class="btn btn-link p-0 text-white small" data-dismiss="modal" data-toggle="modal" data-target="#registrationModal">
							Sign Up now
						</button> *}
						
					</form>


				</div>
			</div>
		</div>
	</div>