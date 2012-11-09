<section id="navs">
  <div class="page-header">
    <h1>Nav, tabs, and pills <small>Highly customizable list-style navigation</small></h1>
  </div>

  <h2>Lightweight defaults <small>Same object, different function calls</small></h2>
  <div class="row">
    <div class="span6">
      <h3>Basic tabs</h3>
      <p>Pass an array of links to <code>Navigation::tabs</code>:</p>
      <?php 
        echo Navigation::tabs(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            )
          );
      ?>
<pre class="prettyprint linenums">
echo Navigation::tabs(
  Navigation::links(
    array(
      array('Home', '#', true),
      array('Profile', '#'),
      array('Messages', '#'),
    )
  )
);
</pre>
    </div>
    <div class="span6">
      <h3>Basic pills</h3>
      <p>Pass an array of links to <code>Navigation::pills</code>:</p>
      <?php 
        echo Navigation::pills(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            )
          );
      ?>
<pre class="prettyprint linenums">
echo Navigation::pills(
  Navigation::links(
    array(
      array('Home', '#', true),
      array('Profile', '#'),
      array('Messages', '#'),
    )
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
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            ), true
        );
     ?>
<pre class="prettyprint linenums">
echo Navigation::tabs(
    Navigation::links(
      array(
        array('Home', '#', true),
        array('Profile', '#'),
        array('Messages', '#'),
      )
    ), true
);
</pre>
    </div>
    <div class="span4">
      <h3>Stacked pills</h3>
      <p>Same pills example, the true parameter creates stacked pills.</p>
      <?php 
        echo Navigation::pills(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            ), true
        );
     ?>
<pre class="prettyprint linenums">
echo Navigation::pills(
    Navigation::links(
      array(
        array('Home', '#', true),
        array('Profile', '#'),
        array('Messages', '#'),
      )
    ), true
);
</pre>
    </div>
  </div>

  <h2>Dropdowns <small>For advanced nav components</small></h2>
  <div class="row">
    <div class="span4">
      <h3>Rich menus made easy</h3>
      <p>Dropdown menus in Bootstrapper tabs and pills are super easy. Just add a 
        nested array of links as the <code>items</code> element, see the example.</p>
      <p>The opening and closing of the dropdowns are dynamicly handled by Bootstrap's javascript. 
        You don't need to add any custom javascript on your site for this functionality.</p>
      <p><a class="btn" href="http://twitter.github.com/bootstrap/components.html#navs">Info on Dropdowns</a></p>
    </div>
    <div class="span4">
      <h3>Tabs with dropdowns</h3>
      <?php 
        echo Navigation::tabs(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Help', '#'),
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
            )
          );
      ?>
<pre class="prettyprint linenums">
echo Navigation::tabs(
  Navigation::links(
    array(
      array('Home', '#', true),
      array('Help', '#'),
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
  )
);
</pre>
    </div>
    <div class="span4">
      <h3>Pills with dropdowns</h3>
      <?php 
        echo Navigation::pills(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Help', '#'),
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
            )
          );
      ?>
<pre class="prettyprint linenums">
echo Navigation::pills(
  Navigation::links(
    array(
      array('Home', '#', true),
      array('Help', '#'),
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
      <p>To make a list header include an array element of <code>header</code> like: <code>array(Navigation::HEADER, 'List header')</code></p>
      <hr>
      <h4>With icons</h4>
      <p>You can easily add icons to your list by passing a 6th element in the array like <code>array('Applications', '#', false, false, null, 'pencil')</code></p>
      <p><a class="btn" href="http://twitter.github.com/bootstrap/base-css.html#icons">Icon List</a></p>
      <h4>Horizontal dividers</h4>
      <p>If you want a horizontal divider don't use an array and just include <code>Navigation::DIVIDER</code></p>
    </div>
    <div class="span4">
      <h3>Example nav list</h3>
      <p>Pass an array of links to <code>Navigation::lists</code>:</p>
      <div class="well" style="padding: 8px 0;">
        <?php 
          echo Navigation::lists(
            Navigation::links(
              array(
                array(Navigation::HEADER, 'List header'),
                array('Home', '#', true),
                array('Library', '#'),
                array('Applications', '#'),
                array(Navigation::HEADER, 'Another list header'),
                array('Profile', '#'),
                array('Settings', '#'),
                array(Navigation::DIVIDER),
                array('Help', '#'),
              )
            )
          );
        ?>
      </div> <!-- /well -->
<pre class="prettyprint linenums">
echo Navigation::lists(
  Navigation::links(
    array(
      array(Navigation::HEADER, 
        'List header'),
      array('Home', '#', true),
      array('Library', '#'),
      array('Applications', '#'),
      array(Navigation::HEADER, 
        'Another list header'),
      array('Profile', '#'),
      array('Settings', '#'),
      array(Navigation::DIVIDER),
      array('Help', '#'),
    )
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
            Navigation::links(
              array(
                array(Navigation::HEADER, 'List header'),
                array('Home', '#', true, false, null, 'home'),
                array('Library', '#', false, false, null, 'book'),
                array('Applications', '#', false, false, null, 'pencil'),
                array(Navigation::HEADER, 'Another list header'),
                array('Profile', '#', false, false, null, 'user'),
                array('Settings', '#', false, false, null, 'cog'),
                array(Navigation::DIVIDER),
                array('Help', '#', false, false, null, 'flag'),
              )
            )
          );
        ?>
      </div> <!-- /well -->
<pre class="prettyprint linenums">
echo Navigation::lists(
  Navigation::links(
    array(
      array(Navigation::HEADER, 
        'List header'),
      array('Home', '#', true, 
        false, null, 'home'),
      array('Library', '#', false, 
        false, null, 'book'),
      array('Applications', '#', 
        false, false, null, 'pencil'),
      array(Navigation::HEADER, 
        'Another list header'),
      array('Profile', '#', false, 
        false, null, 'user'),
      array('Settings', '#', false, 
        false, null, 'cog'),
      array(Navigation::DIVIDER),
      array('Help', '#', false, 
        false, null, 'flag'),
    )
  )
);
</pre>
</div>
  </div>


  <h2>Tabbable nav <small>Bring tabs to life via javascript</small></h2>
  <div class="row">
    <div class="span4">
      <h3>What's included</h3>
      <p>Bootstrapper has four styles: top (default), right, bottom, and left.</p>
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
        Navigation::links(
          array(
            array('Section 1', "<p>I'm in Section 1.</p>", true),
            array('Section 2', "<p>Howdy, I'm in Section 2.</p>"),
            array('Section 3', "<p>What up girl, this is Section 3.</p>"),
          )
        ),
        array('style' => 'margin-bottom: 18px;')
      )->content_attributes(array('style' => "padding-bottom: 9px; border-bottom: 1px solid #ddd;"));
      ?>

      <h3>Straightforward</h3>
      <p>Like the other menus we just add a content element to each array item.</p>
<pre class="prettyprint linenums">
echo Tabbable::tabs(
  Navigation::links(
    array(
      array(
        'Section 1', 
        "&lt;p&gt;I'm in Section 1.&lt;/p&gt;", 
        true
      ),
      array(
        'Section 2', 
        "&lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;"
      ),
      array(
        'Section 3', 
        "&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;"
      ),
    )
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
        Navigation::links(
          array(
            array('Section 1', "<p>I'm in Section 1.</p>", true),
            array('Section 2', "<p>Howdy, I'm in Section 2.</p>"),
            array('Section 3', "<p>What up girl, this is Section 3.</p>"),
          )
        )
      );
  ?>

<pre class="prettyprint linenums" style="margin-top: 11px;">
echo Tabbable::tabs_below(
  Navigation::links(
    array(
      array(
        'Section 1', 
        "&lt;p&gt;I'm in Section 1.&lt;/p&gt;", 
        true
      ),
      array(
        'Section 2', 
        "&lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;"
      ),
      array(
        'Section 3', 
        "&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;"
      ),
    )
  )
);
</pre>
</div>
    <div class="span4">
      <h4>Tabs on the left</h4>
      <p>You can left align the tabs by calling <code>Tabbable::tabs_left</code> with the same input array.</p>
      <?php
  echo Tabbable::tabs_left(
        Navigation::links(
          array(
            array('Section 1', "<p>I'm in Section 1.</p>", true),
            array('Section 2', "<p>Howdy, I'm in Section 2.</p>"),
            array('Section 3', "<p>What up girl, this is Section 3.</p>"),
          )
        )
      );
  ?>
<pre class="prettyprint linenums">
echo Tabbable::tabs_left(
  Navigation::links(
    array(
      array(
        'Section 1', 
        "&lt;p&gt;I'm in Section 1.&lt;/p&gt;", 
        true
      ),
      array(
        'Section 2', 
        "&lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;"
      ),
      array(
        'Section 3', 
        "&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;"
      ),
    )
  )
);
</pre>
</div>
    <div class="span4">
      <h4>Tabs on the right</h4>
      <p>You can left align the tabs by calling <code>Tabbable::tabs_right</code> with the same input array.</p>
      <?php
  echo Tabbable::tabs_right(
        Navigation::links(
          array(
            array('Section 1', "<p>I'm in Section 1.</p>", true),
            array('Section 2', "<p>Howdy, I'm in Section 2.</p>"),
            array('Section 3', "<p>What up girl, this is Section 3.</p>"),
          )
        )
      );
  ?>
<pre class="prettyprint linenums">
echo Tabbable::tabs_right(
  Navigation::links(
    array(
      array(
        'Section 1', 
        "&lt;p&gt;I'm in Section 1.&lt;/p&gt;", 
        true
      ),
      array(
        'Section 2', 
        "&lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;"
      ),
      array(
        'Section 3', 
        "&lt;p&gt;What up girl, this is Section 3.&lt;/p&gt;"
      ),
    )
  )
);
</pre>
</div>
  </div>

</section>