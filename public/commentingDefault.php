<?php
	if(!defined('SITE_URL')){


		include_once('../includes/visitor.inc.php');

		$commentId   = getRequestVar('commentId');
		$commentCode = getRequestVar('commentCode');
		
		if(empty($commentId) || empty($commentCode)) die('Hacking attempt!');
		
		$smarty->assign('email_confirmation', true);
		
		if($comment = dbQuery('comments', DB_ARRAY, array('where'=>"commentId='$commentId' AND status='unconfirmed'"))){
			
			/* load product */
			$product = dbQuery('products', DB_ARRAY, array('where'=>"productId='$comment[productId]'"));
			$smarty->assign('product', $product);
			$smarty->assign('comment', $comment);
			
			if($commentCode == substr(md5($comment['authorEmail'].$comment['addedOn'].AP_SERIAL.SITE_ROOT.'AbBra-cAda8Ra'), 0, 12)){

				$comment['status'] = 'approved';

				/* apply HOLD filters to the comment */
				if(!$config['comments_must_be_approved'] && !empty($config['comments_hold_words'])){
					$holdWords = preg_split('/[\r\n]+/', $config['comments_hold_words']);
					$holdWords = array_map('preg_quote', $holdWords);
					$regex = '/'.implode('|', $holdWords).'/i';
					if(preg_match($regex, $comment['content']) || preg_match($regex, $comment['authorIp']) || preg_match($regex, $comment['authorEmail']) || preg_match($regex, $comment['authorName'])){
						$comment['status'] = 'pending';
					}
				}
				
				/* check if all comments must be approved manually */
				if($config['comments_must_be_approved']) $comment['status'] = 'pending';

				/* mark comment as SPAM if commenter had a SPAM comment previously */
				if($config['comments_blacklist_enabled']){
					$where = array();
					$where[] = "authorEmail='$comment[authorEmail]'";
					$where[] = "authorName='$comment[authorName]'";
					$where[] = "status<>'unconfirmed'";
					if(dbQuery('comments', DB_VALUE, array('where'=>$where, 'order'=>'addedOn DESC', 'fields'=>'status')) == 'spam') $comment['status'] = 'spam';
				}

				/* avoid moderation if commenter has a previously approved comment */
				if($comment['status'] != 'spam' && $config['comments_whitelist_enabled']){
					$where = array();
					$where[] = "authorEmail='$comment[authorEmail]'";
					$where[] = "authorName='$comment[authorName]'";
					$where[] = "status<>'unconfirmed'";
					if(dbQuery('comments', DB_VALUE, array('where'=>$where, 'order'=>'addedOn DESC', 'fields'=>'status')) == 'approved') $comment['status'] = 'approved';
				}

				dbQuery('comments', DB_UPDATE, array('values'=>"status='$comment[status]'", 'where'=>"commentId='$comment[commentId]'"));

				if($comment['status'] == 'approved'){
					$smarty->assign('comment_published', true);
				} else {
					$smarty->assign('comment_saved', true);
				}

			} else {
				$smarty->assign('incorrect_code', true);
			}
		} else {
			$smarty->assign('comment_not_found', true);
		}

		$smarty->display('commenting.tpl');


	} else {


		global $smarty, $config, $product, $visitorIp, $visitorId;
		
		$comment = getRequestVar('newComment');
		
		if(!empty($comment) && $product['commentsEnabled']){
			/* checking contact email */
			$comment['authorEmail'] = trim($comment['authorEmail']);
			if(!preg_match('/^[A-Z0-9\._\-]+@[A-Z0-9\.\-]+\.[A-Z]{2,4}$/i', $comment['authorEmail'])) $errors['authorEmail'] = true;

			/* checking author name */
			if(empty($comment['authorName'])) $errors['authorName'] = true;

			/* removing HTML tags from comment */
			if($config['comments_strip_html']) $comment['content'] = stripHtml($comment['content']);

			/* trim */
			$comment['content']     = trim($comment['content']);
			$comment['authorEmail'] = trim($comment['authorEmail']);
			$comment['authorName']  = trim($comment['authorName']);
			$comment['authorUrl']   = trim($comment['authorUrl']);
			
			/* checking whether content is empty */
			if(empty($comment['content'])) $errors['content'] = true;
			
			/* checking CAPTCHA */
			if(!empty($config['comments_captcha_enabled']) && (empty($comment['captcha']) || $_SESSION['captcha'] != md5($comment['captcha']))) $errors['captcha'] = true;
			
			/* checking for duplicate comment */
			if(dbQuery('comments', DB_VALUE, array('where'=>"authorName='$comment[authorName]' AND authorEmail='$comment[authorEmail]' AND content='$comment[content]'"))){
				$errors['duplicate_comment'] = true;
				$smarty->assign('duplicate_comment', true);
			}

			if(empty($errors)){
				$comment['commentId']  = '';
				$comment['productId']  = $product['productId'];
				$comment['visitorId']  = $visitorId;
				$comment['authorIp']   = $visitorIp;
				$comment['addedOn']    = gmdate('Y-m-d H:i:s');
				$comment['modifiedBy'] = 0;
				$comment['modifiedOn'] = gmdate('Y-m-d H:i:s');
				$comment['status']     = 'approved';

				/* apply SPAM filters to the comment */
				if(!empty($config['comments_spam_words'])){
					$spamWords = preg_split('/[\r\n]+/', $config['comments_spam_words']);
					$spamWords = array_map('preg_quote', $spamWords);
					$regex = '/'.implode('|', $spamWords).'/i';
					if(preg_match($regex, $comment['content']) || preg_match($regex, $comment['authorIp']) || preg_match($regex, $comment['authorEmail']) || preg_match($regex, $comment['authorName'])){
						$comment['status'] = 'spam';
					}
				}
				
				/* apply HOLD filters to the comment */
				if(($comment['status'] != 'spam') && !$config['comments_must_be_approved'] && !empty($config['comments_hold_words'])){
					$holdWords = preg_split('/[\r\n]+/', $config['comments_hold_words']);
					$holdWords = array_map('preg_quote', $holdWords);
					$regex = '/'.implode('|', $holdWords).'/i';
					if(preg_match($regex, $comment['content']) || preg_match($regex, $comment['authorIp']) || preg_match($regex, $comment['authorEmail']) || preg_match($regex, $comment['authorName'])){
						$comment['status'] = 'pending';
					}
				}
				
				/* check if all comments must be approved manually */
				if($comment['status'] != 'spam' && $config['comments_must_be_approved']) $comment['status'] = 'pending';

				/* mark comment as SPAM if commenter had a SPAM comment previously */
				if($comment['status'] != 'spam' && $config['comments_blacklist_enabled']){
					$where = array();
					$where[] = "authorEmail='$comment[authorEmail]'";
					$where[] = "authorName='$comment[authorName]'";
					if(dbQuery('comments', DB_VALUE, array('where'=>$where, 'order'=>'addedOn DESC', 'fields'=>'status')) == 'spam') $comment['status'] = 'spam';
				}

				/* avoid moderation if commenter has a previously approved comment */
				if($comment['status'] != 'spam' && $config['comments_whitelist_enabled']){
					$where = array();
					$where[] = "authorEmail='$comment[authorEmail]'";
					$where[] = "authorName='$comment[authorName]'";
					if(dbQuery('comments', DB_VALUE, array('where'=>$where, 'order'=>'addedOn DESC', 'fields'=>'status')) == 'approved') $comment['status'] = 'approved';
				}
				
				/* email confirmation */
				if($config['comments_email_confirmation_required'] == 1){
					/* confirm once */
					$where = array();
					$where[] = "authorEmail='$comment[authorEmail]'";
					$where[] = "authorName='$comment[authorName]'";
					$where[] = "status IN('pending', 'approved')";
					if(!dbQuery('comments', DB_VALUE, array('where'=>$where, 'limit'=>1, 'fields'=>'commentId'))){
						$comment['status'] = 'unconfirmed';
					}
				} elseif($config['comments_email_confirmation_required'] == 2){
					/* confirm each time */
					$comment['status'] = 'unconfirmed';
				}
			
				$comment['commentId'] = dbQuery('comments', DB_INSERT, array('values'=>$comment));

				if($comment['status'] == 'approved'){
					$smarty->assign('comment_published', true);
				} elseif($comment['status'] == 'unconfirmed') {
					$smarty->assign('commentId', $comment['commentId']);
					$smarty->assign('commentCode', substr(md5($comment['authorEmail'].$comment['addedOn'].AP_SERIAL.SITE_ROOT.'AbBra-cAda8Ra'), 0, 12));

					$recipient = $comment['authorEmail'];
					$subject   = '=?'.$config['charset'].'?B?'.base64_encode('Email Confirmation').'?=';
					$message   = chunk_split(base64_encode($smarty->fetch('commenting-confirmation.tpl')), 68, "\n");
					$headers   = 'From: '.'NO-REPLY'.preg_replace('/^.+(@.+)$/', '$1', $config['feedback_email'])."\nContent-Type: text/plain; charset=$config[charset]\nMIME-Version: 1.0\nContent-Transfer-Encoding: base64";
					
					mail($recipient, $subject, $message, $headers);
					
					$smarty->assign('confirm_email', true);
				} else {
					$smarty->assign('comment_saved', true);
				}
				$smarty->assign('newComment', array());
				
				/* delete unconfirmed comments */
				dbQuery('comments', DB_DELETE, array('where'=>"status='unconfirmed' AND addedOn < '".gmdate('Y-m-d H:i:s', time() - 86400*3)."'"));

				/* delete spam comments */
				dbQuery('comments', DB_DELETE, array('where'=>"status='spam' AND addedOn < '".gmdate('Y-m-d H:i:s', time() - 86400*30)."'"));
			} else {
				$smarty->assign('errors', $errors);
			}
		}


	}
?>