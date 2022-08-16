<form method="post" {if $action}action="{$action}"{/if}>
	<div class="col-md-2 text-center">
		{html_options options=$filterErrorCodeOptions selected=$filterErrorCode name=filterErrorCode onchange="this.form.submit()" class="form-control select"}
	</div>
</form>
