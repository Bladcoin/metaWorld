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

function smarty_function_feedback_modal_js($params, &$smarty){
	global $smarty, $config;
	  
  if ($config['allow_recaptcha'] == 0){
		$result ='<script>
		$(function () {
		  $("#feedback_modal").focus();
		  var answer = $(".form-anti-bot #anti-bot-a").val();
		  $(".form-anti-bot #anti-bot-q").val(answer);
		  if($("#feedback_modal #anti-bot-q").length == 0 ) {
		    var current_date = new Date();
		    $("#feedback_modal").append(\'<input type="hidden" name="anti-bot-q" id="anti-bot-q" value="\' + current_date.getFullYear() + \'" />\');
		  }
		});</script>';
  }
		
  $result .='<script>
    $("#feedback_modal").validate({
      onkeyup: false,
      onfocusout: function(element) {$(element).valid()},
      rules: {
        name: {required: true,maxlength: 58},
        email: {email: true,maxlength: 50,required: true},
      },
      submitHandler: function (fm) {';
  
       if ($config['allow_recaptcha'] == 1){ 
         $result .='grecaptcha.ready(function() {
          grecaptcha.execute(\''.$config['recaptcha_public_key'].'\').then(function(token) {
           
           $("#feedback_modal").prepend(\'<input type="hidden" name="token" value="\' + token + \'">\');';}	
           $result .='
            $("#feedback_modal_quest").attr("disabled", "disabled").text(" Подождите ... ");
            $.post($("#feedback_modal").attr("action"), $("#feedback_modal").serialize()).done(function (c) {
              var d = JSON.parse(c);
              $("#feedback_modal_message").html(\'<div id="done_quest">Спасибо, \' + d.name + "!<br/>Вам перезвонят в ближайшее время!</div>").css("display", "block");
              $("#feedback_modal_quest").unbind().val("Отправлено").text("Отправлено");
              $("#feedback_modal").trigger("reset");
              setTimeout(function () {
                $("#feedback_modal_message").css("display", "none");
                $("#feedback_modal_quest").removeAttr("disabled", "disabled").val("Отправить").text("Отправить");
              }, 3000)
              if (d.status == 400) {
                $("#feedback_modal_error").text(d.message).css("display", "block");
                $("#feedback_modal_quest").removeAttr("disabled", "disabled").val("Отправить");
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