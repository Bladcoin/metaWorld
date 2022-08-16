<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:00:52
  from 'C:\xampp\htdocs\themes\dist\templates\modules\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb40a4d5d834_68599932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11475b367ba7c603331f7f60e9b036ae1d64f99b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\modules\\pagination.tpl',
      1 => 1608034338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb40a4d5d834_68599932 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pagination']->value['pages']) {?>
<div class="search__pagination">
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['previousPage']) {?>
    <a class="search__pagination-prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['previousPage']['url'], ENT_QUOTES, 'UTF-8', true);
if ($_GET['query']) {?>?query=<?php echo htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8', true);
}?>"><span class="icon-arrow-short-right"></span>Предыдущая статья</a>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'pageNum');
$_smarty_tpl->tpl_vars['pageNum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pageNum']->value) {
$_smarty_tpl->tpl_vars['pageNum']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['pageNum']->value['num'] == $_smarty_tpl->tpl_vars['page']->value) {?>
        <a class="search__pagination-nav active" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNum']->value['url'], ENT_QUOTES, 'UTF-8', true);
if ($_GET['query']) {?>?query=<?php echo htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8', true);
}?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNum']->value['num'], ENT_QUOTES, 'UTF-8', true);?>
</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['pageNum']->value['num'] == '...') {?>
            ...
        <?php } else { ?>
        <a class="search__pagination-nav" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNum']->value['url'], ENT_QUOTES, 'UTF-8', true);
if ($_GET['query']) {?>?query=<?php echo htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8', true);
}?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNum']->value['num'], ENT_QUOTES, 'UTF-8', true);?>
</a>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['nextPage']) {?>
    <a class="search__pagination-next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['nextPage']['url'], ENT_QUOTES, 'UTF-8', true);
if ($_GET['query']) {?>?query=<?php echo htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8', true);
}?>">Следующая статья<span class="icon-arrow-short-right"></span></a>
    <?php }?>
</div>
<?php }
}
}
