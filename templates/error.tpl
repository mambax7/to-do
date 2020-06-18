<!DOCTYPE html>
<html lang="zh-TW">
  <meta http-equiv="refresh" content="2; url=index.php">
  <!-- 引入檔頭 -->
  {include file="header.tpl"}
<body>
  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">錯誤提示</h4>
    <ul>
      {foreach from=$message key=key item=value}
          <li>{$key+1}.{$value}</li>
      {/foreach}
    </ul>
  </div>
</body>
</html>