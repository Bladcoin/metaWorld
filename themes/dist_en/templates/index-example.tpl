{include file="header.tpl" }

<main class="main">
    <!-- todo section hero -->
      <section class="hero bg-image" style="background-image: url({$section.images.original.url});">

        <div class="hero__body container">
            <div class="hero__row">
                <div class="hero__head">

                    <h1 class="hero__head-title">{$section.dop}</h1>
                
                </div>

                <div class="hero__desc">

                      <div class="hero__desc-top">
                      
                      {bracket_regex from=$section.summary }
                      {foreach from=$regex item=item}

                        <h3 class="hero__desc-subtitle">{$item.code|strip_tags}</h3>
                        {* <h2 class="hero__desc-title">Объединяем поставщика <br> и потребителя металлопродукции</h2> *}
                        {$item.content|replace:'/n':'<br>'|replace:"<p>":'<h2 class="hero__desc-title">'|replace:"</p>":"</h2>" nofilter}
                      
                      {/foreach}

                      </div>


                      <div class="hero__desc-bottom">

                        {bracket_regex from=$section.content }
                        {foreach from=$regex item=item}
                          <div class="hero__text">
                            <h3>{$item.code|strip_tags}</h3>
                            {$item.content nofilter}
                          </div>
                        {/foreach}

                      </div>

                      <div class="hero__desc-btn">

                        <button type="button"  class="btn" data-modal='modal-hero'>{$section.section_icon}</button>

                      </div>

                </div>

            </div>
        </div>

      </section>

       <!-- todo section product -->

      {fetch_section assign=production section=988}

      <section class="product indent">
        <div class="container">
            <div class="product__head">
                <h2 class="product__title title">{$production.name}</h2>
                <div class="product__navigation">
                  <div class="swiper-button-prev product-button-prev">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.75 8.75002H4.78748L10.8875 2.65002C11.375 2.16252 11.375 1.36252 10.8875 0.875024C10.4 0.387524 9.61248 0.387524 9.12498 0.875024L0.887476 9.11252C0.399976 9.60002 0.399976 10.3875 0.887476 10.875L9.12498 19.1125C9.61248 19.6 10.4 19.6 10.8875 19.1125C11.375 18.625 11.375 17.8375 10.8875 17.35L4.78748 11.25H18.75C19.4375 11.25 20 10.6875 20 10C20 9.31252 19.4375 8.75002 18.75 8.75002Z"/>
                      </svg>
                  </div>
                  <div class="swiper-button-next product-button-next">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.25 11.25H15.2125L9.1125 17.35C8.625 17.8375 8.625 18.6375 9.1125 19.125C9.6 19.6125 10.3875 19.6125 10.875 19.125L19.1125 10.8875C19.6 10.4 19.6 9.61253 19.1125 9.12503L10.8875 0.875024C10.4 0.387524 9.6125 0.387524 9.125 0.875024C8.6375 1.36252 8.6375 2.15003 9.125 2.63753L15.2125 8.75003H1.25C0.5625 8.75003 0 9.31253 0 10C0 10.6875 0.5625 11.25 1.25 11.25Z"/>
                    </svg>
                    </div>
                </div>
            </div>
            <div class="product__slider">

              <div class="swiper-container product__slider-container">
                {fetch_section assign=slider section=991}
                <div class="swiper-wrapper">
                  
                  {fetch_sections assign=slides from=$slider.sectionId status='visible'}
                  {foreach item=slide from=$slides name=slides}

                  <a href="{$slide.url}" class="swiper-slide product-slide bg-image" style="background-image: url({$slide.images.original.url});">
                    <h3>{$slide.name}</h3>
                  </a>

                  {/foreach}

                </div>
              </div>

            </div>
        </div>
      </section>


       <!-- todo section benefits  -->
      {fetch_section assign=benifits section=982}
      <section class="benefits indent">
        <div class="container">
            <div class="benefits__head">
              <h2 class="benefits__title title">{$benifits.name}</h2>
            </div>
            <div class="benefits__row">
              <div class="benefits__desc-number">

                {bracket_regex from=$benifits.summary}
                {foreach from=$regex item=item}

                  <div class="benefits__item">
                    <div class="benefits__item-number">{$item.code|strip_tags}</div>
                    {$item.content nofilter}
                  </div>
                  
                {/foreach}

              </div>

              <div class="benefits__desc-advantage advantage">

                {bracket_regex from=$benifits.content }
                {foreach from=$regex item=item}

                    <div class="advantage__item">
                      <div class="advantage__number">{$item.code|strip_tags}</div>
                      {$item.content nofilter}
                    </div>

                {/foreach}

              </div>
            </div>
        </div>
      </section>
      
      {fetch_section assign=delivery section=983}
      <!-- todo section delivery  -->
      <section class="delivery indent">
        <div class="container">
            <div class="delivery__wrapper" style="background-image: url({$THEME_URL}/img/delivery/delivery-img.png);">
              <div class="delivery__row">
                <div class="delivery__desc">
                    <h2 class="delivery__title">{$delivery.name}</h2>
                    {$delivery.summary nofilter}

                    <a class="delivery__link" href="{$THEME_URL}/#">Подробнее
                      <svg width="18" height="12" viewBox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.00002 7.00002L14.17 7.00002L11.29 9.88002C10.9 10.27 10.9 10.9 11.29 11.29C11.68 11.68 12.31 11.68 12.7 11.29L17.29 6.70002C17.68 6.31002 17.68 5.68002 17.29 5.29002L12.7 0.700021C12.31 0.31002 11.68 0.31002 11.29 0.700021C10.9 1.09002 10.9 1.72002 11.29 2.11002L14.17 5.00002L1.00002 5.00002C0.45002 5.00002 1.90735e-05 5.45002 1.90735e-05 6.00002C1.90735e-05 6.55002 0.45002 7.00002 1.00002 7.00002Z"/>
                      </svg>
                    </a>

                    <div class="delivery__inner">

                      {images_sections assign=sImages section=$delivery.sectionId orderBy=$sImages.field order=DESC getFrom='gallery'}
                      {bracket_regex from=$delivery.content }
                      {foreach from=$regex item=item name=brackets}

                      <div class="delivery__item">
                        <div class="delivery__body">
                      {assign var="i" value=$smarty.foreach.brackets.iteration - 1 }
                          {section loop=$sImages start=$i max=1 name=index } 
                          <div class="delivery__body-img"><img loading="lazy" src="{$SITE_URL}/uploads/gallery/big-{$sImages[index].fileName}" alt=""></div>
                          {/section}

                          {$item.content nofilter}
                        </div>
                      </div>
                      
                      {/foreach}

                    </div>
                </div>
              </div>
            </div>
        </div>
      </section>

       <!-- todo section questions  -->
      {fetch_section assign=vopros section=984}

      <section class="questions indent">
        <div class="container">
            <div class="questions__wrapper">
              <div class="questions__row">
                <div class="questions__desc">
                  <form class="questions__form" action="#">
                    <h2 class="questions__title title">{$vopros.name}</h2>
                    {$vopros.summary nofilter}
                    <div class="questions__form-item">
                      <input type="tel" placeholder="Ваш номер">
                      <button type="submit" class="questions__btn"><img loading="lazy" src="{$THEME_URL}/img/questions/question-arrow.svg" alt="arrow-right-btn"></button>
                    </div>
                  </form>
                </div>
                <div class="questions__image">
                    <img loading="lazy" src="{$vopros.images.original.url}" alt="">
                </div>
              </div>
            </div>
        </div>
      </section>

  </main>

{include file="footer.tpl" }