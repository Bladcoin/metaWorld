<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:44:53
  from 'C:\xampp\htdocs\themes\dist_en\templates\components\tokenomics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb4af522a440_64835039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13751598916be254dd06a4601e87377c467fcb19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist_en\\templates\\components\\tokenomics.tpl',
      1 => 1660393449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb4af522a440_64835039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
echo smarty_function_fetch_section(array('assign'=>'tokenomics','section'=>999),$_smarty_tpl);?>

<?php echo smarty_function_fetch_articles(array('assign'=>'items','section'=>$_smarty_tpl->tpl_vars['tokenomics']->value['sectionId'],'status'=>'visible','type_content'=>"products",'orderBy'=>"publishedOn ASC"),$_smarty_tpl);?>


<section class="section section-tokenomics">
    <div class="container">
        <div class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tokenomics']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>

        <table class="economy-table mb-5">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>

                        <th width="35%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</th>
                        <th width="15%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['articul'], ENT_QUOTES, 'UTF-8', true);?>
</th>
                        <th width="20%"><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
</th>
                        <th width="30%"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</th>
                    <?php } else { ?>
                        <td width="35%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                        <td width="15%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['articul'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
</td>
                        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</td>

                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</section>

<?php }
}
