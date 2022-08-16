{if $pagination.pages}
<div class="search__pagination">
    {if $pagination.previousPage}
    <a class="search__pagination-prev" href="{$pagination.previousPage.url}{if $smarty.get.query}?query={$smarty.get.query}{/if}"><span class="icon-arrow-short-right"></span>Предыдущая статья</a>
    {/if}
    {foreach from=$pagination.pages item=pageNum}
        {if $pageNum.num eq $page}
        <a class="search__pagination-nav active" href="{$pageNum.url}{if $smarty.get.query}?query={$smarty.get.query}{/if}">{$pageNum.num}</a>
        {elseif $pageNum.num eq '...'}
            ...
        {else}
        <a class="search__pagination-nav" href="{$pageNum.url}{if $smarty.get.query}?query={$smarty.get.query}{/if}">{$pageNum.num}</a>
        {/if}
    {/foreach}
    {if $pagination.nextPage}
    <a class="search__pagination-next" href="{$pagination.nextPage.url}{if $smarty.get.query}?query={$smarty.get.query}{/if}">Следующая статья<span class="icon-arrow-short-right"></span></a>
    {/if}
</div>
{/if}