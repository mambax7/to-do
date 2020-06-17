<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 03:54:25
  from 'E:\UniServerZ\www\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee985e132d7a3_38262540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a3e8752b13a31e681f9e5f6f2b9b6019b90046' => 
    array (
      0 => 'E:\\UniServerZ\\www\\templates\\index.tpl',
      1 => 1592362454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ee985e132d7a3_38262540 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-TW">
  <!-- 引入檔頭 -->
  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <div class="container">
    <img src="images/logo.jpg" class="rounded-circle mx-auto d-block" width="100%" height="200rem" alt="logo">
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <h1><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
        </a>

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav  ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['navbar']->value['home'];?>
 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
?op=post"><?php echo $_smarty_tpl->tpl_vars['navbar']->value['post'];?>
</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <p>
              日期：2020/06/08
            </p>
        </div>
        <div class="col-sm-9">
            <ul>
                <li>今天到期：1</li>
                <li>逾期：2</li>
            </ul>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
      <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover table-sm">
            <thead  class="thead-dark">
              <tr>
                <th>描述</th>
                <th>到期日</th>
              </tr>
            </thead>
            <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['directions'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['end'];?>
</td>
                  </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
      </div>
    <?php } else { ?>
      <div class="jumbotron text-center">
        <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
?op=post" role="button">新增待辦事項</a>
      </div>
    <?php }?>
</body>
</html><?php }
}
