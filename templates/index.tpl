<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome_css/all.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>{$title}</title>
</head>
<body>
  <div class="container">
    <img src="images/logo.jpg" class="rounded-circle mx-auto d-block" width="100%" height="200rem" alt="logo">
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <h1>{$header}</h1>
        </a>

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav  ml-auto mt-2 mt-lg-0">
<li class="nav-item active">
    <a class="nav-link" href="#">{$navbar.home} <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="post.html">{$navbar.post}</a>
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
          {foreach $content as $c}
            <tr>
              <td>{$c.directions}</td>
              <td>{$c.end}</td>
            </tr>
          {/foreach}
          <!-- 法二 -->
          <tr>
            <td>{$content.1.directions}</td>
            <td>{$content.1.end}</td>
          </tr>
          <tr>
            <td>{$content.2.directions}</td>
            <td>{$content.2.end}</td>
          </tr>
      </tbody>
    </table>
</div>

</body>
</html>