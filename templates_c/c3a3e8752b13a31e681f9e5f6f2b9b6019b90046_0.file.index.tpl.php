<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-16 04:31:09
  from 'E:\UniServerZ\www\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee83cfd77df92_22852536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a3e8752b13a31e681f9e5f6f2b9b6019b90046' => 
    array (
      0 => 'E:\\UniServerZ\\www\\templates\\index.tpl',
      1 => 1592278265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee83cfd77df92_22852536 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome_css/all.css">
  <?php echo '<script'; ?>
 src="js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
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
    <a class="nav-link" href="#"><?php echo $_smarty_tpl->tpl_vars['navbar']->value['home'];?>
 <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="post.html"><?php echo $_smarty_tpl->tpl_vars['navbar']->value['post'];?>
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

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-sm">
      <thead  class="thead-dark">
        <tr>
          <th>描述</th>
          <th>到期日</th>
        </tr>
      </thead>
      <tbody>
        <!-- 法一 -->
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
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['content']->value[1]['directions'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['content']->value[1]['end'];?>
</td>
          </tr>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['content']->value[2]['directions'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['content']->value[2]['end'];?>
</td>
          </tr>
      </tbody>
    </table>
</div>

</body>
</html><?php }
}
