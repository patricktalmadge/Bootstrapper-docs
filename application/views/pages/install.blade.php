@layout('templates.main')

@section('content')

<header class="jumbotron subhead">
	<div class="inner">
    	<h1>Install</h1>
		<p class="lead">Installing Bootstraper is very simple, just like all Laravel Bundles!</p>
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
	<p>Run artisan to install bootstraper:</p>
<pre class="prettyprint linenums">
php artisan bundle:install bootstraper
</pre>

	<p>Add the following line to application/bundles.php.</p>
<pre class="prettyprint linenums">
return array(
	'bootstraper' => array('auto' => true),
);
</pre>

	<p>Change <code>Form</code> and <code>Paginator</code> in the application.php config file to:</p>

<pre class="prettyprint linenums">
'Form' 			=> 'Bootstraper\\Form',
'Paginator'		=> 'Bootstraper\\Paginator',
</pre>

	<p>Add the following to the application.php config file:</p>
<pre class="prettyprint linenums">
'Alert' 		=> 'Bootstraper\\Alert',
'Tabbable' 		=> 'Bootstraper\\Tabbable',
'Navigation'	=> 'Bootstraper\\Navigation',
'Progress'		=> 'Bootstraper\\Progress',
'Badges'		=> 'Bootstraper\\Badges',
'Labels'		=> 'Bootstraper\\Labels',
'DropdownButton'=> 'Bootstraper\\DropdownButton',
'SplitDropdownButton'=> 'Bootstraper\\SplitDropdownButton',
'ButtonGroup'	=> 'Bootstraper\\ButtonGroup',
'ButtonToolbar'	=> 'Bootstraper\\ButtonToolbar',
'Navbar'		=> 'Bootstraper\\Navbar',
'Breadcrumbs'	=> 'Bootstraper\\Breadcrumbs',
'Carousel'		=> 'Bootstraper\\Carousel',
'Typeahead'		=> 'Bootstraper\\Typeahead',
'Buttons'		=> 'Bootstraper\\Buttons',
</pre>

	<p>Update <code>laravel\database\query.php</code> to use the Bootstraper Paginator and not the core class by changing the use statement.</p>
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
Asset::container('bootstraper')->styles();
Asset::container('bootstraper')->scripts();
</pre>
</section>


<section id="detailed">
<div class="page-header">
	<h1>Detailed instructions</h1>
</div>
	<h3>Install the bundle</h3>
	<p>Open your terminal and run the following command to install the Bootstraper bundle.</p>
<pre class="prettyprint linenums">
php artisan bundle:install bootstraper
</pre>

	<h3>Auto-load</h3>
	<p>The easiest way to make sure Bootstraper is ready when you need it is to add the following line to application/bundles.php. Review the Laravel documentation if you would rather not auto-load Bootstraper.</p>
<pre class="prettyprint linenums">
return array(
	'bootstraper' => array('auto' => true),
);
</pre>

	<h3>Recommended</h3>
	<p>If you want to use Bootstraper instead of the Laravel core <code>Form</code> and <code>Paginator</code> you will need to 
		update the aliases array in the application.php config file.</p>

<pre class="prettyprint linenums">
'Form' 			=> 'Bootstraper\\Form',
'Paginator'		=> 'Bootstraper\\Paginator',
</pre>

	<p>If you want to use Laravel's excellent Pagination like:</p>
<pre class="prettyprint linenums">
$orders = DB::table('orders')->paginate($per_page);
...
&lt;?php echo $orders->links();?&gl;
</pre>
	<p>Update <code>laravel\database\query.php</code> to use the Bootstraper Paginator and not the core class by changing the use statement.</p>
<pre class="prettyprint linenums">
//Change 
use Laravel\Paginator; 

//To
use Paginator;
</pre>

	<p>This causes the query class to use the aliased version of Paginator.</p> The aliased version of Paginator should already be set to the Bootstraper version in application\config\application.php.</p>

	<h3>Optional</h3>
	<p>If you don't want to make all your Bootstraper calls with the <code>Bootstraper</code> namespace you will need to update the aliases array in the application.php config file.</p>
	<p>Bootstraper extends two core classes <code>Form</code> and <code>Paginator</code> you will want to edit them by changing the namespace like so:</p>


	<p>Adding the following new entries will allow you to make a call like <code>Alert::success("You did it");</code> instead of <code>Bootstraper\Alert::success("You did it");</code></p>
<pre class="prettyprint linenums">
'Alert' 		=> 'Bootstraper\\Alert',
'Tabbable' 		=> 'Bootstraper\\Tabbable',
'Navigation'	=> 'Bootstraper\\Navigation',
'Progress'		=> 'Bootstraper\\Progress',
'Badges'		=> 'Bootstraper\\Badges',
'Labels'		=> 'Bootstraper\\Labels',
'DropdownButton'=> 'Bootstraper\\DropdownButton',
'SplitDropdownButton'=> 'Bootstraper\\SplitDropdownButton',
'ButtonGroup'	=> 'Bootstraper\\ButtonGroup',
'ButtonToolbar'	=> 'Bootstraper\\ButtonToolbar',
'Navbar'		=> 'Bootstraper\\Navbar',
'Breadcrumbs'	=> 'Bootstraper\\Breadcrumbs',
'Carousel'		=> 'Bootstraper\\Carousel',
'Typeahead'		=> 'Bootstraper\\Typeahead',
'Buttons'		=> 'Bootstraper\\Buttons',
</pre>

	<h3>CSS and Javascript</h3>
	<p>Boostraper comes with the latest version of Twitter Bootstrap. Run the following to publish the bundle assets to your public folder.</p>
<pre class="prettyprint linenums">
php artisan bundle:publish
</pre>

	<p>In your view template add the following to include the CSS and Javascript files that come with Bootstraper.</p>
<pre class="prettyprint linenums">
Asset::container('bootstraper')->styles();
Asset::container('bootstraper')->scripts();
</pre>
</section>
@endsection