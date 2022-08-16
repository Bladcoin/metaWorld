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

function smarty_function_feedback($params, &$smarty){
	global $smarty, $config;
	
	$result = '	
		<div class="info-success p-v-15 text-center" id="feedback_message" style="display: none;"><p><b></p></b></div>
		<form action="' . SITE_URL. '/feedback.php" id="feedback" method="post" accept-charset="utf-8">
  		<input type="hidden" name="subject" id="subject" value="Обратная связь">
			<div class="row">
				<div class="input-content m-v-5 col-md-6 p-h-15">
					<label class="placeholder">Ф.И.О:</label>
					<input class="form-item pie-form-control" type="text" name="name" placeholder="Введите имя">
				</div>
				<div class="input-content m-v-5 col-md-6 p-h-15">
					<label class="placeholder">Эл. почта</label>
					<input class="form-item pie-form-control" type="email" name="email" placeholder="Ваш e-mail">
				</div>
				<div class="col-xs-12 m-t-5 p-h-15 m-b-15">
					<label class="placeholder">Расскажите о себе</label>
					<textarea class="form-item pie-form-control" type="text" name="message"></textarea>
				</div>
			</div>
      <div class="info-error p-v-15 text-center" id="feedback_error" style="display: none;"><p><b></p></b></div>
			<div class="m-v-15 text-right-md">
				<span class="btn-def reverse color-white">
					<button type="submit" class="p-v-10 feedback_submit_quest">
						<i class="ls-icon ls-icon-envelope-send"></i><span class="p-l-10 va-middle" id="feedback_quest">Отправить</span>
					</button>
				</span>
			</div>';
			if ($config['allow_recaptcha'] == 0){
			$result .= '<div class="form-anti-bot" style="clear:both; display: none;"><strong>Текущий  <span style="display:none;">month</span> <span style="display:inline;">ye@r</span> <span style="display:none;">day</span></strong><span class="required">*</span><input type="hidden" name="anti-bot-a" id="anti-bot-a" value="'. date('Y') .'" /></div>';
			}
		$result .='</form>';
	
	return $result;
	
}

		


?>