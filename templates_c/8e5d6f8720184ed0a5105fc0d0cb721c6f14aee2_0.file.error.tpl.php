<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 06:37:15
  from 'E:\UniServerZ\www\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06ad0b4e9254_65396286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e5d6f8720184ed0a5105fc0d0cb721c6f14aee2' => 
    array (
      0 => 'E:\\UniServerZ\\www\\templates\\error.tpl',
      1 => 1592537889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f06ad0b4e9254_65396286 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-TW">
  <?php if ($_smarty_tpl->tpl_vars['refresh_url']->value) {?><meta http-equiv="refresh" content="2; url=<?php echo $_smarty_tpl->tpl_vars['refresh_url']->value;?>
"><?php }?>
  <!-- 引入檔頭 -->
  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <div class="container">
      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-center"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h4>
        <ul  class="text-center">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
.<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
  </div>
</body>
</html><?php }
}
