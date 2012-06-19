@layout('templates.main')

@section('content')

<header class="jumbotron masthead">
  <div class="inner">
    <h1>Bootstraper bundle for Laravel</h1>
    <p>Simple and flexible Laravel bundle so you can harness the power of Twitter Bootstrap.</p>
    <p class="download-info">
      <a href="https://github.com/twitter/bootstrap/" class="btn btn-primary btn-large" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'GitHub Project', 'View project on GitHub']);">View project on GitHub</a>
      <a href="assets/bootstrap.zip" class="btn btn-large" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Download', 'Download 2.0.4']);">Download Bootstrap <small>(v2.0.4)</small></a>
    </p>
  </div>

  <div class="bs-links">
    <ul class="quick-links">
      <li><a href="./upgrading.html">Upgrading from 1.4</a></li>
      <li><a href="https://github.com/twitter/bootstrap/zipball/master">Download with docs</a></li>
      <li><a href="http://blog.getbootstrap.com">Read the blog</a></li>
      <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Submit issues</a></li>
      <li><a href="https://github.com/twitter/bootstrap/wiki">Roadmap and changelog</a></li>
    </ul>
    <ul class="quick-links">
      <li>
        <iframe class="github-btn" src="http://markdotto.github.com/github-buttons/github-btn.html?user=twitter&amp;repo=bootstrap&amp;type=watch&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="112px" height="20px"></iframe>
      </li>
      <li>
        <iframe class="github-btn" src="http://markdotto.github.com/github-buttons/github-btn.html?user=twitter&amp;repo=bootstrap&amp;type=fork&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" width="98px" height="20px"></iframe>
      </li>
      <li class="follow-btn">
        <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.1338995330.html#_=1339738830176&amp;id=twitter-widget-2&amp;lang=en&amp;screen_name=twbootstrap&amp;show_count=true&amp;show_screen_name=true&amp;size=m" class="twitter-follow-button" style="width: 236px; height: 20px; " title="Twitter Follow Button"></iframe>
      </li>
      <li class="tweet-btn">
        <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1338995330.html#_=1339738830171&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Ftwitter.github.com%2Fbootstrap%2Findex.html&amp;related=mdo%3ACreator%20of%20Twitter%20Bootstrap&amp;size=m&amp;text=Twitter%20Bootstrap&amp;url=http%3A%2F%2Ftwitter.github.com%2Fbootstrap%2F&amp;via=twbootstrap" class="twitter-share-button twitter-count-horizontal" style="width: 107px; height: 20px; " title="Twitter Tweet Button"></iframe>
      </li>
    </ul>
  </div>
</header>

@endsection