{if $is_admin eq "admin"}
<h6 class="vlist">Content Pages</h6>
<ul class="vlist">
			<li><a href="/admin/page.php?id=home">Home</a></li>
            <li><a href="/admin/page.php?id=aboutus">About Us</a></li>
		    <li><a href="/admin/page.php?id=contactus">Contact Us</a></li>
		    <li><a href="/admin/page.php?id=overview">Overview</a></li>
		    <li><a href="/admin/page.php?id=information">Information</a></li>
		    <li><a href="/admin/page.php?id=blogs">Blogs</a></li>
		    <li><a href="/admin/page.php?id=applynow">Apply Now</a></li>
		    <li><a href="/admin/page.php?id=freebrochure">Free Brochure</a></li>
		    <li><a href="/admin/page.php?id=404">404 Not Found</a></li>
</ul>
{/if}
<h6 class="vlist">Settings</h6>

          <ul class="vlist">
            {if $current_user eq ""}
            <li><a href="/admin/">Login</a></li>
            {/if}
            {if $is_admin eq "admin"}
            <li><a href="/admin/users.php">Usernames</a></li>
            <li><a href="/admin/user_settings.php" class="active">User Settings</a></li>
            <li><a href="/admin/change_password.php">Change Password</a></li>
            <li><a href="/admin/logout.php">Logout</a></li>
            {elseif  $is_admin eq "poster"}
            <li><a href="/admin/posts.php?user={$current_user}" class="active">My Posts</a></li>
            
            <li><a href="/admin/change_password.php">Change Password</a></li>
            <li><a href="/admin/user_settings.php" class="active">User Settings</a></li>
            <li><a href="/admin/logout.php">Logout</a></li>
            {/if}
          </ul>
