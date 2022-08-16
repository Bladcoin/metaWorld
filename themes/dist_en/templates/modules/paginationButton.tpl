{if $pagination.pages}   
		{if $pagination.nextPage}
		<a href="{$pagination.nextPage.url}" class="btn-see">Показать ещё</a>
		{/if}
{/if}