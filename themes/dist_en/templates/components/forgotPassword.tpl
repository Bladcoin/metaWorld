<div class="modal fade" id="forgotPasswordModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">
						Password reset
					</div>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="/public/forgot-password.php" method="POST">
						<fieldset>
							<p>Enter the email that your account is registered to</p>
							<div class="input-group mb-4">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="{$THEME_URL}/images/lock.svg" class="mr-1" width="16" height="21" alt="">
									</div>
								</div>
								<input
									type="email"
									name="forgot_password[email]"
									class="form-control"
									placeholder="email"
									required
								>
							</div>
							<button	class="btn btn-lg btn-primary w-100">
								Next
							</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>