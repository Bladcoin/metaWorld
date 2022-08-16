{include file="header-article.tpl" title=$section.meta_title keywords=$section.keywords description=$section.description}

<main class="main">

    <section class="rezult padd-sect ">

      <div class="container">

        <div class="rezult__wrapper">

          <h2 class="rezult__nav">Результаты поиска по запросу "<b>{$query}</b>":</h2>

          <div class="rezult__inner">

            {fetch_articles assign=sectionArticles section=$section.sectionId perPage=6 query=$query assignPagination=pagination page=$page path=$section.path seFriendly=true type_content='products'}


            {foreach item=article from=$sectionArticles name=sectionArticles}

            <a href="{$article.url}" class="rezult__body">

              <div class="rezult__body-image">

                <div class="rezult__body-img">

                  <img src="{$article.images.medium.url}">

                </div>

              </div>

              <h3 class="rezult__title">{$article.title}</h3>

              {* {$article.summary nofilter} *}

               <button class="rezult__btn" href="{$article.url}">Подробнее<span class="icon-arrow-short-right"></span></button>
            </a>
            {/foreach}
          </div>

          {include file="modules/pagination.tpl"}
        </div>
      </div>
      
      
    </section>
  </main>
{include file="footer.tpl"}