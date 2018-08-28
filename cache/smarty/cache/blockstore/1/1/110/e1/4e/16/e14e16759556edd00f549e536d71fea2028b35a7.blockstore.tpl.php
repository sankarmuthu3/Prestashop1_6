<?php /*%%SmartyHeaderCode:260715b6038050db339-77273021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e14e16759556edd00f549e536d71fea2028b35a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockstore\\blockstore.tpl',
      1 => 1530102712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260715b6038050db339-77273021',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b6038053119b4_01474188',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6038053119b4_01474188')) {function content_5b6038053119b4_01474188($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost:88/prestashop/stores" title="Our stores">
			Our stores
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost:88/prestashop/stores" title="Our stores">
				<img class="img-responsive" src="http://localhost:88/prestashop/modules/blockstore/store.jpg" alt="Our stores" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost:88/prestashop/stores" 
			title="Our stores">
				<span>Discover our stores<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
