<?php /* Smarty version Smarty-3.0.7, created on 2011-05-10 23:13:23
         compiled from "templates_c/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11342687354dc9aa733a3527-81933015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134698f94fc70d4dc67bb071fd3c80b5e24d4616' => 
    array (
      0 => 'templates_c/index.tpl',
      1 => 1305062000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11342687354dc9aa733a3527-81933015',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="bg" lang="bg">
  <head>
    <title><?php echo (($tmp = @$_smarty_tpl->getVariable('title')->value)===null||$tmp==='' ? 'no title' : $tmp);?>
</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->getVariable('js')->value)===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('jsFolder')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" type="text/css" media="screen" />
    <?php }} ?> 
    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('css')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
      <script src="<?php echo $_smarty_tpl->getVariable('cssFolder')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" type="text/javascript" language="javascript" charset="utf-8"></script>
    <?php }} ?> 
  </head>
  <body>
  <p>
    <?php echo $_smarty_tpl->getVariable('message')->value;?>

  </p>
  <p>
    <?php echo $_smarty_tpl->getVariable('message2')->value;?>

  </p>
  </body>
</html>
