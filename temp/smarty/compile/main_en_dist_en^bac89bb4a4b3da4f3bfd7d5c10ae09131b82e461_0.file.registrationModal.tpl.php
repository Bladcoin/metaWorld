<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:44:54
  from 'C:\xampp\htdocs\themes\dist_en\templates\components\registrationModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb4af6bae014_92666854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac89bb4a4b3da4f3bfd7d5c10ae09131b82e461' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist_en\\templates\\components\\registrationModal.tpl',
      1 => 1660548286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb4af6bae014_92666854 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="registrationModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">
						Sign Up
					</div>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="mb-4 text-muted">with</p>
					<div class="row mb-3">
						<div class="col">
							<a href="#" class="d-block w-100 bg-white rounded p-3 small text-dark">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/images/google.svg" class="mr-1" width="18" height="18" alt="">
								Google
							</a>
						</div>
						<div class="col">
							<a href="#" class="d-block w-100 bg-primary rounded p-3 small">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/images/fb.svg" class="mr-1" width="18" height="18" alt="">
								Facebook
							</a>
						</div>
					</div>
					<p class="mb-4 text-muted">or create the account</p>
					<form action="/public/sign-up.php" method="POST">
					<input type="hidden" name="sign_up[offer]" value="on">	
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
									name="sign_up[email]"
									class="form-control"
									placeholder="email"
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
								name="sign_up[password]"
								class="form-control"
								placeholder="password"
								required
							>
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
								name="sign_up[password2]"
								class="form-control"
								placeholder="confirm password"
								required
							>
						</div>
						<div class="row justify-content-between mb-5">
							<div class="col-auto">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" checked class="custom-control-input" id="rememberMe">
									<label class="custom-control-label" for="rememberMe">Remember Me</label>
								</div>
							</div>
						</div>
						<button	class="btn btn-lg btn-primary w-100 mb-5">
							Sign Up
						</button>
						<span class="text-muted">
							Already have an account?
						</span>
						<button type="button" class="btn btn-link p-0 text-white small" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">
							Sign In now
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php }
}
