{fetch_section assign=faq section=1003}

<section class="section section-faq" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="faq-container">
                    <div class="h2 text-left">{$faq.name}</div>
                    <div class="faq">

                        {bracket_regex from=$faq.summary }
                        {foreach from=$regex item=item key=key }
                            <button class="btn btn-faq mb-3 collapsed" type="button" data-toggle="collapse"
                                data-target="#faq-{$key + 1}">
                                {$item.code|strip_tags}

                            </button>
                            <div id="faq-{$key + 1}" class="faq-answer collapse">
                                <div class="pt-3">
                                    {$item.content nofilter}
                                </div>
                            </div>
                        {/foreach}



                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="images/slide-9.jpg" class="img-fluid mb-2" alt="">
                <img src="images/slide-8.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>