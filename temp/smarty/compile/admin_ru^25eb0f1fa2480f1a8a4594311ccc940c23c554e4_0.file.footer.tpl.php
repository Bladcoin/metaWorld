<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 11:41:57
  from 'C:\xampp\htdocs\admin\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6665b32913_12340364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25eb0f1fa2480f1a8a4594311ccc940c23c554e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\footer.tpl',
      1 => 1660223680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6665b32913_12340364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),));
?>
		</div>            
	</div>
	
	
  <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
  <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>		     
  
  <?php echo '<script'; ?>
 type="text/javascript" src="js/plugins-footer.js"><?php echo '</script'; ?>
>    
   
  <?php echo '<script'; ?>
 type='text/javascript' src='js/noty/jquery.noty.min.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/noty/layouts/topCenter.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/noty/layouts/topLeft.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type='text/javascript' src='js/noty/layouts/topRight.js'><?php echo '</script'; ?>
>            
  <?php echo '<script'; ?>
 type='text/javascript' src='js/noty/themes/default.js'><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript" src="js/main.js"><?php echo '</script'; ?>
>        
  <?php echo '<script'; ?>
 type="text/javascript" src="js/actions.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jscolor.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
  $(function() { var toc = $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h3, h4, h5" });});
  
  var validNavigation = false;
  var noActiveUser = 1; 
  var user = <?php echo $_smarty_tpl->tpl_vars['adminUser']->value['userId'];?>
; 
  var login = '<?php echo $_smarty_tpl->tpl_vars['adminUser']->value['loginName'];?>
'; 
  var ip = '<?php echo $_SERVER['REMOTE_ADDR'];?>
';
  
  function timerIncrement() {
    // 
  }; 
  
    
  <?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 type="text/javascript">
    var menuSections = [<?php echo $_smarty_tpl->tpl_vars['section']->value['menus'];?>
];
      $('[name="action[addMenu]"]').click(function(){
          menuSections.push(parseInt($('#parentId').val()));
          $('[name="section[menus]"]').val(menuSections.join());
          var menuName = $('[data-id="parentId"]').attr('title');
              menuName = menuName.split('-- ').pop();
          $('#menuSections').append('<div class="menuSections">'+menuName+'<div class="deleteMenu" data-id="'+$('#parentId').val()+'">X</div></div>')
      })
      $(document).on('click','.deleteMenu',function(){
          var deleteMenuId = parseInt($(this).attr('data-id'));
          var deleteMenuIndex = menuSections.indexOf(deleteMenuId);
          if (deleteMenuIndex != -1) {
            // alert(deleteMenuIndex);
            menuSections.splice(deleteMenuIndex,1);
            $('[name="section[menus]"]').val(menuSections.join());
            $('[data-id="'+deleteMenuId+'"]').parent().fadeOut('fast')
          } else {
            console.log(deleteMenuId+' '+deleteMenuIndex)
          }
      })
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
    var blocks = 
    <?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>443,'status'=>'visible'),$_smarty_tpl);?>

    [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
echo $_smarty_tpl->tpl_vars['subcatalog']->value['sectionId'];?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>];
    
    $('#parentId').change(function(){
      if(blocks.includes(parseInt($(this).val()))) {
        $('#blockType').fadeIn();} else {
          $('[name="section[block]"]').val('');
          $('#blockType').fadeOut()
      }
    })
  <?php echo '</script'; ?>
>
  
  </body>
</html><?php }
}
