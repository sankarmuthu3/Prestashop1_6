<?php /*%%SmartyHeaderCode:274015b60331cf11763-66862678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ae16119ae49ba0987a4c57de53ccdd62836a25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1530102712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274015b60331cf11763-66862678',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b60331d1388a7_13681137',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b60331d1388a7_13681137')) {function content_5b60331d1388a7_13681137($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost:88/prestashop/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost:88/prestashop/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost:88/prestashop/credit-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost:88/prestashop/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost:88/prestashop/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
