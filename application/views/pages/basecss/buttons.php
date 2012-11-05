<section id="buttons">
  <div class="page-header">
    <h1>Buttons</h1>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Button</th>
        <th>Function</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo Button::normal('Default'); ?></td>
        <td><code>public static function nornaml($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Button::primary_normal('Primary'); ?></td>
        <td><code>public static function primary_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Button::info_normal('Info'); ?></td>
        <td><code>public static function info_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Button::success_normal('Success'); ?></td>
        <td><code>public static function success_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Button::warning_normal('Warning'); ?></td>
        <td><code>public static function warning_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Button::danger_normal('Danger'); ?></td>
        <td><code>public static function danger_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Button::inverse_normal('Inverse'); ?></td>
        <td><code>public static function inverse_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Button::link('#', 'Link')->deemphasize(); ?></td>
        <td><code>public static function link($url, $value, $attributes = array(), $hasDropdown = false)->deemphasize()</code></td>
      </tr>
    </tbody>
  </table>

  <div class="row">
    <div class="span6">
      <h3>Multiple sizes</h3>
      <p>Need a different size button? Add <code>large_</code>, <code>small_</code>, or <code>mini_</code> to 
        the standard button function to change the size. Example: <code>Button::large_primary_normal('Primary action')</code></p>
      <p>
        <?php echo Button::large_primary_normal('Primary action'); ?>
        <?php echo Button::large_normal('Action'); ?>
      </p>
      <p>
        <?php echo Button::small_primary_normal('Primary action'); ?>
        <?php echo Button::small_normal('Action'); ?>
      </p>
      <p>
        <?php echo Button::mini_primary_normal('Primary action'); ?> 
        <?php echo Button::mini_normal('Action'); ?>
      </p>
      <br>
      <h3>Disabled state</h3>
      <p>For disabled buttons, add the <code>disabled_</code> to your button function call. 
        Example: <code>Button::large_disabled_primary('Primary button')</code>.</p>
      <p>
        <?php echo Button::large_disabled_primary_link('#', 'Primary link'); ?> 
        <?php echo Button::large_disabled_link('#', 'Link'); ?>
      </p>
      <p>
        <?php echo Button::large_disabled_primary_normal('Primary button'); ?> 
        <?php echo Button::large_disabled_normal('Button'); ?>
      </p>
    </div>
    <div class="span6">
      <h3>Buttons and Link Buttons</h3>
      <p>All color tyes and sizes work for both standard buttons and link buttons.</p>
<pre class="prettyprint linenums">
//Default link button
echo Button::link('#', 'Primary link');

//Warning link button
echo Button::warning_link('#', 'Warning link');

//Mini danger link button
echo Button::mini_danger_link('#', 'Mini Danger link');

//Large disabled primary color link button
echo Button::large_disabled_primary_link('#', 'Primary link');
</pre>

      <h3>Block Buttons</h3>
      <div class="well">
        <?php echo Button::large_primary_normal('Block level button')->block(); ?>
        <?php echo Button::large_normal('Block level button')->block(); ?>
      </div>
<pre class="prettyprint linenums">
//Block buttons
echo Button::large_primary_normal('Block level button')->block();
echo Button::large_normal('Block level button')->block();
</pre>
    </div>
  </div>
</section>