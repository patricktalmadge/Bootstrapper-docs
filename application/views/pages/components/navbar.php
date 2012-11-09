<section id="navbar">
  <div class="page-header">
    <h1>Navbar</h1>
  </div>
  <h2>Static navbar example</h2>
  <p>An example of a static (not fixed to the top) navbar with project 
    name, navigation, and search form.</p>
<?php
  echo Navbar::create()
    ->with_brand('Project name', '#')
    ->with_menus(
      Navigation::links(
        array(
          array('Home', '#', true),
          array('Link', '#'),
          array('Link', '#'),
          array('Link', '#'),
          array('Dropdown', '#', false, false,
            array(
              array('Action', '#'),
              array('Another action', '#'),
              array('Something else here', '#'),
              array(Navigation::DIVIDER),
              array(Navigation::HEADER, 'Nav header'),
              array('Separated link', '#'),
              array('One more separated link', '#'),
            )
          )
        )
      )
    )
    ->with_menus(
      '<form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
        </form>'
    )
    ->with_menus(
      Navigation::links(
        array(
          array('Link', '#'),
          array(Navigation::VERTICAL_DIVIDER),
          array('Dropdown', '#', false, false, 
            array(
              array('Action', '#'),
              array('Another action', '#'),
              array('Something else here', '#'),
              array(Navigation::DIVIDER),
              array('Separated link', '#'),
            )
          )
        )
      ),
      array('class' => 'pull-right')
    );
?>

  <div class="row">
    <div class="span12">
      <h3>Navbar create function</h3>
      <p>The Navbar has a simple create function and multiple helper functions.</p>
<pre class="prettyprint linenums">
//Standard create
public static function create($attributes = array(), $type = Navbar::STATIC_BAR)

//Create a black navbar 
public static function inverse($attributes = array(), $type = Navbar::STATIC_BAR)

//Add menus
public function with_menus($menus, $attributes = array())
</pre>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <h3>Example</h3>
<pre class="prettyprint linenums">
echo Navbar::create()
    ->with_brand('Project name', '#')
    ->with_menus(
      Navigation::links(
        array(
          array('Home', '#', true),
          array('Link', '#'),
          array('Link', '#'),
          array('Link', '#'),
          array('Dropdown', '#', false, false,
            array(
              array('Action', '#'),
              array('Another action', '#'),
              array('Something else here', '#'),
              array(Navigation::DIVIDER),
              array(Navigation::HEADER, 'Nav header'),
              array('Separated link', '#'),
              array('One more separated link', '#'),
            )
          )
        )
      )
    )
    ->with_menus(
      '&lt;form class="navbar-search pull-left" action=""&gt;
        &lt;input type="text" class="search-query span2" placeholder="Search"&gt;
      &lt;/form&gt;'
    )
    ->with_menus(
      Navigation::links(
        array(
          array('Link', '#'),
          array(Navigation::VERTICAL_DIVIDER),
          array('Dropdown', '#', false, false, 
            array(
              array('Action', '#'),
              array('Another action', '#'),
              array('Something else here', '#'),
              array(Navigation::DIVIDER),
              array('Separated link', '#'),
            )
          )
        )
      ),
      array('class' => 'pull-right')
    );
</pre>
      <h3>Optional responsive variation</h3>
      <p>You can make the Navbar responsive and collapse for smaller screens by 
        calling the collapsible function as a chained method.</p> 
<pre class="prettyprint linenums">
// Make navbar collapsible
public function collapsible()
</pre>
    
    <?php echo Alert::info('<strong>Heads up!</strong> The responsive navbar requires the Bootstrap JS file and the responsive Bootstrap CSS file.', false); ?>

    </div><!-- /.span -->
    <div class="span4">
      <h3>Route detection</h3>
      <p>By default all navigation items will try to auto detect the current page using 
        Laravel's <code>\URL::current()</code> function. You must pass in full links for 
        auto detection to work. You can turn this feature off by passing false to the chainable 
        <code>autoroute(false)</code> function.</p>

      <h3>Brand name</h3>
      <p>Navbar <code>with_brand($brand, $brand_url)</code> creates a simple brand link. 
        Just provide the brand name and url.</p>

      <h3>Fixed navbar</h3>
      <p>The Navbar can be fixed to the top or bottom of the viewport by passing the correct 
        const to the create function.</p>

      <h5>Fixed Top Const</h5>
<pre class="prettyprint linenums">
Navbar::FIX_TOP
</pre>

      <h5>Fixed Bottom Const</h5>
<pre class="prettyprint linenums">
Navbar::FIX_BOTTOM
</pre>

      <p>When you affix the navbar, remember to account for the hidden area underneath. Add 40px or 
        more of padding to the <code>&lt;body&gt;</code>. Be sure to add this after the core 
        Bootstrap CSS and before the optional responsive CSS.</p>

      <h3>Forms in navbar</h3>
      <p>You can provide a string to <code>with_menus($menus, $attributes = array())</code> 
        and it will be output directly in the Navbar. This is perfect for inline forms.</p>
<pre class="prettyprint linenums">
&lt;form class="navbar-form pull-left"&gt;
  &lt;input type="text" class="span2"&gt;
&lt;/form&gt;
</pre>
      <p>For a more customized search form, add <code>.navbar-search</code> to the <code>form</code> and 
        <code>.search-query</code> to the input for specialized styles in the navbar. See the form in
         the large sample above.</p>

      <h3>Nav links</h3>
      <p>Links are created using <code>link($label, $url, $active = false, $disabled = false, $items = null, $icon = null)</code>
       or <code>links($links)</code> which takes an array or arrays in the same order as the link function inputs. 
       <?php echo Label::info('See the sample on the left.'); ?></p>
      
      <h3>Dividers</h3>
      <p>You can easily add vertical dividers by adding <code>Navigation::VERTICAL_DIVIDER</code> as the first element in the link array.</p>
      
      <h3>Component alignment</h3>
      <p>To align a nav, search form, or text, use the <code>.pull-left</code> or <code>.pull-right</code> 
        classes. You can do this by passing in <code>'attributes' => array('class' => 'pull-right')</code> 
        with your link array</p>
      <h3>Adding dropdown menus</h3>
      <p>Adding dropdown menus is simple just add a nested links array to an items element.</p>
    </div><!-- /.span -->
  </div><!-- /.row -->

</section>