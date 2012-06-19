
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laravel Bootstrapper By Patrick Talmadge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    {{ Asset::container('bootstrapper')->styles() }}

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    {{ HTML::style('css/prettify.css') }}
    {{ HTML::style('css/app.css') }}
</head>

  <body data-spy="scroll" data-target=".subnav" data-offset="50">

    <?php echo Navbar::create('Bootstrapper', '#', 
      array(
        array(
            'items' => array(
                array('label'=>'Home', 'url' => URL::to_route('home')),
                array('label'=>'Install', 'url' => URL::to_route('install')),
                array('label'=>'Base CSS', 'url' => URL::to_route('basecss')),
                array('label'=>'Components', 'url' => URL::to_route('components')),
                array('label'=>'Extras', 'url' => URL::to_route('extras')),
            )
        ),
      ), Navbar::FIX_TOP, true); ?>

    <div class="container">

		@yield('content')

      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Created by Patrick Talmadge <a href="http://twitter.com/patricktalmadge" target="_blank">@patricktalmadge</a>. Bundle for <a href="http://laravel.com/">Laravel</a> to output <a href="http://twitter.github.com/bootstrap">Twitter Bootstrap</a> markup. </p>
        <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>. Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      </footer>
    </div>

    {{ HTML::script('js/prettify.js') }}
    {{ Asset::container('bootstrapper')->scripts() }}
    {{ HTML::script('js/app.js') }}
    
  </body>
</html>
