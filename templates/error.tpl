<!DOCTYPE html>
<html lang="zh-TW">
  {if $refresh}<meta http-equiv="refresh" content="2; url=index.php">{/if}
  <!-- 引入檔頭 -->
  {include file="header.tpl"}
<body>
  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading text-center">錯誤提示</h4>
    <ul  class="text-center">
      {foreach from=$message key=key item=value}
          <li>{$key+1}.{$value}</li>
      {/foreach}
    </ul>
  </div>
</body>
</html>