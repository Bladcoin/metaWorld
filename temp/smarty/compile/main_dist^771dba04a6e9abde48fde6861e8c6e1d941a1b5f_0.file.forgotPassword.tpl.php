<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:54
  from 'C:\xampp\htdocs\themes\dist\templates\components\forgotPassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d6a48c4b4_27968407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '771dba04a6e9abde48fde6861e8c6e1d941a1b5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\forgotPassword.tpl',
      1 => 1660548708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6d6a48c4b4_27968407 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="forgotPasswordModal" tabindex="-1">
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
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/images/lock.svg" class="mr-1" width="16" height="21" alt="">
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
	</div><?php }
}
