<div class="navbar navbar-fixed-top navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class = "navbar-brand">MDwikuntobayu</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>{!! link_to(route('root'), "Home") !!}</li>
        <li>{!! link_to(route('profile'), "Profile") !!}</li>
        <li><a href="#" class="article_link">Articles</a></li>
      </ul>
    </div>
  </div>
</div>