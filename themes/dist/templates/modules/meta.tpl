<title>{if $sectionId eq 1}{$section.meta_title} - {/if}{if $title}{$title nofilter} - {elseif $article}{$article.title} - {/if}{$config.website_name}</title>

{if $sectionId eq 1}
{if $section.description}
<meta name="description" content="{$section.description nofilter}">
<meta property="og:description" content="{$section.description nofilter}" />
{/if}
{if $section.keywords}<meta name="keywords" content="{$section.keywords nofilter}">{/if}
{/if}
{if $description}
<meta name="description" content="{$description nofilter}">
<meta property="og:description" content="{$description nofilter}" />
{/if}
{if $keywords}<meta name="keywords" content="{$keywords nofilter}">{/if}
<meta name="author" content="Создание и продвижение сайтов Life Style">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">