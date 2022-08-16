{include file="header-page.tpl" title=$article.meta_title keywords=$article.keywords description=$article.description}
<main class="main">
      <!-- Intro block -->
      <div class="intro-block padd">
        <div class="container">
          <div class="intro-block__center bg-img" style="background-image: url({$article.images.original.url});">
            <h2 class="intro-block__text">{$article.title}</h2>
          </div>
        </div>
      </div>
      <!-- INFO -->
      <div class="page-info padd-sect">
        <div class="container">
          <div class="page-info__inner">
            <div class="page-info__content">
              <div class="page-info__date">{$article.publishedOn|date_format:'%d.%m.%Y'}</div>
              {$article.content|replace:'<h3':'<h3 class="page-info__title"'|replace:'<ul':'<ul class="page-info__list"'|replace:'<li':'<li class="page-info__item"' nofilter}
              
            </div>

            <div class="tags">
              <div class="tags__content">
                
                <div class="tags__content-navigation">
                {assign var="tags" value=','|explode:$article.tags}
                {fetch_section assign=tagsSection section=843}
                {foreach from=$tags item=tag name=tags}
                    <div class="tags__content-item">               
                        <a href="{$tagsSection.url}?query={$tag}" class="tags__content-link">{$tag}</a>
                    </div>
                {/foreach}
                 
                  {* <div class="tags__content-item">
                    <a href="" class="tags__content-link">Экология</a>
                  </div>
                  <div class="tags__content-item">
                    <a href="" class="tags__content-link">Автоматизация</a>
                  </div>
                  <div class="tags__content-item">
                    <a href="" class="tags__content-link">Команда</a>
                  </div>
                  <div class="tags__content-item">
                    <a href="" class="tags__content-link">Обучение сотрудников</a>
                  </div>
                  <div class="tags__content-item">
                    <a href="" class="tags__content-link">Семинары и тренинги</a>
                  </div>
                  <div class="tags__content-item">
                    <a href="" class="tags__content-link">Автоматизация</a>
                  </div>
                  <div class="tags__content-item">
                    <a href="" class="tags__content-link">Экология</a>
                  </div>
                  <div class="tags__content-item">
                    <a href="" class="tags__content-link">Сотрудники</a>
                  </div>
                  <div class="tags__content-item">
                    <a href="" class="tags__content-link">Команда</a>
                  </div> *}
                </div>
                <div class="tags__social">
                  <div class="btn_wrap__social">
                    <span class="__social">Share</span>
                    <div class="container__social">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>                        
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {images_articles getFrom='articles' assign='articleImages' articleId=$article.articleId }
            
            {foreach from=$articleImages item=item key=key name=articleImg}
            
            {if $item.description=='video'}
            <!-- Видео Блок -->
              <div class="info-video padd">
                <div class="container">

                    
                    <div class="info-video__center bg-img" style="background-image: url({$SITE_URL}/uploads/gallery/big-{$item.fileName});">
                    
                    <a data-fancybox href="{$item.link}">
                      <button class="info-video__btn"><img src="{$THEME_URL}/img/youtube.svg" alt=""></button>
                   </a>
                  </div>
                </div>
              </div>
            {/if}
            {/foreach}
      <div class="text__block">
          <div class="container">
              <div class="text__block-content">
                 {$article.summary2|replace:'<h2':'<h2 class="page-info__title"' nofilter}
              </div>
           
          </div>
         
      </div>
      <section class="preview padd-secondary">
        <div class="container">
          <div class="preview__inner">
            <div class="preview__content">
              {fetch_section assign=akfaGroup section=836}
                {$akfaGroup.summary|replace:'<h2':'<h2 class="preview__content-title"' nofilter}
            </div>
          </div>
        </div>
      </section>

      <!-- aritcles-->
      <div class="info-arcticles info-arcticles__padd">
        <div class="container">
          <div class="info-arcticles__wrapper">
            <h2 class="info-arcticles__nav">Рекомендуемые статьи</h2>
            <div class="info-arcticles__inner">
                {fetch_articles assign=sectionArticles section=$article.section.sectionId limit=3 skip=$article.articleId}
                
                {foreach item=article from=$sectionArticles name=sectionArticles}
                  <a href="{$article.url}" class="info-arcticles__body">
                    <div class="info-arcticles__body-image">
                      <div class="info-arcticles__body-img">
                        <img src="{$article.images.medium.url}" alt="">
                      </div>
                    </div>
                    <h3 class="info-arcticles__title">{$article.title}</h3>
                    {$article.summary nofilter}
                     <button class="info-arcticles__btn" href="{$article.url}">Подробнее<span class="icon-arrow-short-right"></span></button>
                  </a>
                  {/foreach}
            </div>
          </div>
        </div>
      </div>
    </main>
{include file="footer.tpl"}