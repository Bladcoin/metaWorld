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

function smarty_function_feedback_js($params, &$smarty){
	global $smarty, $config;
	  
    if ($config['allow_recaptcha'] == 0){
		$result ='<script>$(function () {$("#feedback").focus();var answer = $(".form-anti-bot #anti-bot-a").val();$(".form-anti-bot #anti-bot-q").val(answer);if($("#feedback #anti-bot-q").length == 0 ) {var current_date = new Date();$("#feedback").append(\'<input type="hidden" name="anti-bot-q" id="anti-bot-q" value="\' + current_date.getFullYear() + \'" />\');}});</script>';
		}
		
    $result .='<script>
      $("#feedback").validate({
        onkeyup: false,
        onfocusout: function(element) {$(element).valid()},
        rules: {
          name: {required: true,maxlength: 58},
          email: {email: true,maxlength: 50,required: true},
          message: {minlength:8, required: true},
        },
        submitHandler: function (f) {';
    
       if ($config['allow_recaptcha'] == 1){ 
         $result .='grecaptcha.ready(function() {
          grecaptcha.execute(\''.$config['recaptcha_public_key'].'\').then(function(token) {
           
           $("#feedback").prepend(\'<input type="hidden" name="token" value="\' + token + \'">\');';}	
           $result .='
            $("#feedback_submit_quest").attr("disabled", "disabled");
            $("#feedback_quest").text(" Подождите ... ");
            $.post($("#feedback").attr("action"), $("#feedback").serialize()).done(function (c) {
              var d = JSON.parse(c);
              $("#feedback_message").html(\'<div id="done_quest">Спасибо, \' + d.name + "!<br/>Ваша заявка отправлена!</div>").css("display", "block");
              $(".feedback_submit_quest").unbind().attr("disabled", "disabled");
              $("#feedback_quest").unbind().text("Отправлено");
              $("#feedback").trigger("reset");
              setTimeout(function () {
                $("#feedback_message").css("display", "none");
                $("#feedback_submit_quest").removeAttr("disabled", "disabled");
                $("#feedback_quest").text("Отправить");
              }, 3000)
              if (d.status == 400) {
                $("#feedback_error").text(d.message).css("display", "block");
                $("#feedback_submit_quest").removeAttr("disabled", "disabled").val("Отправить");
                $("#feedback_quest").text("Отправить");
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