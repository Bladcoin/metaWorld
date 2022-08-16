{include file="header.tpl" }

<main class="main">
   <!-- Todo section company hero -->
    <section class="company bg-image" style="background-image: url({$section.images.original.url});">
        <div class="company__body container">
            <div class="company__row">
                
                {bracket_regex from=$section.summary}
                {foreach from=$regex item=item}

                    <h3 class="company__uptitle">{$item.code|strip_tags}</h3> 
                    {$item.content|replace:'<p>':'<h2 class="company__title">'|replace:"</p>":'</h2>' nofilter}

                {/foreach}
            </div>
        </div>
    </section>

    <!-- TODO section sell company -->
    {fetch_articles assign=sectionArticles section=$section.sectionId limit=1}
    {foreach item=article from=$sectionArticles name=sectionArticles}

    <section class="sell indent">
        <div class="container">
          <div class="sell__wrapper">
            <div class="sell__inner">
              <div class="sell__start">
                <div class="sell__head">
                  <h2 class="sell__title title">{$article.title}</h2>
                </div>
                <div class="sell__image">
                  <img loading="lazy" src="{$article.images.original.url}" alt="">
                </div>
              </div>
              <div class="sell__end">
               {bracket_regex from=$article.summary }
               {foreach from=$regex item=item}

                <div class="sell__item">
                  <div class="sell__item-number">{$item.code|strip_tags}</div>
                  {$item.content nofilter}
                </div>

                {/foreach}
                 
              </div>
                
            </div>
          </div>
        </div>
    </section>

    {/foreach}

    <!-- TODO section description company -->
    <section class="description indent ">
      <div class="container">
          <div class="description__head">
            {$section.content|replace:"<p>":"<h3>"|replace:'</p>':'</h3>' nofilter}
          </div>
          {images_sections assign=sImages section=$section.sectionId orderBy=$sImages.field order=DESC getFrom='gallery'}
          <div class="description__wrapper bg-image" style="background-image: url({$SITE_URL}/uploads/gallery/big-{$sImages.0.fileName});">
           {bracket_regex from=$section.content_two }
           {foreach from=$regex item=item}

              <div class="description__text">
                {$item.code|strip_tags}
              </div>
              {$item.content|replace:'<p>':'<div class="description__text">'|replace:"</p>":"</div>" nofilter}

            {/foreach}
              
          </div>
      </div>
    </section>   
    
    <!-- TODO section activities company -->
    {fetch_section assign=activities section=985}

    <section class="activities indent"> 
      <div class="container">
        <div class="activities__head">
          <h2 class="activities__title title">{$activities.name}</h2>
        </div>
        <div class="activities__inner">
          <div class="activities__image">
            <img loading="lazy" src="{$activities.images.original.url}" alt="">
          </div>
          <div class="activities__info">
              <ul class="activities__list">
              	{bracket_regex from=$activities.summary }
              	{foreach from=$regex item=item}
                {$item.content|replace:"<p>":"<li>"|replace:'</p>':'</li>' nofilter}
                {/foreach}
              </ul>
          </div>
        </div>
      </div>
    </section>


    {fetch_section assign=benifits section=986}
    {fetch_articles assign=sectionArticles section=$benifits.sectionId }
    
    <!-- TODO section benefits company -->
    <section class="benefits-company indent">
      <div class="container">
        <div class="benefits-company__head">
          <h2 class="benefits__title title">{$benifits.name}</h2>
        </div>
        <div class="benefits__line">
          <div class="benefits__line-item"><span></span></div>
          <div class="benefits__line-item"><span></span></div>
          <div class="benefits__line-item"><span></span></div>
          <div class="benefits__line-item"><span></span></div>
        </div>
        <div class="benefits__inner">
        {foreach item=article from=$sectionArticles name=sectionArticles}
          <div class="benefits__column">
            <div class="benefits__body">

              <div class="benefits__body-number">{$article.title}</div>
              <h3 class="benefits__body-title">{$article.alias}</h3>
            
              {$article.summary nofilter}

            </div>
          </div>
        {/foreach}
        </div>
      </div>
    </section>
   

    <!-- TODO section maps -->
    {fetch_section assign=georaphy section=987}

    <section class="maps indent">
      <div class="container">
        <div class="maps__wrapper">
            <div class="maps__head">
              <h2 class="maps__title">{$georaphy.name}</h2>
              {$georaphy.summary nofilter}
            </div>
            <div class="maps__image">
              <img src="{$georaphy.images.original.url}" alt="maps">
              <svg class="city-dot city-dot--kz" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--russia" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--uzbekistan" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--kirg" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--tadj" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--kitay" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
            </div>
            <div class="maps__city">
              <ul class="map__city-list">

              	{bracket_regex from=$georaphy.content }
              	{foreach from=$regex item=item}
                {$item.content|replace:'<p>':'<li class="city">'|replace:'</p>':'</li>' nofilter}
                {/foreach}

              </ul>
            </div>
        </div>
      </div>
    </section>
  </main>

{include file="footer.tpl" }

