<section id="navbar">
  <div class="page-header">
    <h1>Navbar</h1>
  </div>
  <h2>Static navbar example</h2>
  <p>An example of a static (not fixed to the top) navbar with project 
    name, navigation, and search form.</p>
<?php
echo Navbar::create('Project name', '#',
    array(
        array(
            'attributes' => array(),
            'items' => array(
                array('label'=>'Home', 'url' => '#', 'active' => true),
                array('label'=>'Link', 'url'=>'#'),
                array('label'=>'Link', 'url'=>'#'),
                array('label'=>'Link', 'url'=>'#'),
                array('label'=>'Dropdown', 'url'=>'#', 
                    'items'=>array(
                        array('label'=>'Action', 'url'=>'#'),
                        array('label'=>'Another action', 'url'=>'#'),
                        array('label'=>'Something else here', 'url'=>'#'),
                        array('label'=>'---'),
                        array('label'=> Navigation::HEADER, 'url'=>'Nav header'),
                        array('label'=>'Separated link', 'url'=>'#'),
                        array('label'=>'One more separated link', 'url'=>'#'),
                    )
                )
            )
        ),
        '<form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
        </form>',
        array(
            'attributes' => array('class' => 'pull-right'),
            'items' => array(
                array('label'=>'Link', 'url'=>'#'),
                array('label'=>'|||'),
                array('label'=>'Dropdown', 'url'=>'#', 
                    'items'=>array(
                        array('label'=>'Action', 'url'=>'#'),
                        array('label'=>'Another action', 'url'=>'#'),
                        array('label'=>'Something else here', 'url'=>'#'),
                        array('label'=>'---'),
                        array('label'=>'Separated link', 'url'=>'#'),
                    )
                )
            )
        ),
    )
);
?>

  <div class="row">
    <div class="span12">
      <h3>Navbar create function</h3>
      <p>The Navbar requires a brand, brand_url, and $menu array.</p>
<pre class="prettyprint linenums">
public static function create($brand, $brand_url, $menus, $type = Navbar::STATIC_BAR, $collapsible = false, $attributes = array(), $autoroute = true)
</pre>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <h3>Example</h3>
<pre class="prettyprint linenums">
echo Navbar::create('Project name', '#',
  array(
    array(
      'attributes' => array(),
      'items' => array(
        array('label'=>'Home', 'url' => '#', 'active' => true),
        array('label'=>'Link', 'url'=>'#'),
        array('label'=>'Link', 'url'=>'#'),
        array('label'=>'Link', 'url'=>'#'),
        array('label'=>'Dropdown', 'url'=>'#', 
          'items'=>array(
            array('label'=>'Action', 'url'=>'#'),
            array('label'=>'Another action', 'url'=>'#'),
            array('label'=>'Something else here', 'url'=>'#'),
            '---',
            array('header'=>'Nav header'),
            array('label'=>'Separated link', 'url'=>'#'),
            array('label'=>'One more separated link', 'url'=>'#'),
          )
        )
      )
    ),
    '&lt;form class="navbar-search pull-left" action=""&gt;
        &lt;input type="text" class="search-query span2" placeholder="Search"&gt;
    &lt;/form&gt;',
    array(
      'attributes' => array('class' => 'pull-right'),
      'items' => array(
        array('label'=>'Link', 'url'=>'#'),
        '|||',
        array('label'=>'Dropdown', 'url'=>'#', 
          'items'=>array(
            array('label'=>'Action', 'url'=>'#'),
            array('label'=>'Another action', 'url'=>'#'),
            array('label'=>'Something else here', 'url'=>'#'),
            '---',
            array('label'=>'Separated link', 'url'=>'#'),
          )
        )
      )
    ),
  )
);
</pre>
      <h3>Optional responsive variation</h3>
      <p>You can make the Navbar responsive and collapse for smaller screens by passing true 
        in for the fifth paramenter to the create function.</p> 
<pre class="prettyprint linenums">
Navbar::create('Project Name', '#', array(...), Navbar::FIX_TOP, true);
</pre>
    
    <?php echo Alert::info('<strong>Heads up!</strong> The responsive navbar requires the Bootstrap JS file and the responsive Bootstrap CSS file.', false); ?>

    </div><!-- /.span -->
    <div class="span4">
      <h3>Route detection</h3>
      <p>By default all navigation items will try to auto detect the current page using 
        Laravel's <code>\URL::current()</code> function. You must pass in full links for 
        auto detection to work. You can true this feature off by passing <code>false</code> 
        in for $autoroute.</p>

      <h3>Brand name</h3>
      <p>Navbar creates a simple brand link. Just provide the brand name and url.</p>

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
      <p>You can provide a string in your array and it will be output directly in the Navbar. This 
        is perfect for inline forms.</p>
<pre class="prettyprint linenums">
&lt;form class="navbar-form pull-left"&gt;
  &lt;input type="text" class="span2"&gt;
&lt;/form&gt;
</pre>
      <p>For a more customized search form, add <code>.navbar-search</code> to the <code>form</code> and 
        <code>.search-query</code> to the input for specialized styles in the navbar. See the form in
         the large sample above.</p>

      <h3>Nav links</h3>
      <p>Links are created using the standard Bootstrapper link array. For the NavBar you 
        need to create an array of link arrays. <?php echo Label::info('See the sample on the left.'); ?></p>
      
      <h3>Dividers</h3>
      <p>You can easily add vertical dividers by adding <code>'|||'</code> instead of a link array.</p>
      
      <h3>Component alignment</h3>
      <p>To align a nav, search form, or text, use the <code>.pull-left</code> or <code>.pull-right</code> 
        classes. You can do this by passing in <code>'attributes' => array('class' => 'pull-right')</code> 
        with your link array</p>
      <h3>Adding dropdown menus</h3>
      <p>Adding dropdown menus is simple just add a nested links array to an items element.</p>
    </div><!-- /.span -->
  </div><!-- /.row -->

</section>