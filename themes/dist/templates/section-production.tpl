{include file="header-two.tpl"}

<main class="main">
     <section class="product-inner">
         <div class="container">
             <div class="product__head-inner">
                 <h2 class="product__title title">{$section.name}</h2>
             </div>
             <div class="product__tabs-content tabs">
                 <div class="tabs__wrapper">
                    {bracket_regex from=$section.summary }
                    {foreach from=$regex item=item name=breckets}

                     <button class="tabs__btn" data-tabs="#tabs_{$smarty.foreach.breckets.iteration}">{$item.content|strip_tags}</button>
                    
                    {/foreach}

                 </div>

                 {fetch_articles assign=sectionArticles section=$section.sectionId }
                 {foreach item=article from=$sectionArticles name=sectionArticles}
                     <div class="tabs__content-product active" id="{$article.title}">
                     
                        {$article.content nofilter}

                     </div> 
                 {/foreach}

                     {* {if $smarty.foreach.sectionArticles.first } 
                     <div class="tabs__content-product active" id="{$article.title}">
                        <table class="table-tabs" cellspacing="0" cellpadding="0">
                            <tbody>
                            {bracket_regex from=$article.summary }
                            {foreach from=$regex item=item name=colspan}
                            {if $smarty.foreach.colspan.first }
                              <tr {$item.code|replace:'<p>':''|replace:'</p>':'' nofilter}>
                                    {$item.content|replace:'<p>':"<td colspan=5 >"|replace:"</p>":'</td>'|replace:'/n':'<br>' nofilter}
                              </tr>
                              {continue}
                            {/if}

                                <tr {$item.code|replace:'<p>':''|replace:'</p>':'' nofilter}>
                                    {$item.content|replace:'<p>':"<td>"|replace:"</p>":'</td>'|replace:'/n':'<br>' nofilter}
                                </tr>
  
                            {/foreach}
                                
                                
                            </tbody>
                        </table>
                     </div>
                     {continue}
                     {/if} *}
{* 
                     <div class="tabs__content-product active" id="{$article.title}">
                        <table class="table-tabs" cellspacing="0" cellpadding="0">
                            <tbody>
                            {bracket_regex from=$article.summary }
                            {foreach from=$regex item=item}

                                <tr {$item.code|replace:'<p>':''|replace:'</p>':'' nofilter}>
                                    {$item.content|replace:'<p>':"<td>"|replace:"</p>":'</td>'|replace:'/n':'<br>' nofilter}
                                </tr>
  
                            {/foreach}
                                
                                
                            </tbody>
                        </table>
                     </div> *}
                    

                     
                     
                     
               
             </div>
         </div>
     </section>
  </main>

{include file="footer.tpl"}
