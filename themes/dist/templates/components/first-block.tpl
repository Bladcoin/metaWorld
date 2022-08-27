{fetch_section assign=firstBlock section=996}

<style>
    .section-home::before {
        background: url('{$firstBlock.images.original.url}') 50% 50% / cover no-repeat;
    }
</style>

<section class="section section-home">
    <div class="container position-relative h-100">
        <div class="slogan">
            <div class="position-relative" style="z-index:1;white-space:pre-line;">
                {$firstBlock.name}
            </div>
        </div>
        <a href="{$firstBlock.dop}" class="watch-trailer">
            {$firstBlock.section_icon}
        </a>
    </div>
</section>