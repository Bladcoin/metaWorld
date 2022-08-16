		</div>            
	</div>
	
	
  <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
  <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>		     
  
  <script type="text/javascript" src="js/plugins-footer.js"></script>    
   
  <script type='text/javascript' src='js/noty/jquery.noty.min.js'></script>
  <script type='text/javascript' src='js/noty/layouts/topCenter.js'></script>
  <script type='text/javascript' src='js/noty/layouts/topLeft.js'></script>
  <script type='text/javascript' src='js/noty/layouts/topRight.js'></script>            
  <script type='text/javascript' src='js/noty/themes/default.js'></script>

  <script type="text/javascript" src="js/main.js"></script>        
  <script type="text/javascript" src="js/actions.js"></script>
  <script type="text/javascript" src="js/jscolor.js"></script>
  <script>{literal}
  $(function() { var toc = $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h3, h4, h5" });});
  
  var validNavigation = false;
  var noActiveUser = 1; 
  var user = {/literal}{$adminUser.userId}{literal}; 
  var login = '{/literal}{$adminUser.loginName}{literal}'; 
  var ip = '{/literal}{$smarty.server.REMOTE_ADDR}{literal}';
  
  function timerIncrement() {
    // 
  }; 
  
    
  {/literal}</script>
  {literal}
  <script type="text/javascript">
    var menuSections = [{/literal}{$section.menus}{literal}];
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
  </script>
  <script type="text/javascript">
    var blocks = {/literal}
    {fetch_sections assign=catalogSections from=443 status='visible'}
    [{foreach item=subcatalog from=$catalogSections name=catalogSections}{$subcatalog.sectionId},{/foreach}];
    {literal}
    $('#parentId').change(function(){
      if(blocks.includes(parseInt($(this).val()))) {
        $('#blockType').fadeIn();} else {
          $('[name="section[block]"]').val('');
          $('#blockType').fadeOut()
      }
    })
  </script>
  {/literal}
  </body>
</html>