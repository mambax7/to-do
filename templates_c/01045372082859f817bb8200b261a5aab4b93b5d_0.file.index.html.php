<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-16 03:31:44
  from 'E:\UniServerZ\www\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee82f1071bce3_34213908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01045372082859f817bb8200b261a5aab4b93b5d' => 
    array (
      0 => 'E:\\UniServerZ\\www\\templates\\index.html',
      1 => 1592274666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee82f1071bce3_34213908 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a class="nav-link" href="#">回首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.html">發布待辦事項</a>
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
          <th><i class="fas fa-check"></i> 完成</th>
          <th>描述</th>
          <th>到期日</th>
          <th>優先順序</th>
          <th>指派對象</th>
          <th>地點</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>完成</td>
          <td>撰寫程式</td>
          <td>2020/06/08</td>
          <td>低</td>
          <td>李大頭</td>
          <td>研討室</td>
        </tr>
        <tr>
          <td>未完成</td>
          <td>開會</td>
          <td>2020/06/08</td>
          <td>高</td>
          <td>李大頭、主任、XX科</td>
          <td>4F會議室</td>
        </tr>
        <tr>
          <td>未完成</td>
          <td>開會</td>
          <td>2020/06/08</td>
          <td>高</td>
          <td>李大頭、主任、XX科</td>
          <td>4F會議室</td>
        </tr>
        <tr>
          <td>未完成</td>
          <td>開會</td>
          <td>2020/06/08</td>
          <td>高</td>
          <td>李大頭、主任、XX科</td>
          <td>4F會議室</td>
        </tr>
      </tbody>
    </table>
</div>

</body>
</html><?php }
}
