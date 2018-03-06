<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 11:24:02
         compiled from "/var/www/prestashop/admin485iua788/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3470253895a9e6c428d9174-47243906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aae6e15f89d600af48aae941fe8dda92ac862cf' => 
    array (
      0 => '/var/www/prestashop/admin485iua788/themes/default/template/content.tpl',
      1 => 1520331257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3470253895a9e6c428d9174-47243906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9e6c428dcb29_89962239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9e6c428dcb29_89962239')) {function content_5a9e6c428dcb29_89962239($_smarty_tpl) {?>
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
