<?php /* Smarty version Smarty-3.1.19, created on 2018-07-30 13:14:49
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\referrers\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284475b5ef329f35ca8-65401793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b13aaf7ded27af07446028a4d6c3c7506f52622' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\referrers\\calendar.tpl',
      1 => 1530102712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284475b5ef329f35ca8-65401793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'token' => 0,
    'action' => 0,
    'table' => 0,
    'identifier' => 0,
    'id' => 0,
    'translations' => 0,
    'datepickerFrom' => 0,
    'datepickerTo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b5ef32a01a9a8_89079811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5ef32a01a9a8_89079811')) {function content_5b5ef32a01a9a8_89079811($_smarty_tpl) {?>

<div id="referrersContainer">
	<div id="calendar">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['action']->value&&$_smarty_tpl->tpl_vars['table']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['identifier']->value&&$_smarty_tpl->tpl_vars['id']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" method="post" id="calendar_form" name="calendar_form" class="form-horizontal">
				<div class="panel">
					<input type="submit" name="submitDateDay" class="btn btn-default submitDateDay" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
" />
					<input type="submit" name="submitDateMonth" class="btn btn-default submitDateMonth" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
" />
					<input type="submit" name="submitDateYear" class="btn btn-default submitDateYear" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
" />
					<input type="submit" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
-1" />
					<input type="submit" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
-1" />
					<input type="submit" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
-1" />
					<p>
						<span><?php if (isset($_smarty_tpl->tpl_vars['translations']->value['From'])) {?><?php echo $_smarty_tpl->tpl_vars['translations']->value['From'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'From:'),$_smarty_tpl);?>
<?php }?></span>
						<input type="text" name="datepickerFrom" id="datepickerFrom" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datepickerFrom']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="datepicker" />
					</p>
					<p>
						<span><?php if (isset($_smarty_tpl->tpl_vars['translations']->value['To'])) {?><?php echo $_smarty_tpl->tpl_vars['translations']->value['To'];?>
<?php } else { ?><span><?php echo smartyTranslate(array('s'=>'To:'),$_smarty_tpl);?>
</span><?php }?></span>
						<input type="text" name="datepickerTo" id="datepickerTo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datepickerTo']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="datepicker" />
					</p>
					<button type="submit" name="submitDatePicker" id="submitDatePicker" class="btn btn-default">
						<i class="icon-save"></i> <?php if (isset($_smarty_tpl->tpl_vars['translations']->value['Save'])) {?><?php echo $_smarty_tpl->tpl_vars['translations']->value['Save'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
<?php }?>
					</button>
				</div>
			</form>

			<script type="text/javascript">
				$(document).ready(function() {
					if ($("form#calendar_form .datepicker").length > 0)
						$("form#calendar_form .datepicker").datepicker({
							prevText: '',
							nextText: '',
							dateFormat: 'yy-mm-dd'
						});
				});
			</script>
	</div>
<?php }} ?>
