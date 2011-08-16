{include file="admin/includes/header.tpl"}

{validate id="vpassword2" assign="password_error" message="Password can not be empty."}
{validate id="vpassword" assign="password_error" message="Passwords dont match."}
	<div id="title">
        <h2>Admin » {$current_user} » Change Password</h2>
      </div>

      <div id="main">
        <div id="col1">
          <div id="col1_content" class="clearfix">
            <!-- add your content here -->
            {include file="admin/includes/menu.tpl"}
          </div>
        </div>
        <div id="col3">
          <div id="col3_content" class="clearfix">
            <!-- add your content here -->
            <div class="subcolumns"><div class="center">
{if $mensagem neq ""}<h2>{$mensagem}</h2>{/if}
			</div></div>
            
            <form method="post" action="" class="yform">
			  <fieldset>
			    <legend>Change Password</legend>
				<div class="type-text {if $old_error neq ""} error" role="alert" aria-live="assertive{/if}">
			    {if $old_error neq ""}<strong class="message">{$old_error}</strong>{/if}
				  <label for="old_password">Old Password</label>
				  <input type="password" name="old_password" id="old_password" size="20" />
				</div>
				
			    <div class="type-text {if $password_error neq ""} error" role="alert" aria-live="assertive{/if}">
			    {if $password_error neq ""}<strong class="message">{$password_error}</strong>{/if}
				  <label for="password">New Password</label>
				  <input type="password" name="password" id="password" size="20" />
				</div>
				
				<div class="type-text {if $password_error neq ""} error" role="alert" aria-live="assertive{/if}">
			      <label for="password2">Repeat New Password</label>
				  <input type="password" name="password2" id="password2" size="20" />
				</div>
				
			  </fieldset>
			  <div class="type-button">
              		<input type="submit" value="Alterar"  class="reset" id="submit" name="submit" />
	          </div>
			</form>
			
          </div>
          <!-- IE Column Clearing -->
          <div id="ie_clearing"> &#160; </div>
        </div>
      </div>
{include file="admin/includes/footer.tpl"}