<?php /* Smarty version Smarty-3.0.8, created on 2011-08-13 14:23:26
         compiled from "/Users/narg/Dropbox/teste_smarty/template/admin/includes/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9583026024e466cbec6ba73-62470998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a1e712179c344bd39933e2d562352e2d953834' => 
    array (
      0 => '/Users/narg/Dropbox/teste_smarty/template/admin/includes/menu.tpl',
      1 => 1313237048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9583026024e466cbec6ba73-62470998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('is_admin')->value=="admin"){?>
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
<?php }?>
<h6 class="vlist">Settings</h6>

          <ul class="vlist">
            <?php if ($_smarty_tpl->getVariable('current_user')->value==''){?>
            <li><a href="/admin/">Login</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('is_admin')->value=="admin"){?>
            <li><a href="/admin/users.php">Usernames</a></li>
            <li><a href="/admin/user_settings.php" class="active">User Settings</a></li>
            <li><a href="/admin/change_password.php">Change Password</a></li>
            <li><a href="/admin/logout.php">Logout</a></li>
            <?php }elseif($_smarty_tpl->getVariable('is_admin')->value=="poster"){?>
            <li><a href="/admin/posts.php?user=<?php echo $_smarty_tpl->getVariable('current_user')->value;?>
" class="active">My Posts</a></li>
            
            <li><a href="/admin/change_password.php">Change Password</a></li>
            <li><a href="/admin/user_settings.php" class="active">User Settings</a></li>
            <li><a href="/admin/logout.php">Logout</a></li>
            <?php }?>
          </ul>
