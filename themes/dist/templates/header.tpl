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
									{if ( $navItem1.top_submenu eq '1' && $smarty.session.siteUser ) || $navItem1.top_submenu eq "0"}

										<li class="nav-item">
											<a class="nav-link" href="{$navItem1.alias}">{$navItem1.name}</a>
										</li>

									{/if}
								{/if}
							{/foreach}

							<li class="nav-item lang">
								<button type="button" class="btn btn-lang">{$currentLang}</button>

								<ul class="lang-list">
									{foreach from=$languages item=lang key=key name=name}

										<li>
											<a href="{$lang.url}">{$lang.codename}</a>
										</li>

									{/foreach}
								</ul>

							</li>
							<li class="nav-item ml-5">
								{if !$smarty.session.siteUser }

									<button type="button" class="btn btn-primary btn-sm ml-4 px-5" data-toggle="modal"
										data-target="#loginModal">{$section.alias}</button>
								{else}
									<form action="/public/sign-out.php" method="POST">
										<button
											class="btn btn-primary btn-sm ml-4 px-5">{if $currentLang == "ru"}Выйти{else}Logout{/if}</button>
									</form>
								{/if}
							</li>
						</ul>
					</div>
				</div>
			</div>
</header>