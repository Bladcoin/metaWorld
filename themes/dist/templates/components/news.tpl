{fetch_section assign=newsSection section=975}
{fetch_articles assign=news section=$newsSection.sectionId status="visible" type_content="products" orderBy="publishedOn ASC"}

<section class="section section-news" id="news">
    <div class="container">
        <div class="h2">{$newsSection.name}</div>
        <div class="row">


            <div class="col-6 mb-4">
                <div class="news-item news-featured">
                    <div class="news-image">
                        <a href="{$newsSection.url}"><img src="{$newsSection.images.original.url}" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            {$newsSection.dop}
                        </div>
                        <div class="news-excerpt">{$newsSection.summary nofilter}</div>
                        <div class="news-date">
                            {$newsSection.icon}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    {foreach from=$news item=item key=key name=name}

                        <div class="col-6 mb-4">
                            <div class="news-item">
                                <div class="news-image">
                                    <a href="{$item.url}"><img src="{$item.images.original.url}" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-title">
                                        {$item.title}
                                    </div>
                                    <div class="news-date">
                                        {$item.articul}
                                    </div>
                                </div>
                            </div>
                        </div>

                    {/foreach}
                </div>
            </div>


        </div>
        <div class="news-more">
            <a href="{$newsSection.content_two|strip_tags nofilter}">More</a>
        </div>
    </div>
</section>