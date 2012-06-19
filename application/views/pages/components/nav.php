<section id="navs">
  <div class="page-header">
    <h1>Nav, tabs, and pills <small>Highly customizable list-style navigation</small></h1>
  </div>

  <h2>Lightweight defaults <small>Same object, different function calls</small></h2>
  <div class="row">
    <div class="span4">
      <h3>Component alignment</h3>
      <p>To align nav links, use the <code>pull-left</code> or <code>pull-right</code>. Example: <code>array('label'=>'Profile', 'url'=>'#', 'align' => 'pull-right'),</code>.</p>
    </div>
    <div class="span4">
      <h3>Basic tabs</h3>
      <p>Pass an array of links to <code>Navigation::tabs</code>:</p>
      <?php 
        echo Navigation::tabs(
            array(
                  array('label'=>'Home', 'url' => '#', 'active' => true),
                  array('label'=>'Profile', 'url'=>'#'),
                  array('label'=>'Messages', 'url'=>'#'),
            )
          );
      ?>
<pre class="prettyprint linenums">
echo Navigation::tabs(
  array(
    array('label'=>'Home', 'url' => '#', 
        'active' => true),
    array('label'=>'Profile', 'url'=>'#'),
    array('label'=>'Messages', 'url'=>'#'),
  )
);
</pre>
    </div>
    <div class="span4">
      <h3>Basic pills</h3>
      <p>Pass an array of links to <code>Navigation::pills</code>:</p>
      <?php 
        echo Navigation::pills(
            array(
                  array('label'=>'Home', 'url' => '#', 'active' => true),
                  array('label'=>'Profile', 'url'=>'#'),
                  array('label'=>'Messages', 'url'=>'#'),
            )
          );
      ?>
<pre class="prettyprint linenums">
echo Navigation::pills(
  array(
    array('label'=>'Home', 'url' => '#', 
        'active' => true),
    array('label'=>'Profile', 'url'=>'#'),
    array('label'=>'Messages', 'url'=>'#'),
  )
);
</pre>
    </div>
  </div>

  <h2>Stackable <small>Make tabs or pills vertical</small></h2>
  <div class="row">
    <div class="span4">
      <h3>How to stack 'em</h3>
      <p>As tabs and pills are horizontal by default. Pass a <code>true</code> as the second paramenter, to make them appear vertically stacked.</p>
    </div>
    <div class="span4">
      <h3>Stacked tabs</h3>
      <p>Same tabs example, the true parameter creates stacked tabs.</p>
      <?php 
        echo Navigation::tabs(
            array(
                  array('label'=>'Home', 'url' => '#', 'active' => true),
                  array('label'=>'Profile', 'url'=>'#'),
                  array('label'=>'Messages', 'url'=>'#'),
            ), true
        );
     ?>
<pre class="prettyprint linenums">
echo Navigation::tabs(
  array(
    array('label'=>'Home', 'url' => '#', 
        'active' => true),
    array('label'=>'Profile', 'url'=>'#'),
    array('label'=>'Messages', 'url'=>'#'),
  ), true
);
</pre>
    </div>
    <div class="span4">
      <h3>Stacked pills</h3>
      <p>Same pills example, the true parameter creates stacked pills.</p>
      <?php 
        echo Navigation::pills(
            array(
                  array('label'=>'Home', 'url' => '#', 'active' => true),
                  array('label'=>'Profile', 'url'=>'#'),
                  array('label'=>'Messages', 'url'=>'#'),
            ), true
        );
     ?>
<pre class="prettyprint linenums">
echo Navigation::pills(
  array(
    array('label'=>'Home', 'url' => '#', 
        'active' => true),
    array('label'=>'Profile', 'url'=>'#'),
    array('label'=>'Messages', 'url'=>'#'),
  ), true
);
</pre>
    </div>
  </div>

  <h2>Dropdowns <small>For advanced nav components</small></h2>
  <div class="row">
    <div class="span4">
      <h3>Rich menus made easy</h3>
      <p>Dropdown menus in Bootstraper tabs and pills are super easy. Just add a 
        nested array of links as the <code>items</code> element, see the example.</p>
      <p>The opening and closing of the dropdowns are dynamicly handled by Bootstrap's javascript. 
        You don't need to add any custom javascript on your site for this functionality.</p>
      <p><a class="btn" href="http://twitter.github.com/bootstrap/components.html#navs">Info on Dropdowns</a></p>
    </div>
    <div class="span4">
      <h3>Tabs with dropdowns</h3>
      <?php 
        echo Navigation::tabs(
            array(
                array('label'=>'Home', 'url' => '#', 'active' => true),
                array('label'=>'Help', 'url'=>'#'),
                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                  )
                )
            )
          );
      ?>
<pre class="prettyprint linenums">
echo Navigation::tabs(
  array(
    array('label'=>'Home', 'url' => '#', 
      'active' => true),
    array('label'=>'Help', 'url'=>'#'),
    array('label'=>'Messages', 'url'=>'#'),
    array('label'=>'Dropdown', 'url'=>'#', 
      'items'=>array(
      array(
        'label'=>'Action', 
        'url'=>'#'
      ),
      array(
        'label'=>'Another action', 
        'url'=>'#'
      ),
      array(
        'label'=>'Something else here', 
        'url'=>'#'
      ),
      '---',
      array(
        'label'=>'Separated link', 
        'url'=>'#'
      ),
    )
  )
);
</pre>
    </div>
    <div class="span4">
      <h3>Pills with dropdowns</h3>
      <?php 
        echo Navigation::pills(
            array(
                array('label'=>'Home', 'url' => '#', 'active' => true),
                array('label'=>'Help', 'url'=>'#'),
                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                  )
                )
            )
          );
      ?>
<pre class="prettyprint linenums">
echo Navigation::pills(
  array(
    array('label'=>'Home', 'url' => '#', 
      'active' => true),
    array('label'=>'Help', 'url'=>'#'),
    array('label'=>'Messages', 'url'=>'#'),
    array('label'=>'Dropdown', 'url'=>'#', 
      'items'=>array(
      array(
        'label'=>'Action', 
        'url'=>'#'
      ),
      array(
        'label'=>'Another action', 
        'url'=>'#'
      ),
      array(
        'label'=>'Something else here', 
        'url'=>'#'
      ),
      '---',
      array(
        'label'=>'Separated link', 
        'url'=>'#'
      ),
    )
  )
);
</pre>
</div>
  </div>

  <h2>Nav lists <small>Build simple stacked navs, great for sidebars</small></h2>
  <div class="row">
    <div class="span4">
      <h3>Application-style navigation</h3>
      <p>Lists are great for menus. Structurally, they're built the same as tabs and pills.</p>
      <hr>
      <h4>With Headers</h4>
      <p>To make a list header include an array element of <code>header</code> like: <code>array('header'=>'List header')</code></p>
      <hr>
      <h4>With icons</h4>
      <p>You can easily add icons to your list by including <code>icon</code> like <code>array('label'=>'Profile', 'url'=>'#', 'icon' => 'user')</code></p>
      <p><a class="btn" href="http://twitter.github.com/bootstrap/base-css.html#icons">Icon List</a></p>
      <h4>Horizontal dividers</h4>
      <p>If you want a horizontal divider don't use an array and just include <code>---</code></p>
    </div>
    <div class="span4">
      <h3>Example nav list</h3>
      <p>Pass an array of links to <code>Navigation::lists</code>:</p>
      <div class="well" style="padding: 8px 0;">
        <?php 
          echo Navigation::lists(
              array(
                  array('header'=>'List header'),
                  array('label'=>'Home', 'url' => '#', 'active' => true),
                  array('label'=>'Library', 'url'=>'#'),
                  array('label'=>'Applications', 'url'=>'#'),
                  array('header'=>'Another list header'),
                  array('label'=>'Profile', 'url'=>'#'),
                  array('label'=>'Settings', 'url'=>'#'),
                  '---',
                  array('label'=>'Help', 'url'=>'#'),
              )
            );
        ?>
      </div> <!-- /well -->
<pre class="prettyprint linenums">
echo Navigation::lists(
  array(
    array('header'=>'List header'),
    array('label'=>'Home', 'url' => '#', 
      'active' => true),
    array('label'=>'Library', 'url'=>'#'),
    array('label'=>'Applications', 
      'url'=>'#'),
    array('header'=>'Another list header'),
    array('label'=>'Profile', 'url'=>'#'),
    array('label'=>'Settings', 'url'=>'#'),
    '---',
    array('label'=>'Help', 'url'=>'#'),
  )
);
</pre>
</div>
    <div class="span4">
      <h3>Example with icons</h3>
      <p>Same example, but added an icon attribute to link item.</p>
      <div class="well" style="padding: 8px 0;">
        <?php 
          echo Navigation::lists(
              array(
                  array('header'=>'List header'),
                  array('label'=>'Home', 'url' => '#', 'active' => true, 'icon' => 'home', 'attributes' => 'icon-white'),
                  array('label'=>'Library', 'url'=>'#', 'icon' => 'book'),
                  array('label'=>'Applications', 'url'=>'#', 'icon' => 'pencil'),
                  array('header'=>'Another list header'),
                  array('label'=>'Profile', 'url'=>'#', 'icon' => 'user'),
                  array('label'=>'Settings', 'url'=>'#', 'icon' => 'cog'),
                  '---',
                  array('label'=>'Help', 'url'=>'#', 'icon' => 'flag'),
              )
            );
        ?>
      </div> <!-- /well -->
<pre class="prettyprint linenums">
echo Navigation::lists(
  array(
    array('header'=>'List header'),
    array('label'=>'Home', 'url' => '#', 
      'active' => true, 'icon' => 'home', 
      'attributes' => 'icon-white'),
    array('label'=>'Library', 'url'=>'#', 
      'icon' => 'book'),
    array('label'=>'Applications', 
      'url'=>'#', 
      'icon' => 'pencil'),
    array('header'=>'Another list header'),
    array('label'=>'Profile', 'url'=>'#', 
      'icon' => 'user'),
    array('label'=>'Settings', 'url'=>'#', 
      'icon' => 'cog'),
    '---',
    array('label'=>'Help', 'url'=>'#', 
      'icon' => 'flag'),
  )
);
</pre>
</div>
  </div>


  <h2>Tabbable nav <small>Bring tabs to life via javascript</small></h2>
  <div class="row">
    <div class="span4">
      <h3>What's included</h3>
      <p>Bootstraper has four styles: top (default), right, bottom, and left.</p>
      <p>You can change between them easily by adding _right, _bottom, or _left to the function call.</p>
      <hr>
      <p>You can use <code>Tabbable::tabs</code> or <code>Tabbable::pills</code> if you want pill style tabs.</p>
      <hr>
      <h3>JavaScript</h3>
      <p>The changing of tabs is dynamicly handled by Bootstrap's javascript. 
        You don't need to add any custom javascript on your site for this functionality. 
        Want more details about Bootstrap Tabs click the button below.</p>
      <p><a class="btn" href="http://twitter.github.com/bootstrap/components.html#navs">More Info</a></p>
    </div>
    <div class="span8">
      <h3>Tabbable example</h3>
      <p>Pass an array of links with a content attribute to <code>Tabbable::tabs</code> to create a tab section.</p>

<?php
//Add drop downs
// Add 'align' => 'pull-right'

  echo Tabbable::tabs(
      array(
                array('label'=>'Section 1', 'active' => true, 'content' => "<p>I'm in Section 1.</p>"),
                array('label'=>'Section 2', 'content' => "<p>Howdy, I'm in Section 2.</p>"),
                array('label'=>'Section 3', 'content' => "<p>What up girl, this is Section 3.</p>"),
            ), false, array('style' => 'margin-bottom: 18px;'), array(), array('style' => "padding-bottom: 9px; border-bottom: 1px solid #ddd;"));
      ?>

      <h3>Straightforward</h3>
      <p>Like the other menus we just add a content element to each array item.</p>
<pre class="prettyprint linenums">
echo Tabbable::tabs(
  array(
    array('label'=>'Section 1', 'active' => true, 'content' => "&lt;p&gt;I'm in Section 1.&lt;/p&gt;"),
    array('label'=>'Section 2', 'content' => "&lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;"),
    array('label'=>'Section 3', 'content' => "&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;"),
  )
);
</pre>
</div>
  </div>


  <h3>Tabbable in any direction</h3>
  <div class="row">
    <div class="span4">
      <h4>Tabs on the bottom</h4>
      <p>You can put the tabs on the bottom by calling <code>Tabbable::tabs_below</code> with the same input array.</p>

      <?php
  echo Tabbable::tabs_below(
      array(
                array('label'=>'Section 1', 'active' => true, 'content' => "<p>I'm in Section 1.</p>"),
                array('label'=>'Section 2', 'content' => "<p>Howdy, I'm in Section 2.</p>"),
                array('label'=>'Section 3', 'content' => "<p>What up girl, this is Section 3.</p>"),
            ));
      ?>

<pre class="prettyprint linenums" style="margin-top: 11px;">
echo Tabbable::tabs_below(
array(
    array('label'=>'Section 1', 
      'active' => true, 
      'content' => "&lt;p&gt;I'm in Section 1.&lt;/p&gt;"),
    array('label'=>'Section 2', 
      'content' => "&lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;"),
    array('label'=>'Section 3', 
      'content' => "&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;"),
  )
);
</pre>
</div>
    <div class="span4">
      <h4>Tabs on the left</h4>
      <p>You can left align the tabs by calling <code>Tabbable::tabs_left</code> with the same input array.</p>
      <?php
  echo Tabbable::tabs_left(
      array(
                array('label'=>'Section 1', 'active' => true, 'content' => "<p>I'm in Section 1.</p>"),
                array('label'=>'Section 2', 'content' => "<p>Howdy, I'm in Section 2.</p>"),
                array('label'=>'Section 3', 'content' => "<p>What up girl, this is Section 3.</p>"),
            ));
      ?>
<pre class="prettyprint linenums">
echo Tabbable::tabs_left(
array(
    array('label'=>'Section 1', 
      'active' => true, 
      'content' => "&lt;p&gt;I'm in Section 1.&lt;/p&gt;"),
    array('label'=>'Section 2', 
      'content' => "&lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;"),
    array('label'=>'Section 3', 
      'content' => "&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;"),
  )
);
</pre>
</div>
    <div class="span4">
      <h4>Tabs on the right</h4>
      <p>You can left align the tabs by calling <code>Tabbable::tabs_right</code> with the same input array.</p>
      <?php
  echo Tabbable::tabs_right(
      array(
                array('label'=>'Section 1', 'active' => true, 'content' => "<p>I'm in Section 1.</p>"),
                array('label'=>'Section 2', 'content' => "<p>Howdy, I'm in Section 2.</p>"),
                array('label'=>'Section 3', 'content' => "<p>What up girl, this is Section 3.</p>"),
            ));
      ?>
<pre class="prettyprint linenums">
echo Tabbable::tabs_right(
array(
    array('label'=>'Section 1', 
      'active' => true, 
      'content' => "&lt;p&gt;I'm in Section 1.&lt;/p&gt;"),
    array('label'=>'Section 2', 
      'content' => "&lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;"),
    array('label'=>'Section 3', 
      'content' => "&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;"),
  )
);
</pre>
</div>
  </div>

</section>