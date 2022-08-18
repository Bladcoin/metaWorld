{fetch_section assign=newsSection section=975}
{fetch_articles assign=news section=$newsSection.sectionId status="visible" type_content="products" orderBy="publishedOn ASC"}

<section class="section section-news d-flex flex-column justify-content-center" id="news">
    <div class="container">
        <div class="h2">{$newsSection.name}</div>
        <div class="row">


            <div class="col-6 mb-4">
                <a class="news-item news-featured" data-toggle="modal" data-target="#newsModal">
                    <span class="news-image">
                        <img src="{$newsSection.images.original.url}" class="img-fluid" alt="">
                    </span>
                    <div class="news-info">
                        <div class="news-title">
                            {$newsSection.dop}
                        </div>
                        <div class="news-excerpt">{$newsSection.summary nofilter}</div>
                        <div class="news-date">
                            {$newsSection.section_icon}
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6">
                <div class="row">
                    {foreach from=$news item=item key=key name=name}

                    <div class="col-6 mb-4 {if $key > 4 }news-hide{/if}">
                            <a class="news-item" data-toggle="modal" data-target="#newsModal_{$key}">
                                <span class="news-image">
                                    <img src="{$item.images.original.url}" class="img-fluid" alt="">
                                </span>
                                <div class="news-info">
                                    <div class="news-title">
                                        {$item.title}
                                    </div>
                                    <div class="news-date">
                                        {$item.articul}
                                    </div>
                                </div>
                            </a>
                        </div>

                    {/foreach}
                </div>
            </div>


        </div>
        <div class="news-more">
            <a href="#">More</a>
        </div>
    </div>
</section>