{include file="header.tpl" activeItem="comments" title="{comments:title}"}
<div class="page-content-wrap">
  
  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{comments:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.bulk_save}<span id="bulkSaveMessage" onclick = "{literal}noty({text: '{/literal}{comments:messages:1}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
	{if $errors.access_denied}<span id="accessDeniedError" onclick = "{literal}noty({text: '{/literal}{comments:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{comments:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.comment_not_found}<span id="commentNotFoundError" onclick = "{literal}noty({text: '{/literal}{comments:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  {if $errors.authorName}<span id="authorNameError" onclick = "{literal}noty({text: '{/literal}{comments:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  {if $errors.authorEmail}<span id="authorEmailError" onclick = "{literal}noty({text: '{/literal}{comments:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  {if $errors.content}<span id="contentError" onclick = "{literal}noty({text: '{/literal}{comments:errors:5}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  {if $errors.authorEmailNot}<span id="authorEmailNotError" onclick = "{literal}noty({text: '{/literal}{comments:errors:6}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  <script>
  	{literal}
    $(document).ready(function () {
      {/literal}
      {if $errors.access_denied} $('#accessDeniedError').click();{/if}
      {if $errors.not_saved} $('#notSavedError').click(); {/if}
      {if $errors.comment_not_found} $('#commentNotFoundError').click();{/if}
      {if $errors.authorName} $('#authorNameError').click();{/if}
      {if $errors.authorEmail} $('#authorEmailError').click();{/if}
      {if $errors.authorEmailNot} $('#authorEmailNotError').click();{/if}
      {if $errors.content} $('#contentError').click();{/if}
      
      {if $messages.saved} $('#savedMessage').click();{/if}
      {if $messages.bulk_save} $('#bulkSaveMessage').click();{/if}
      {literal}
    });
  {/literal}           
  </script>

  
{if $action.edit}

	<div class="content-frame" style="margin-bottom:10px;">                                    
    <div class="content-frame-top">
      <div class="col-md-3 nopadding"><div class="page-title"><h2><span class="fa fa-comments"></span> {general:comments}</h2></div></div>
      <div class="col-md-6 content-frame-body-left">
        <div id="ajaxStatus"> </div>  
      </div>                        
		</div>

		<div class="clear"></div>
		<div class="col-md-12">
  		<form action="comments.php" method="post" id="comment">
  			<input type="hidden" name="comment[commentId]" value="{$comment.commentId}" />
  			<input type="hidden" name="action[save]" value="1" />
        <div class="block">
          <div class="form-group">
            <div class="col-md-3 nopadding_left">{comments:authorName}</div>                                      
            <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="authorName" type="text" name="comment[authorName]" value="{$comment.authorName}" /></div>
          </div>
          <div class="form-group">
            <div class="col-md-3 nopadding_left">{comments:authorEmail}</div>                                   
            <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="authorEmail" type="text" name="comment[authorEmail]" value="{$comment.authorEmail}" /></div>
          </div>
            <div class="form-group">
              <div class="col-md-3 nopadding_left">{comments:status}</div>
              <div class="col-md-9 nopadding_right">{html_options options=$statuses name='comment[status]' id=status selected=$comment.status class="form-control select"}</div>
            </div>
            <div class="form-group">
              <div class="col-md-3 nopadding_left">Фотография</div>
              <div class="col-md-9 nopadding_right"><img src="{$SITE_URL}/uploads/comments/{$comment.photoHash}/photo.{$comment.photoExt}"></div>
            </div>
            <div class="form-group">{comments:commentMessage}<textarea class="description"  name="comment[content]" id="content">{$comment.content} </textarea></div>
            <div class="form-group">{comments:commentAnswer}<textarea class="description"  name="comment[answer]" id="answer">{$comment.answer} </textarea></div>
          </div>
          <div align="center" class="main main_buttons">
    			  <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" /> &nbsp;
    			  <a class="btn btn-primary" href="comments.php?page={$page}">{general:cancel}</a>
  		   </div>
  		</form>
    </div> 
  </div>  
 
{elseif !$errors.access_denied}

	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2><span class="fa fa-comments"></span> {general:comments}</h2></div>
      <div class="col-md-6 content-frame-body-left">
        <div id="ajaxStatus"> </div>   
      </div>
      <div class="col-md-3 nopadding">
        <div class="pull-right"> 
          <span id="searchLabel">
            {if $query || $status || $section}
              <span class=" btn btn-danger" onclick="showSearchForm()" title="{general:search}"><span class="fa fa-search"></span></span> 
              <a class=" btn btn-danger" href="comments.php">{comments:showAllComments}</a>
            {else}
              <span class=" btn btn-danger" onclick="showSearchForm()" title="{general:search}"><span class="fa fa-search"></span></span>
            {/if}
          </span>
        </div>
      </div>
    </div>
	</div>

	<div id="searchRow" style="display:none">
		<div class="col-md-2"></div>
		<div class="col-md-8">
      <form id="searchForm">
		    <div class=" panel panel-colorful">
          <div class="panel-heading"></div>
          <div class="panel-body form_select_4">
            <input class="form-control" type="text" name="query" value="{$query}" autocomplete="off" />
            <div style="margin-top: 10px;">
						  {html_options options=$statuses selected=$status name=status}
              <input style="float:right;"class=" btn btn-danger" type="submit" value="{general:search}" />
            </div>
          </div>
		    </div>
			</form>
		</div>
		<div class="col-md-2"></div> 
	</div>
	
	<div class="col-md-12">
		<form action="comments.php" method="post">
			<input type="hidden" name="action[bulk]" value="1">
			<input type="hidden" name="query" value="{$query}">
			<input type="hidden" name="status" value="{$status}">
      <div class="content-frame" id="comments">         
        <div class="panel panel-default" style="margin-bottom: 0px;">
          <div class="panel-body mail" id="comment-{$comment.commentId}">
            {if $comments}{foreach item=comment from=$comments name=comments}   
            <div class="mail-item mail-warning">                                    
              <div class="mail-star">
              {if $comment.status eq "approved"}
                <button style="background:none;border:none;" name="bulk[{$comment.commentId}]" value="1">
                  <span style="color:#fea223;" class="fa fa-star" title="{comments:approve}"></span>
                </button>
              {elseif $comment.status eq "spam"}
                <button style="background:none;border:none;" name="bulk[{$comment.commentId}]" value="2">
                  <span style="color:#FFE1B4;" class="fa fa-exclamation-circle" title="{comments:spam}"></span>
                </button>
              {else $comment.status eq "pending" || $comment.status eq "unconfirmed"}
                <button style="background:none;border:none;" name="bulk[{$comment.commentId}]" value="0">
                  <span class="fa fa-star-o" title="{comments:skip}"></span>
                </button>
              {/if}
              </div>
              <div class="mail-user">
                {if $comment.authorUrl|strlen > 10}
                  <a title="{$comment.authorName}" href="{$comment.authorUrl}">{$comment.authorName|truncate:20}</a>
                {else}
                  {$comment.authorName|truncate:20}
                {/if}&nbsp; 
                  <a href="mailto:{$comment.authorEmail}"> {$comment.authorEmail|truncate:20}</a>
              </div>                                    
              <a href="comments.php?action[edit]=true&comment[commentId]={$comment.commentId}&page={$page}" class="mail-text">{$comment.content|strip_tags|truncate:100 nofilter}</a>                                    
              <div class="mail-checkbox">
                <a class="btn btn-green btn-rounded" href="comments.php?action[edit]=true&comment[commentId]={$comment.commentId}&page={$page}"><span class="fa fa-pen"></span></a>
                <button class="btn btn-danger btn-rounded" name="bulk[{$comment.commentId}]" value="3"><span class="fa fa-trash"></span></button>
  						</div>
              <div class="mail-date">{$comment.addedOn nofilter}</div>
            </div>
            {/foreach}
          </div>
          
          <div class="panel-footer">                                                               
            <div class="btn-group"> {general:results}</div>
            {if $pageNums.pages}
            <ul class="pagination pagination-sm pull-right">
              {foreach from=$pageNums.pages item=number}
              {if $number eq $page}
                <li class="active"><a href="comments.php?page={$number}{if $query}&query={$query}{/if}{if $status}&status={$status}{/if}">{$number}</a></li>
              {elseif $number eq '...'}
                ...
              {else}
                <li><a href="comments.php?page={$number}{if $query}&query={$query}{/if}{if $status}&status={$status}{/if}">{$number}</a></li>
              {/if}
              {/foreach}
            </ul>
            {/if}
          </div>
          
          {else}
          <div class="panel panel-default" style="margin-bottom: 0px;"><div class="panel-body mail" align="center">- {general:none} -</div></div>
          {/if}
        </div>
      </div>
    </form>
  </div>
    
{/if}
</div>
{include file="footer.tpl"}