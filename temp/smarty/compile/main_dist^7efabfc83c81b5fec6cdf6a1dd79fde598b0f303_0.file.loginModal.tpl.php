<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:54
  from 'C:\xampp\htdocs\themes\dist\templates\components\loginModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d6a440843_54512197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7efabfc83c81b5fec6cdf6a1dd79fde598b0f303' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\loginModal.tpl',
      1 => 1660642170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6d6a440843_54512197 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="loginModal" tabindex="-1">
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
																				
					<form action="/public/sign-in.php" method="POST">
						<div class="mb-3">
							<div class="input-group mb-4">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/images/user.svg" class="mr-1" width="16" height="21" alt="">
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
									<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/images/lock.svg" class="mr-1" width="16" height="21" alt="">
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
														<div class="col-auto">
								<button type="button" class="btn btn-link p-0 text-white small" data-dismiss="modal" data-toggle="modal" data-target="#forgotPasswordModal">
									Forgot Password?
								</button>
							</div>
						</div>
						<button	class="btn btn-lg btn-primary w-100 mb-5">
							Sign In
						</button>
						<span class="text-muted">
							Not a member?
						</span>
						<button type="button" class="btn btn-link p-0 text-white small" data-dismiss="modal" data-toggle="modal" data-target="#registrationModal">
							Sign Up now
						</button>
					</form>


				</div>
			</div>
		</div>
	</div><?php }
}
