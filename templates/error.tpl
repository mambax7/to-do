<!DOCTYPE html>
<html lang="zh-TW">
  {if $refresh_url}<meta http-equiv="refresh" content="2; url={$refresh_url}">{/if}
  <!-- 引入檔頭 -->
  {include file="header.tpl"}
<body>
  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading text-center">{$page_title}</h4>
    <ul  class="text-center">
      {foreach from=$message key=key item=value}
          <li>{$key+1}.{$value}</li>
      {/foreach}
    </ul>
  </div>
</body>
</html>