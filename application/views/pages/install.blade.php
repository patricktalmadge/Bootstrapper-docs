@layout('templates.main')

@section('content')

<header class="jumbotron subhead">
	<div class="inner">
    	<h1>Install</h1>
		<p class="lead">Installing Bootstrapper is very simple, just like all Laravel Bundles!</p>
	</div>
	<div class="subnav">
    <?php 
        echo Navigation::pills(
            array(
                array('label'=>'Quick', 'url'=>'#quick'),
                array('label'=>'Detailed', 'url'=>'#detailed'),
            )
        );
      ?>
    </div>
</header>

<section id="quick">
<div class="page-header">
	<h1>Quick instructions</h1>
</div>
	<p>Run artisan to install bootstrapper:</p>
<pre class="prettyprint linenums">
php artisan bundle:install bootstrapper
</pre>

	<p>Add the following line to application/bundles.php.</p>
<pre class="prettyprint linenums">
return array(
	'bootstrapper' => array('auto' => true),
);
</pre>

	<p>Change <code>Form</code> and <code>Paginator</code> in the application.php config file to:</p>

<pre class="prettyprint linenums">
'Form' 			=> 'Bootstrapper\\Form',
'Paginator'		=> 'Bootstrapper\\Paginator',
</pre>

	<p>Add the following to the application.php config file:</p>
<pre class="prettyprint linenums">
'Alert'                 => 'Bootstrapper\\Alert',
'Badges'                => 'Bootstrapper\\Badges',
'Breadcrumbs'           => 'Bootstrapper\\Breadcrumbs',
'Buttons'               => 'Bootstrapper\\Buttons',
'ButtonGroup'           => 'Bootstrapper\\ButtonGroup',
'ButtonToolbar'         => 'Bootstrapper\\ButtonToolbar',
'Carousel'              => 'Bootstrapper\\Carousel',
'DropdownButton'        => 'Bootstrapper\\DropdownButton',
'Helpers'               => 'Bootstrapper\\Helpers',
'Icons'                 => 'Bootstrapper\\Icons',
'Labels'                => 'Bootstrapper\\Labels',
'Navbar'                => 'Bootstrapper\\Navbar',
'Navigation'            => 'Bootstrapper\\Navigation',
'Progress'	            => 'Bootstrapper\\Progress',
'SplitDropdownButton'   => 'Bootstrapper\\SplitDropdownButton',
'Tabbable'              => 'Bootstrapper\\Tabbable',
'Typeahead'             => 'Bootstrapper\\Typeahead', 
</pre>

	<p>Update <code>laravel\database\query.php</code> to use the Bootstrapper Paginator and not the core class by changing the use statement.</p>
<pre class="prettyprint linenums">
//Change 
use Laravel\Paginator; 

//To
use Paginator;
</pre>

	<p>Publish the bundle assets to your public folder.</p>
<pre class="prettyprint linenums">
php artisan bundle:publish
</pre>

	<p>Add the following to your template view file to include the Twitter Bootstrap CSS and Javascript.</p>
<pre class="prettyprint linenums">
Asset::container('bootstrapper')->styles();
Asset::container('bootstrapper')->scripts();
</pre>
</section>


<section id="detailed">
<div class="page-header">
	<h1>Detailed instructions</h1>
</div>
	<h3>Install the bundle</h3>
	<p>Open your terminal and run the following command to install the Bootstrapper bundle.</p>
<pre class="prettyprint linenums">
php artisan bundle:install bootstrapper
</pre>

	<h3>Auto-load</h3>
	<p>The easiest way to make sure Bootstrapper is ready when you need it is to add the following line to application/bundles.php. Review the Laravel documentation if you would rather not auto-load Bootstrapper.</p>
<pre class="prettyprint linenums">
return array(
	'bootstrapper' => array('auto' => true),
);
</pre>

	<h3>Recommended</h3>
	<p>If you want to use Bootstrapper instead of the Laravel core <code>Form</code> and <code>Paginator</code> you will need to 
		update the aliases array in the application.php config file.</p>

<pre class="prettyprint linenums">
'Form' 			=> 'Bootstrapper\\Form',
'Paginator'		=> 'Bootstrapper\\Paginator',
</pre>

	<p>If you want to use Laravel's excellent Pagination like:</p>
<pre class="prettyprint linenums">
$orders = DB::table('orders')->paginate($per_page);
...
&lt;?php echo $orders->links();?&gl;
</pre>
	<p>Update <code>laravel\database\query.php</code> to use the Bootstrapper Paginator and not the core class by changing the use statement.</p>
<pre class="prettyprint linenums">
//Change 
use Laravel\Paginator; 

//To
use Paginator;
</pre>

	<p>This causes the query class to use the aliased version of Paginator.</p> The aliased version of Paginator should already be set to the Bootstrapper version in application\config\application.php.</p>

	<h3>Optional</h3>
	<p>If you don't want to make all your Bootstrapper calls with the <code>Bootstrapper</code> namespace you will need to update the aliases array in the application.php config file.</p>
	<p>Bootstrapper extends two core classes <code>Form</code> and <code>Paginator</code> you will want to edit them by changing the namespace like so:</p>


	<p>Adding the following new entries will allow you to make a call like <code>Alert::success("You did it");</code> instead of <code>Bootstrapper\Alert::success("You did it");</code></p>
<pre class="prettyprint linenums">
'Alert'                 => 'Bootstrapper\\Alert',
'Badges'                => 'Bootstrapper\\Badges',
'Breadcrumbs'           => 'Bootstrapper\\Breadcrumbs',
'Buttons'               => 'Bootstrapper\\Buttons',
'ButtonGroup'           => 'Bootstrapper\\ButtonGroup',
'ButtonToolbar'         => 'Bootstrapper\\ButtonToolbar',
'Carousel'              => 'Bootstrapper\\Carousel',
'DropdownButton'        => 'Bootstrapper\\DropdownButton',
'Helpers'               => 'Bootstrapper\\Helpers',
'Icons'                 => 'Bootstrapper\\Icons',
'Labels'                => 'Bootstrapper\\Labels',
'Navbar'                => 'Bootstrapper\\Navbar',
'Navigation'            => 'Bootstrapper\\Navigation',
'Progress'	            => 'Bootstrapper\\Progress',
'SplitDropdownButton'   => 'Bootstrapper\\SplitDropdownButton',
'Tabbable'              => 'Bootstrapper\\Tabbable',
'Typeahead'             => 'Bootstrapper\\Typeahead', 
</pre>

	<h3>CSS and Javascript</h3>
	<p>Boostraper comes with the latest version of Twitter Bootstrap. Run the following to publish the bundle assets to your public folder.</p>
<pre class="prettyprint linenums">
php artisan bundle:publish
</pre>

	<p>In your view template add the following to include the CSS and Javascript files that come with Bootstrapper.</p>
<pre class="prettyprint linenums">
Asset::container('bootstrapper')->styles();
Asset::container('bootstrapper')->scripts();
</pre>
</section>
@endsection