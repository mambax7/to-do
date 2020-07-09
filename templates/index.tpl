<!DOCTYPE html>
<html lang="zh-TW">
  <!-- 引入檔頭 -->
  {include file="header.tpl"}
<body>
  <div class="container">
    <img src="images/logo.jpg" class="rounded-circle mx-auto d-block" width="100%" height="200rem" alt="logo">
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="{$action}">
            <h1>{$header}</h1>
        </a>

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav  ml-auto mt-2 mt-lg-0">
                <li class="nav-item {if !$op}active{/if}">
                    <a class="nav-link" href="{$action}">{$navbar.home} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {if $op=='post_form'}active{/if}">
                    <a class="nav-link" href="{$action}?op=post_form">{$navbar.post}</a>
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
                <li>今天到期：{$dueToday}</li>
                <li>逾期：2</li>
            </ul>
        </div>
    </div>
    {if $op=="post_form"}
      {include file="post_form.tpl"}
    {elseif $op=="show_one"}
      {include file="show_one.tpl"}
    {else}
        {if $content}
          <h2>待辦清單<small>（共 {$total} 個事項）</small></h2>
          <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover table-sm">
                <thead  class="thead-dark">
                  <tr>
                      <th><i class="fas fa-check"></i></th>
                      <th>事項</th>
                      <th>到期日</th>
                      <th>優先順序</th>
                      <th>指派對象</th>
                      <th>建立時間</th>
                      <th>功能</th>
                  </tr>
                </thead>
                <tbody>
                {foreach $content as $data}
                  <tr>
                      <td>
                        {if $data.done}
                            <span class="badge badge-success text-center"><i class="fas fa-check"></i></span>
                        {else}
                            <span class="badge badge-danger text-center"><i class="fas fa-times-circle"></i></span>
                        {/if}
                      </td>
                      <td><a href="{$action}?sn={$data.sn}">{$data.title}</a></td>
                      <td>{$data.end}</td>
                      <td>{$data.priority}</td>
                      <td>{$data.assign}</td>
                      <td>{$data.create_time}</td>
                      <td>
                        <a href="{$action}?op=delete&sn={$data.sn}" class="btn btn-danger"  title="刪除"><i class="fas fa-times-circle"></i> 刪除</a>
                        <a href="{$action}?op=post_form&sn={$data.sn}" class="btn btn-warning" title="編輯"><i class="fas fa-pencil-alt"></i> 編輯</a>
                      </td>
                  </tr>
                {/foreach}
                </tbody>
              </table>
          </div>
          {$bar}
        {else}
          <div class="jumbotron text-center">
            <a class="btn btn-info" href="{$action}?op=post_form" role="button">新增待辦事項</a>
          </div>
        {/if}
    {/if}

</body>
</html>