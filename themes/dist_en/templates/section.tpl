{include file="header.tpl" title=$section.meta_title keywords=$section.keywords description=$section.description}
<main>
            <div class="page-color-2 press-release-wrapper">
                {include file="modules/you-are-here.tpl"}
                <div class="container-2">
                    <div class="entry-header spec-entry-header-2">
                        <h2>{$section.name}</h2>
                        <div class="search-place">
                            {assign var="query" value=$smarty.request.query}
                            <form>
                                <input type="text" name="query" value="{$query}" placeholder="Поиск">
                                <button type="submit">
                                    <i class="icon-5"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="news">
                        <div class="row">
                            {if $query}
                            {fetch_articles assign=sectionArticles section=$section.sectionId perPage=6 assignPagination=pagination page=$page path=$section.path seFriendly=true query=$query}
                            {else}
                            {fetch_articles assign=sectionArticles section=$section.sectionId perPage=6 assignPagination=pagination page=$page path=$section.path seFriendly=true}
                            {/if}
                            {foreach item=article from=$sectionArticles name=sectionArticles}
                            <div class="col-md-4 item-wrapper">
                                <div class="item">
                                    <div class="img-content" style="background-image: url({$article.images.medium.url});">
                                        <div class="date">
                                            <p>{$article.publishedOn|date_format:'%d %B %Y'}</p>
                                        </div>
                                    </div>
                                    <div class="desc-content">
                                        <h3 data-text-limit="55">{$article.title}</h3>
                                        <p data-text-limit="190">{$article.summary|strip_tags nofilter}</p>
                                        <span class="btn-def-3">
                                            <a href="{$article.url}">Читать далее</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                    {include file="modules/pagination.tpl"}
                </div>
            </div>
        </main>
{include file="footer.tpl"}