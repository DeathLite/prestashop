<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 11:23:55
         compiled from "module:ps_banner/ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13347060555a9e6c3b53f027-04690796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_banner/ps_banner.tpl',
      1 => 1520331264,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '13347060555a9e6c3b53f027-04690796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9e6c3b546639_36657141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9e6c3b546639_36657141')) {function content_5a9e6c3b546639_36657141($_smarty_tpl) {?><!-- begin /var/www/prestashop/themes/classic/modules/ps_banner/ps_banner.tpl -->
<a class="banner" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
  <?php } else { ?>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<!-- end /var/www/prestashop/themes/classic/modules/ps_banner/ps_banner.tpl --><?php }} ?>
