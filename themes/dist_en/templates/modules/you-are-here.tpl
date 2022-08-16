<div class="breadcrumb-container">
	<div class="container-2">
	  <ol class="breadcrumb">
				<li><a href="{$SITE_URL}">Главная</a></li>
				{foreach item=navItem from=$sectionParents name=navItems}
					{if $smarty.foreach.navItems.last}
						{if $boldLastItem}
							<li {* class="active" *}><a href="{$navItem.url}">{$navItem.alias}</a></li>
						{elseif $noLastLink}
							<li><a href="{$navItem.url}">{$navItem.alias}</a></li>
						{else}
							{if $article}
							<li><a href="{$navItem.url}">{$navItem.alias}</a></li>
							<li class="active"><a href="{$article.url}">{$article.title}</a></li>
							{else}
							<li class="active"><a href="{$navItem.url}">{$navItem.alias}</a></li>
							{/if}
						{/if}
					{else}
						<li><a href="{$navItem.url}" >{$navItem.alias}</a></li>
					{/if}
				{/foreach}
		</ol>
	</div>
</div>