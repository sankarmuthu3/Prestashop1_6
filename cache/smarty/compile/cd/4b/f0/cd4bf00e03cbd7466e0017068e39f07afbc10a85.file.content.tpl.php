<?php /* Smarty version Smarty-3.1.19, created on 2018-08-14 15:57:12
         compiled from "C:\xampp\htdocs\prestashop\admin765ityful\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98325b72ae80ad97a4-04345204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd4bf00e03cbd7466e0017068e39f07afbc10a85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin765ityful\\themes\\default\\template\\content.tpl',
      1 => 1530102712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98325b72ae80ad97a4-04345204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b72ae80ae14a7_08087605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b72ae80ae14a7_08087605')) {function content_5b72ae80ae14a7_08087605($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
