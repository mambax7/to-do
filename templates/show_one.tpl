<div class="container">
  <div class="jumbotron">
    <h2 class="text-center"><a href="{$action}"><i class="fas fa-reply"></i> {$content.title}</a></h2>

    <div class="alert alert-warning text-right">
      是否完成：
      {if $content.done}
          <span class="badge badge-success text-center"><i class="fas fa-check"></i></span>
      {else}
          <span class="badge badge-danger text-center"><i class="fas fa-times-circle"></i></span>
      {/if}
    </div>

    <div class="row">
        <label class="col-sm-3 text-right">
            描述
        </label>
        <div class="col-sm-9">
            {$content.directions|nl2br}
        </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        到期日
      </label>
      <div class="col-sm-9">
          {$content.end}
      </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        優先順序
      </label>
      <div class="col-sm-9">
          {$content.priority}
      </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        指派對象
      </label>
      <div class="col-sm-9">
          {$content.assign}
      </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        建立時間
      </label>
      <div class="col-sm-9">
          {$content.create_time}
      </div>
    </div>

    <div class="row">
      <label class="col-sm-3 text-right">
        最後更新時間
      </label>
      <div class="col-sm-9">
          {$content.update_time}
      </div>
    </div>

    <div class="text-right">
      <a href="{$action}?op=post_form&sn={$content.sn}" class="btn btn-warning">編輯</a>
      <a href="{$action}" class="btn btn-success">回首頁</a>
  </div>
  </div>
</div>
