<?php
/******************************************************************************/
//                                                                            //
//                             Smarty plugin                                  //
//                            @package Smarty                                 //
//							 @subpackage plugins                              //
//                        http://life-style.uz/                               //
//                   produced by Life Style, life-style.uz                    //
//                                                                            //
/******************************************************************************/

function smarty_function_feedback_modal($params, &$smarty){
	global $smarty, $config;
	
	$result = '	
		<div class="info-success p-v-15 text-center" id="feedback_modal_message" style="display: none;"><p><b></p></b></div>
		<form action="' . SITE_URL. '/feedback.php" id="feedback_modal" method="post" accept-charset="utf-8">
  		<input type="hidden" name="subject" id="subject" value="">
			<label class="m-v-10 box-xs-10">
        <p>*Ваше имя:</p>
        <div class="input-icon"><span class="ls-icon-user"></span><input type="text" name="name" value="" class="feedback-control" placeholder="Имя"></div>
      </label>
      <label class="m-v-10 box-xs-10">
        <p>*Ваш e-mail:</p>
        <div class="input-icon"><span class="ls-icon-envelope-shape"></span><input type="email" name="email" value="" class="feedback-control" placeholder="Email"></div>
      </label>
      <div class="info-error p-v-15 text-center" id="feedback_modal_error" style="display: none;"><p><b></p></b></div>
      <span class="btn-def reverse m-v-15 float-right-md"><button type="submit" id="feedback_modal_quest" class="p-h-30">Отправить</button></span>';
      
			if ($config['allow_recaptcha'] == 0){
			$result .= '<div class="form-anti-bot" style="clear:both; display: none;"><strong>Текущий  <span style="display:none;">month</span> <span style="display:inline;">ye@r</span> <span style="display:none;">day</span></strong><span class="required">*</span><input type="hidden" name="anti-bot-a" id="anti-bot-a" value="'. date('Y') .'" /></div>';
			}
		$result .='</form>';
	
	return $result;
	
}

		


?>