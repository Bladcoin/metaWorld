<?php
/******************************************************************************/
//                                                                            //
//                             Smarty plugin                                  //
//                            @package Smarty                                 //
//							             @subpackage plugins                              //
//                        http://life-style.uz/                               //
//                   produced by Life Style, life-style.uz                    //
//                                                                            //
/******************************************************************************/

function smarty_function_feedback_footer_js($params, &$smarty){
	global $smarty, $config;
	  
  if ($config['allow_recaptcha'] == 0){
		$result ='<script>
		$(function () {
		  $("#feedback_footer").focus();
		  var answer = $(".form-anti-bot #anti-bot-a").val();
		  $(".form-anti-bot #anti-bot-q").val(answer);
		  if($("#feedback_footer #anti-bot-q").length == 0 ) {
		    var current_date = new Date();
		    $("#feedback_footer").append(\'<input type="hidden" name="anti-bot-q" id="anti-bot-q" value="\' + current_date.getFullYear() + \'" />\');
		  }
		});</script>';
  }
		
  $result .='<script>
    $("#feedback_footer").validate({
      onkeyup: false,
      onfocusout: function(element) {$(element).valid()},
      rules: {
        name: {required: true,maxlength: 58},
        phone: {minlength: 7,maxlength: 15,required: true},
      },
      submitHandler: function (ff) {';
  
       if ($config['allow_recaptcha'] == 1){ 
         $result .='grecaptcha.ready(function() {
          grecaptcha.execute(\''.$config['recaptcha_public_key'].'\').then(function(token) {
           
           $("#feedback_footer").prepend(\'<input type="hidden" name="token" value="\' + token + \'">\');';}	
           $result .='
            $("#feedback_footer_quest").attr("disabled", "disabled").text(" Подождите ... ");
            $.post($("#feedback_footer").attr("action"), $("#feedback_footer").serialize()).done(function (c) {
              var d = JSON.parse(c);
              $("#feedback_footer_message").html(\'<div id="done_quest">Спасибо, \' + d.name + "!<br/>Вам перезвонят в ближайшее время!</div>").css("display", "block");
              $("#feedback_footer_quest").unbind().text("Отправлено").attr("disabled", "disabled");
              $("#feedback_footer").trigger("reset");
              setTimeout(function () {
                $("#feedback_footer_message").css("display", "none");
                $("#feedback_footer_quest").removeAttr("disabled", "disabled").val("Отправить").text("Отправить");
              }, 3000)
              if (d.status == 400) {
                $("#feedback_footer_error").text(d.message).css("display", "block");
                $("#feedback_footer_quest").removeAttr("disabled", "disabled").val("Отправить");
              }
            })';
          if ($config['allow_recaptcha'] == 1){  $result .=' });
          });
          ';
          }
$result .='}
    });
  
    </script><style>{literal}.grecaptcha-badge{opacity: 0;width:0px !important;height: 0px !important;right: -99999px;}{/literal}</style>';
			
												
	
	
	
	
	
	
	return $result;
	
}

		


?>