<!DOCTYPE html>
<html lang="ru">
<head>
  {include file="modules/meta.tpl" }
  <link rel="short icon" href="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{$THEME_URL}/css/style.min.css">
  <link rel="stylesheet" href="{$THEME_URL}/css/additional.css">
</head>
<body>
  <div class="wrapper">
  
  <!-- ?Подключение Header -->
  <header class="header">
    <div class="container header-container">
        <div class="header__row">
            <div class="header__logo logo">
              {fetch_section assign=main section=1}
                <a href="{$main.url}">{$main.dop}</a>
            </div>
            <div class="header__wrapper">
                <div class="header__info">
                    <div class="header__tel"><a href="tel:{$config.phone|replace:'(':''|replace:')':''|replace:'-':''|replace:' ':''}">{$config.phone|replace:'(':''|replace:')':''|replace:'-':' '}</a></div>
                    <a href="{$THEME_URL}/#" class="header__language header__language-secondary">Ру</a>
                </div>
                <nav class="menu">
                    <ul class="menu__list">
                        {foreach item=navItem1 from=$TREE name=navItems1}
                      {if $navItem1.status eq 'visible' && $navItem1.top_menu eq '1'}
                      
                        <li class="menu__list-item menu__list-item-secondary"><a href="{$navItem1.url}" class="menu__list-link">{$navItem1.name}</a></li>

                        {/if}
                      {/foreach}
                    </ul>
                </nav>
               
            </div>
            <div class="burger burger__secondary">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>