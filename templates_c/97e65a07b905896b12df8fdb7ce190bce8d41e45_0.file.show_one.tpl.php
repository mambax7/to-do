<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 08:50:00
  from 'E:\UniServerZ\www\templates\show_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec6e28771079_54799594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97e65a07b905896b12df8fdb7ce190bce8d41e45' => 
    array (
      0 => 'E:\\UniServerZ\\www\\templates\\show_one.tpl',
      1 => 1592552394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec6e28771079_54799594 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="jumbotron">
    <h2 class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"><i class="fas fa-reply"></i> <?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</a></h2>

    <div class="alert alert-warning text-right">
      是否完成：
      <?php if ($_smarty_tpl->tpl_vars['content']->value['done']) {?>
          <span class="badge badge-success text-center"><i class="fas fa-check"></i></span>
      <?php } else { ?>
          <span class="badge badge-danger text-center"><i class="fas fa-times-circle"></i></span>
      <?php }?>
    </div>

    <div class="row">
        <label class="col-sm-3 text-right">
            描述
        </label>
        <div class="col-sm-9">
            <?php echo nl2br($_smarty_tpl->tpl_vars['content']->value['directions']);?>

        </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        到期日
      </label>
      <div class="col-sm-9">
          <?php echo $_smarty_tpl->tpl_vars['content']->value['end'];?>

      </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        優先順序
      </label>
      <div class="col-sm-9">
          <?php echo $_smarty_tpl->tpl_vars['content']->value['priority'];?>

      </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        指派對象
      </label>
      <div class="col-sm-9">
          <?php echo $_smarty_tpl->tpl_vars['content']->value['assign'];?>

      </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        建立時間
      </label>
      <div class="col-sm-9">
          <?php echo $_smarty_tpl->tpl_vars['content']->value['create_time'];?>

      </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        最後更新時間
      </label>
      <div class="col-sm-9">
          <?php echo $_smarty_tpl->tpl_vars['content']->value['update_time'];?>

      </div>
    </div>

    <div class="text-right">
      <a href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
?op=delet&sn=<?php echo $_smarty_tpl->tpl_vars['content']->value['sn'];?>
" class="btn btn-danger">刪除</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
?op=post_form&sn=<?php echo $_smarty_tpl->tpl_vars['content']->value['sn'];?>
" class="btn btn-warning">編輯</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-success">回首頁</a>
  </div>
  </div>
</div>
<?php }
}
