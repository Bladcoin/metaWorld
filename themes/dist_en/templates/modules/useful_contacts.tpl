<div class="swiper-slide contacts-slide">
<div class="contacts__item">
    <div class="contacts__item-img">
       <img src="{$SITE_URL}/uploads/gallery/big-{$sImage.fileName}">
    </div>
    <div class="contacts__content">
        <p>{$sImage.description}</p>
        {if $sImage.link}
        <a href="{$sImage.link}">Подробнее</a>
        {/if}
    </div>
</div>
</div>