<?php /* Smarty version Smarty-3.1.19, created on 2018-08-14 15:57:42
         compiled from "C:\xampp\htdocs\prestashop\admin765ityful\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75135b72ae9ee02da8-95787445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd34031d44293d699c73c72157312a9c98faddd67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin765ityful\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1530102712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75135b72ae9ee02da8-95787445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b72ae9ee492a7_71326975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b72ae9ee492a7_71326975')) {function content_5b72ae9ee492a7_71326975($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
