@layout('templates.main')

@section('content')

<header class="jumbotron masthead">
  <div class="inner">
    <h1>Bootstrapper for Laravel</h1>
    <p>This site uses a design similar to <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> to allow you to refer back and forth between the two sites if needed.</p>

    <p>View the <?php echo HTML::link('install', 'install docs'); ?> to enable Bootstrapper in your Laravel project.</p>

    <p class="download-info">
      <a href="https://github.com/patricktalmadge/bootstrapper" class="btn btn-primary btn-large">View project on GitHub</a>
      <a href="http://bundles.laravel.com/bundle/bootstrapper" class="btn btn-large">View on Laravel</a>
    </p>
  </div>



  <div class="bs-links">
    <ul class="quick-links">
<!--      <li>
        <iframe class="github-btn" src="http://markdotto.github.com/github-buttons/github-btn.html?user=patricktalmadge&amp;repo=bootstrapper&amp;type=watch&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="112px" height="20px"></iframe>
      </li>
      <li>
        <iframe class="github-btn" src="http://markdotto.github.com/github-buttons/github-btn.html?user=patricktalmadge&amp;repo=bootstrapper&amp;type=fork&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="98px" height="20px"></iframe>
      </li> -->
      <li class="follow-btn">
        <a href="https://twitter.com/patricktalmadge" class="twitter-follow-button" data-show-count="false">Follow @patricktalmadge</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </li>
      <li class="tweet-btn">
      <a href="https://twitter.com/share" class="twitter-share-button" data-via="patricktalmadge" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </li>
    </ul>
  </div>
</header>

@endsection