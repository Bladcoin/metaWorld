{fetch_section assign=releaseJobs section=1001 }
{fetch_articles assign=jobs section=$releaseJobs.sectionId status="visible" type_content="products" orderBy="publishedOn ASC"}

<section class="section section-works d-flex flex-column justify-content-center text-center">
    <div class="container">
        <div class="h2">
            {$releaseJobs.name}
        </div>
        <div class="slider-container">
            <div class="slider">
                {foreach from=$jobs item=job key=key name=name}

                    <div class="slide">
                        <div class="slide-image">
                            <img src="{$job.images.original.url}" width="1920" height="1080" alt="">
                        </div>
                        <div class="slide-title">
                            {$job.title}
                        </div>
                        <div class="slide-description">{$job.summary nofilter}</div>
                    </div>

                {/foreach}
            </div>
        </div>
        <div>
</section>