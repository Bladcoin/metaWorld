<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 09:21:47
  from 'C:\xampp\htdocs\themes\dist\templates\section-about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62f9f40b96e5c5_59888368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd737cb0c7f6353e1644d3b43d2e88e00584e8a63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-about.tpl',
      1 => 1622628513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62f9f40b96e5c5_59888368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),4=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="main">
   <!-- Todo section company hero -->
    <section class="company bg-image" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);">
        <div class="company__body container">
            <div class="company__row">
                
                <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['summary']),$_smarty_tpl);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                    <h3 class="company__uptitle"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
</h3> 
                    <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['content'],'<p>','<h2 class="company__title">'),"</p>",'</h2>');?>


                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>

    <!-- TODO section sell company -->
    <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'limit'=>1),$_smarty_tpl);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>

    <section class="sell indent">
        <div class="container">
          <div class="sell__wrapper">
            <div class="sell__inner">
              <div class="sell__start">
                <div class="sell__head">
                  <h2 class="sell__title title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                </div>
                <div class="sell__image">
                  <img loading="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="">
                </div>
              </div>
              <div class="sell__end">
               <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['article']->value['summary']),$_smarty_tpl);?>

               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                <div class="sell__item">
                  <div class="sell__item-number"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
</div>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                </div>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                 
              </div>
                
            </div>
          </div>
        </div>
    </section>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <!-- TODO section description company -->
    <section class="description indent ">
      <div class="container">
          <div class="description__head">
            <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['content'],"<p>","<h3>"),'</p>','</h3>');?>

          </div>
          <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'orderBy'=>$_smarty_tpl->tpl_vars['sImages']->value['field'],'order'=>'DESC','getFrom'=>'gallery'),$_smarty_tpl);?>

          <div class="description__wrapper bg-image" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImages']->value[0]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);">
           <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['content_two']),$_smarty_tpl);?>

           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

              <div class="description__text">
                <?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>

              </div>
              <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['content'],'<p>','<div class="description__text">'),"</p>","</div>");?>


            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              
          </div>
      </div>
    </section>   
    
    <!-- TODO section activities company -->
    <?php echo smarty_function_fetch_section(array('assign'=>'activities','section'=>985),$_smarty_tpl);?>


    <section class="activities indent"> 
      <div class="container">
        <div class="activities__head">
          <h2 class="activities__title title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activities']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
        </div>
        <div class="activities__inner">
          <div class="activities__image">
            <img loading="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activities']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="">
          </div>
          <div class="activities__info">
              <ul class="activities__list">
              	<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['activities']->value['summary']),$_smarty_tpl);?>

              	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['content'],"<p>","<li>"),'</p>','</li>');?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
          </div>
        </div>
      </div>
    </section>


    <?php echo smarty_function_fetch_section(array('assign'=>'benifits','section'=>986),$_smarty_tpl);?>

    <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['benifits']->value['sectionId']),$_smarty_tpl);?>

    
    <!-- TODO section benefits company -->
    <section class="benefits-company indent">
      <div class="container">
        <div class="benefits-company__head">
          <h2 class="benefits__title title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['benifits']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
        </div>
        <div class="benefits__line">
          <div class="benefits__line-item"><span></span></div>
          <div class="benefits__line-item"><span></span></div>
          <div class="benefits__line-item"><span></span></div>
          <div class="benefits__line-item"><span></span></div>
        </div>
        <div class="benefits__inner">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
          <div class="benefits__column">
            <div class="benefits__body">

              <div class="benefits__body-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
              <h3 class="benefits__body-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
            
              <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>


            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </section>
   

    <!-- TODO section maps -->
    <?php echo smarty_function_fetch_section(array('assign'=>'georaphy','section'=>987),$_smarty_tpl);?>


    <section class="maps indent">
      <div class="container">
        <div class="maps__wrapper">
            <div class="maps__head">
              <h2 class="maps__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['georaphy']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
              <?php echo $_smarty_tpl->tpl_vars['georaphy']->value['summary'];?>

            </div>
            <div class="maps__image">
              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['georaphy']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="maps">
              <svg class="city-dot city-dot--kz" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--russia" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--uzbekistan" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--kirg" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--tadj" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
              <svg class="city-dot city-dot--kitay" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15C16.375 15 17.5 13.875 17.5 12.5C17.5 11.125 16.375 10 15 10C13.625 10 12.5 11.125 12.5 12.5C12.5 13.875 13.625 15 15 15ZM15 2.5C20.25 2.5 25 6.525 25 12.75C25 16.725 21.9375 21.4 15.825 26.7875C15.35 27.2 14.6375 27.2 14.1625 26.7875C8.0625 21.4 5 16.725 5 12.75C5 6.525 9.75 2.5 15 2.5Z"/>
              </svg>
            </div>
            <div class="maps__city">
              <ul class="map__city-list">

              	<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['georaphy']->value['content']),$_smarty_tpl);?>

              	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['content'],'<p>','<li class="city">'),'</p>','</li>');?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              </ul>
            </div>
        </div>
      </div>
    </section>
  </main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
