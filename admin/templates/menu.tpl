<nav class="page-sidebar page-sidebar-fixed" data-pages="sidebar">
  <div class="sidebar-menu">
    <div id="page_sidebar" class="page-sidebar {if $adminUser.check_menu eq 1}mCS_disabled{/if}">
      <ul id="navigation_sidebar" class="menu-items x-navigation x-navigation-custom {if $adminUser.check_menu eq 1}x-navigation-minimized{/if}">
        
        {if $adminUser.accessLevel eq "administrator" or $adminUser.accessLevel eq "developer"}
    
          <li class="xn-openable{if $activeItem eq 'overview' or $activeItem eq 'visitors' or  $activeItem eq 'visitor' or $activeItem eq 'referers' or $activeItem eq 'bots' or  $activeItem eq 'errors'} {if $adminUser.check_menu eq 0}active{/if}{/if}"><a class="reports" href="javascript:;"><span class="fa fa-chart-area"></span> <span class="xn-text">{header:statistics}</span></a>
            <ul class="sub-menu">
              <li class="{if $activeItem eq 'overview'}active{/if}"><a href="stats.overview.php"><span class="fa fa-signal"></span> {stats:overviewTitle}</a></li>
              <li class="{if $activeItem eq 'visitors' or  $activeItem eq 'visitor'}active{/if}"><a href="stats.visitors.php"><span class="fa fa-male"></span> {stats:visitorsTitle}</a></li>
              <li class="{if $activeItem eq 'referers'}active{/if}"><a href="stats.referers.php"><span class="fa fa-globe"></span> {stats:referersTitle}</a></li>
              <li class="{if $activeItem eq 'bots'}active{/if}"><a href="stats.bots.php"><span class="fab fa-android"></span> {stats:botsTitle}</a></li>
              <li class="{if $activeItem eq 'errors'}active{/if}"><a href="stats.errors.php"><span class="fa fa-exclamation-triangle"></span> {stats:errorsTitle}</a></li>
            </ul>
          </li>
          
          <li class="xn-openable{if $activeItem eq 'sections' || $activeItem eq 'footerMenu'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a href="javascript:;"><span class="fa fa-layer-group"></span> <span class="xn-text"> {general:structure}</span></a>
            <ul class="sub-menu"><li class="{if $activeItem eq 'sections'}active{/if}"><a href="sections.php"><span class="fa fa-layer-group"></span> {sections:otherSections}</a></li><li class="{if $activeItem eq 'footerMenu'}active{/if}"><a href="footerMenu.php"><span class="fa fa-bars"></span> Нижнее меню</a></li></ul>
          </li>
          
          <li class="xn-openable{if $activeItem eq 'sliders' or $activeItem eq 'products' or $activeItem eq 'news' or $activeItem eq 'articles' or $activeItem eq 'gallerys' or $activeItem eq 'blocks' or $activeItem eq 'rental' or $activeItem eq 'banners' or $activeItem eq 'files'} {if $adminUser.check_menu eq 0}active{/if}{/if}"><a href="javascript:;"><span class="fa fa-file-contract"></span> <span class="xn-text"> {general:filling}</span></a>
            <ul class="sub-menu">
              {if $config.slider eq 1}<li class="{if $activeItem eq 'sliders'}active{/if}"><a href="sliders.php"><span class="fa fa-file-contract"></span> {sliders:title}</a></li>{/if}       
              {foreach from=$typeContents item=typeContent key=key}
              <li class="{if $activeItem eq $key}active{/if}"><a href="{$key}.php"><span class="fa fa-file-contract"></span>{$typeContent}</a></li>
              {/foreach}
              <li class="{if $activeItem eq 'files'}active{/if}"><a href="files.php"><span class="fa fa-file-download"></span> {fileManager:files}</a></li>
              {if $conf.menu_banners eq '1'}<li class="{if $activeItem eq 'banners'}active{/if}"><a href="banners.php"><span class="fa fa-file-image"></span> {banners:title}</a></li>{/if}
            </ul>
          </li>
    {* 
          {if $conf.menu_site_users eq '1'}
          <li class="xn-openable{if $activeItem eq 'customers' or $activeItem eq 'orders'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a class="users" href="javascript:;"><span class="fa fa-shopping-basket"></span> <span class="xn-text">Магазин</span></a>
            <ul class="sub-menu"><li class="{if $activeItem eq 'customers'} active{/if}"><a href="customers.php"><span class="fa fa-users"></span> {customers:title}</a></li></ul>
            <ul class="sub-menu"><li class="{if $activeItem eq 'orders'} active{/if}"><a href="orders.php"><span class="fa fa-shopping-cart"></span> {orders:title}</a></li></ul>
          </li>
          {/if}
           *}
          {* {if $conf.menu_currency eq '1'}
          <li class="xn-openable{if $activeItem eq 'currency'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a href="javascript:;"><span class="glyphicon glyphicon-tags"></span> <span class="xn-text">{general:settingsProducts}</span></a>
            <ul class="sub-menu"><li class="{if $activeItem eq 'currency'}active{/if}"><a href="currency.php"><span class="fa fa-money-bill"></span> {currency:title}</a></li></ul>
          </li>
          {/if} *}
    
          <li class="xn-openable{if $activeItem eq 'settings' or $activeItem eq 'settings-social' or $activeItem eq 'settings-content' or $activeItem eq 'logo' or $activeItem eq 'languages' or $activeItem eq 'users' or $activeItem eq 'settings-maps'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a href="javascript:;"><span class="fa fa-cog"></span> <span class="xn-text">{header:administrationSite}</span></a>
            <ul class="sub-menu">
              <li class="{if $activeItem eq 'users'}active{/if}"><a href="users.php"><span class="fa fa-users"></span> {users:title}</a></li>
              <li class="{if $activeItem eq 'logo'}active{/if}"><a href="logo.php"><span class="fab fa-r-project"></span> {logo:logo}</a></li>
              <li class="{if $activeItem eq 'settings'}active{/if}"><a href="settings.php"><span class="fa fa-cogs"></span> {settings:title}</a></li>
              <li class="{if $activeItem eq 'settings-social'}active{/if}"><a href="settings-social.php"><span class="fa fa-link"></span> {settings:social}</a></li>
              {if $adminUser.accessLevel eq "developer"}<li class="{if $activeItem eq 'settings-content'}active{/if}"><a href="settings-content.php"><span class="fa fa-wrench"></span> {settings_content:title}</a></li>{/if}
              <li class="{if $activeItem eq 'settings-maps'}active{/if}"><a href="settings-maps.php"><span class="fa fa-map-marked-alt"></span> {settings:map:settingMap}</a></li>
              <li class="{if $activeItem eq 'languages'}active{/if}"><a href="languages.php"><span class="fa fa-flag"></span> {languages:title}</a></li>
            </ul>
          </li>
    
          
          <li class="xn-openable{if $activeItem eq 'templates' or $activeItem eq 'file-manager'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a href="javascript:;"><span class="fa fa-desktop"></span> <span class="xn-text">{general:manageTemplate} </span></a>
            <ul class="sub-menu">
              <li class="{if $activeItem eq 'templates'}active{/if}"><a href="templates.php"><span class="fa fa-file-code"></span> {templates:title}</a></li>
              {if $adminUser.accessLevel eq "developer"}<li class="{if $activeItem eq 'file-manager'}active{/if}"><a href="file-manager.php"><span class="fa fa-file-code"></span> {fileManager:title}</a></li>{/if}
            </ul>
          </li>
    
          <li class="xn-openable{if $activeItem eq 'about' or  $activeItem eq 'documentation'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a href="javascript:;"><span class="fa fa-info"></span> <span class="xn-text">{general:additionally}</span></a>
            <ul class="sub-menu">
              <li class="{if $activeItem eq 'about'}active{/if}"><a href="about.php"><span class="fa fa-coffee" aria-hidden="true"></span> {general:aboutProject}</a></li>
              <li class="{if $activeItem eq 'documentation'}active{/if}"><a href="documentation.php"><span class="fa fa-info"></span> {general:documentation}</a></li>
            </ul>
          </li>
          
          {if $conf.menu_subscribe eq '1'}
          <li class="xn-openable{if $activeItem eq 'subscribe' or $activeItem eq 'comments'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a href="javascript:;"><span class="fa fa-envelope"></span> <span class="xn-text"> {comments:title}</span></a>
            <ul class="sub-menu">
              {if $conf.menu_comments eq '1'}
              <li class="{if $activeItem eq 'comments'}active{/if}">
              {if $activeItem eq 'comments'}
                <a href="comments.php"><span class="fa fa-comments"></span> {comments:title}</a>
              {elseif $totalPendingComments > 0}
                <a href="comments.php?status=pending"><span class="fa fa-comments"></span> {comments:title}</a><div class="informer informer-danger"> {$totalPendingComments}</div>
              {else}
                <a href="comments.php"><span class="fa fa-comments"></span> {comments:title}</a>
              {/if}
              </li>
              {/if}
              <li class="{if $activeItem eq 'subscribe'} active{/if}"><a href="subscribe.php"><span class="glyphicon glyphicon-send"></span> {general:subscribe}</a></li>
            </ul>
          </li>
          {/if}
    
        {elseif $adminUser.accessLevel eq "editor"}
          <li class="xn-openable{if $activeItem eq 'sliders' or $activeItem eq 'products' or $activeItem eq 'news' or $activeItem eq 'articles' or $activeItem eq 'gallerys' or $activeItem eq 'banners' or $activeItem eq 'comments'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a href="javascript:;"><span class="fa fa-file"></span> <span class="xn-text"> {general:filling}</span></a>
            <ul class="sub-menu">
              {if $config.slider eq 1}<li class="{if $activeItem eq 'sliders'}active{/if}"><a href="sliders.php"><span class="fa fa-edit"></span> {sliders:title}</a></li>{/if}
              
              {foreach from=$typeContents item=typeContent key=key}
              <li class="{if $activeItem eq $key}active{/if}"><a href="{$key}.php"><span class="fa fa-edit"></span> {$typeContent}</a></li>
              {/foreach}
              {if $conf.menu_comments eq '1'}
                {if $config.comments_editors_may_approve}
                  {if $activeItem eq "comments"}
                    <li class="xn-openable {if $activeItem eq "comments"}active{/if}"><a href="comments.php"><span class="fa fa-comments"></span> <span class="xn-text">{comments:title}</span></a></li>
                  {else}
                    <li class="xn-openable {if $activeItem eq "comments"}active{/if}">
                    {if $totalPendingComments > 0}
                      <a href="comments.php?status=pending"><span class="fa fa-comments"></span> {comments:title}</a> <small>({$totalPendingComments} {comments:new})</small>
                    {else}
                      <a href="comments.php"><span class="fa fa-comments"></span> {comments:title}</a>
                    {/if}
                    </li>
                  {/if}
                {/if}
              {/if}
              {if $conf.menu_banners eq '1'}<li class="{if $activeItem eq 'banners'}active{/if}"><a href="banners.php"><span class="glyphicon glyphicon-picture"></span> {banners:title}</a></li>{/if}
            </ul>
          </li>
    
        {elseif $adminUser.accessLevel eq "writer"}
          <li class="xn-openable{if $activeItem eq 'products' or $activeItem eq 'news' or $activeItem eq 'articles' or $activeItem eq 'gallerys'} {if $adminUser.check_menu eq 0}active{/if}{/if}">
            <a href="javascript:;"><span class="fa fa-file"></span> <span class="xn-text"> {general:filling}</span></a>
            <ul class="sub-menu">
              {foreach from=$typeContents item=typeContent key=key}
              <li class="{if $activeItem eq $key}active{/if}"><a href="{$key}.php"><span class="fa fa-edit"></span> {$typeContent}</a></li>
              {/foreach}
            </ul>
          </li>
        {/if}
      </ul>
    </div>
  </div>
</nav>