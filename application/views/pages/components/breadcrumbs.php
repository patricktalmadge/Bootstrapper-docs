<section id="breadcrumbs">
  <div class="page-header">
    <h1>Breadcrumbs <small></small></h1>
  </div>
  <div class="row">
    <div class="span12">
      <h3>Breadcrumbs create function</h3>
      <p>The Breadcrumbs requires an array of links. Pass in an associative array of <code>label => url</code>. Leave out the url for the active item.</p>
<pre class="prettyprint linenums">
public static function create($links, $attributes = array())
</pre>
    </div>
  </div>

  <div class="row">
    <div class="span6">
      <h3>Examples</h3>
      <p>A single example shown as it might be displayed across multiple pages.</p>

      <?php echo Breadcrumb::create(array('Home')); ?>

      <?php echo Breadcrumb::create(array('Home' => '#', 'Library')); ?>

      <?php echo Breadcrumb::create(array('Home' => '#', 'Library' => '#', 'Data')); ?>
    </div>
    <div class="span6">
      <h3>Markup</h3>
<pre class="prettyprint linenums">
echo Breadcrumb::create(array('Home'));
echo Breadcrumb::create(array('Home' => '#', 'Library'));
echo Breadcrumb::create(array('Home' => '#', 'Library' => '#', 'Data'));
</pre>
</div>
  </div>

</section>