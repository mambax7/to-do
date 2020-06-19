<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 07:06:42
  from 'E:\UniServerZ\www\templates\show_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec55f21ea3b5_99205460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97e65a07b905896b12df8fdb7ce190bce8d41e45' => 
    array (
      0 => 'E:\\UniServerZ\\www\\templates\\show_one.tpl',
      1 => 1592546797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec55f21ea3b5_99205460 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="jumbotron">
    <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</h2>
    <div class="row">
        <label class="col-sm-3 text-right">
            描述
        </label>
        <div class="col-sm-9">
            <?php echo $_smarty_tpl->tpl_vars['content']->value['directions'];?>

        </div>
    </div>
  </div>
</div>
<?php }
}
