<?php
/* Smarty version 3.1.30, created on 2017-08-31 09:41:10
  from "D:\dev\smarty\views\templates\default.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7bd96927928_18203704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cc3a7764c037bfa1139bce3c76398962afb1e15' => 
    array (
      0 => 'D:\\dev\\smarty\\views\\templates\\default.tpl.html',
      1 => 1504165267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a7bd96927928_18203704 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="/dist/normalize/normalize.css">
    <link rel="stylesheet" href="/dist/bootstrap/css/bootstrap.min.css">
    <?php echo $_smarty_tpl->tpl_vars['extra_css']->value;?>

</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

    <?php echo '<script'; ?>
 src="/dist/jquery/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/dist/popper/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/dist/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['extra_js']->value;?>

</body>
</html><?php }
}
