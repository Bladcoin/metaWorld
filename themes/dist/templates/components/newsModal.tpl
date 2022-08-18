{fetch_section assign=newsSection section=975}
{fetch_articles assign=news section=$newsSection.sectionId status="visible" type_content="products" orderBy="publishedOn ASC"}

<div class="modal custom-modal fade" id="newsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-title text-center">
                    {$newsSection.dop}
                </div>
                <div class="news-date p-0">
                    {$newsSection.section_icon}
                </div>
            </div>
            <div class="modal-body">{$newsSection.content_two nofilter}</div>
        </div>
    </div>
</div>

{foreach from=$news item=item key=key name=name}
    <div class="modal custom-modal fade" id="newsModal_{$key}" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-title text-center">
                        {$item.title}
                    </div>
                    <div class="news-date p-0">
                        {$item.articul}
                    </div>
                </div>
                <div class="modal-body">{$item.content nofilter}</div>
            </div>
        </div>
    </div>
{/foreach}