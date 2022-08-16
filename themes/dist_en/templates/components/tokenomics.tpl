{fetch_section assign=tokenomics section=999}
{fetch_articles assign=items section=$tokenomics.sectionId status='visible' type_content="products" orderBy="publishedOn ASC"}

<section class="section section-tokenomics">
    <div class="container">
        <div class="h2">{$tokenomics.name}</div>

        <table class="economy-table mb-5">
            {foreach from=$items item=item key=key name=name}
                <tr>
                    {if $key == 0 }

                        <th width="35%">{$item.title}</th>
                        <th width="15%">{$item.articul}</th>
                        <th width="20%">{$item.summary nofilter}</th>
                        <th width="30%">{$item.content nofilter}</th>
                    {else}
                        <td width="35%">{$item.title}</td>
                        <td width="15%">{$item.articul}</td>
                        <td width="20%">{$item.summary nofilter}</td>
                        <td width="30%">{$item.content nofilter}</td>

                    {/if}
                </tr>
            {/foreach}
        </table>
    </div>
</section>

