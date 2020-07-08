<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-08 02:20:11
  from 'E:\UniServerZ\www\templates\post_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f051f4b6c5e68_70679198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26fd0ecaa6c707248a2d992e20fc808f5cdfdf56' => 
    array (
      0 => 'E:\\UniServerZ\\www\\templates\\post_form.tpl',
      1 => 1594171205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f051f4b6c5e68_70679198 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="../class/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
>
<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" id="myForm" role="form">
  <!-- b4-form-group-text -->
  <div class="form-group">
    <label for="title">待辦事項</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="待辦事項" value="<?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
">
  </div>
  <!-- b4-form-texarea -->
  <div class="form-group">
    <label for="directions">描述</label>
    <textarea id="directions" class="form-control" name="directions" rows="3"><?php echo $_smarty_tpl->tpl_vars['content']->value['directions'];?>
</textarea>
  </div>
  <div class="form-group">
    <label for="title">到期日</label>
    <input type="text" name="end" id="end" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['content']->value['end'];?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd',startDate:'%y-%M-%d',minDate:'%y-%M-%d'})" placeholder="到期日">
  </div>
  <!-- b4-form-select -->
  <div class="form-group">
    <label for="priority">優先順序</label>
    <select class="form-control" name="priority" id="priority">
      <option value="高" <?php if ($_smarty_tpl->tpl_vars['content']->value['priority'] == '高') {?>selected<?php }?>>高</option>
      <option value="中" <?php if ($_smarty_tpl->tpl_vars['content']->value['priority'] == '中') {?>selected<?php }?>>中</option>
      <option value="低" <?php if ($_smarty_tpl->tpl_vars['content']->value['priority'] == '低') {?>selected<?php }?>>低</option>
    </select>
  </div>

<div class="form-group">
    <label for="assign">指派對象</label>
    <!-- b4-form-check-inline-->
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_0" value="爸爸" <?php if (in_array("爸爸",$_smarty_tpl->tpl_vars['content']->value['assign_arr'])) {?>checked="checked"<?php }?>>爸爸
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_1" value="媽媽" <?php if (in_array("媽媽",$_smarty_tpl->tpl_vars['content']->value['assign_arr'])) {?>checked="checked"<?php }?>>媽媽
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_2" value="哥哥" <?php if (in_array("哥哥",$_smarty_tpl->tpl_vars['content']->value['assign_arr'])) {?>checked="checked"<?php }?>>哥哥
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_3" value="妹妹" <?php if (in_array("妹妹",$_smarty_tpl->tpl_vars['content']->value['assign_arr'])) {?>checked="checked"<?php }?>>妹妹
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_4" value="我" <?php if (in_array("我",$_smarty_tpl->tpl_vars['content']->value['assign_arr'])) {?>checked="checked"<?php }?>>我
      </label>
    </div>
</div>

  <div class="form-group">
      <label for="done">是否完成</label>
      <!-- b4-form-radio-inline-->
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="done" id="done" value="1"  <?php if ($_smarty_tpl->tpl_vars['content']->value['done'] == '1') {?>checked<?php }?>>完成
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="done" id="done" value="0"  <?php if ($_smarty_tpl->tpl_vars['content']->value['done'] == '' || $_smarty_tpl->tpl_vars['content']->value['done'] == '0') {?>checked<?php }?>>未完成
        </label>
  </div>
</div>
<div class="text-center">
  <input type="hidden" name="next_op" value="<?php echo $_smarty_tpl->tpl_vars['next_op']->value;?>
">
  <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['content']->value['sn'];?>
">
  <input type="hidden" name="op" value="<?php echo $_smarty_tpl->tpl_vars['op']->value;?>
">
  <input type="submit" name="send" value="儲存" class="btn btn-primary" />
</div>
</form><?php }
}
