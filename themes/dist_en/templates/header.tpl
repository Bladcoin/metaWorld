{include file="components/doctype.tpl"}

<body>
	<div class="wrapper">

		<header id="header">

			{include file="components/notifications.tpl"}

			{if $errors.checkLogin }

				<script>
					$(function() {
						$('#toast2').toast("show")
					})
				</script>
			{elseif $messages.success }
				<script>
					$(function() {
						$('#toast3').toast("show")
					})
				</script>

			{/if}



			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col">

					</div>
					<div class="col-auto">

						<ul class="nav">
							{foreach item=navItem1 from=$TREE name=navItems1}
								{if $navItem1.status eq 'visible' && $navItem1.top_menu eq '1'}

									<li class="nav-item">
										<a class="nav-link" href="{$navItem1.alias}">{$navItem1.name}</a>
									</li>

								{/if}
							{/foreach}

							<li class="nav-item lang">
								<button type="button" class="btn btn-lang">ru</button>
								<ul class="lang-list">
									<li>
										<a href="#">Русский</a>
									</li>
									<li>
										<a href="#">English</a>
									</li>
								</ul>
							</li>
							<li class="nav-item ml-5">
								{if !$smarty.session.siteUser }

									<button type="button" class="btn btn-primary btn-sm ml-4 px-5" data-toggle="modal"
										data-target="#loginModal">Join</button>
								{else}
									<form action="/public/sign-out.php" method="POST">
										<button class="btn btn-primary btn-sm ml-4 px-5">Logout</button>
									</form>
								{/if}
							</li>
						</ul>
					</div>
				</div>
			</div>
</header>