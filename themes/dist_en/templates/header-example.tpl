<!DOCTYPE html>
<html lang="ru">
<head>
  {* Подключение meta тегов *}

  {include file="modules/meta.tpl"}
  <link rel="short icon" href="{$THEME_URL}/">
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

                    <a href="{$THEME_URL}/#" class="header__language">Ру</a>

                </div>
                <nav class="menu">
                    <ul class="menu__list">

                      {foreach item=navItem1 from=$TREE name=navItems1}
                      {if $navItem1.status eq 'visible' && $navItem1.top_menu eq '1'}
                      
                        <li class="menu__list-item"><a href="{$navItem1.url}" class="menu__list-link">{$navItem1.name}</a></li>

                        {/if}
                      {/foreach}
                      
                    </ul>
                </nav>
               
            </div>
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

</header>

<div class="modal" id="modal-hero">
    <div class="modal__content">
       <div class="modal__left">
        <h2 class="form__title">Оставьте заявку и наш оператор обязательно свяжется с вами</h2>
        <form action="" class="form" action="">
            <!-- <button class="modal__close">X</button> -->
         
            <div class="form__group">
                <label for="label-name">Имя</label>
                <input id="label-name" required type="text" name="name">
            </div>
            <div class="form__group">
                <label for="label-tel">Номер телефона</label>
                <input id="label-tel" required type="tel" name="tel">
            </div>
            <div class="form__area">
                <label for="label-area">Комментарии к заявке</label>
                <textarea id="label-area" name="area">

                </textarea>
            </div>
            <div class="form__group-btn">
                <button type="submit" class="btn" aria-label="button">Отправить</button>
            </div>
        </form>
       </div>
    </div>
</div>