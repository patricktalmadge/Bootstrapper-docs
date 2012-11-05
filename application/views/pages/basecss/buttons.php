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
        <td><?php echo Buttons::normal('Default'); ?></td>
        <td><code>public static function nornaml($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Buttons::primary_normal('Primary'); ?></td>
        <td><code>public static function primary_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Buttons::info_normal('Info'); ?></td>
        <td><code>public static function info_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Buttons::success_normal('Success'); ?></td>
        <td><code>public static function success_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Buttons::warning_normal('Warning'); ?></td>
        <td><code>public static function warning_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Buttons::danger_normal('Danger'); ?></td>
        <td><code>public static function danger_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
      <tr>
        <td><?php echo Buttons::inverse_normal('Inverse'); ?></td>
        <td><code>public static function inverse_normal($value, $attributes = array(), $hasDropdown = false)</code></td>
      </tr>
    </tbody>
  </table>

  <div class="row">
    <div class="span6">
      <h3>Multiple sizes</h3>
      <p>Need a different size button? Add <code>large_</code>, <code>small_</code>, or <code>mini_</code> to 
        the standard button function to change the size. Example: <code>Buttons::large_primary_normal('Primary action')</code></p>
      <p>
        <?php echo Buttons::large_primary_normal('Primary action').' '; 
            echo Buttons::large_normal('Action'); ?>
      </p>
      <p>
        <?php echo Buttons::small_primary_normal('Primary action').' '; 
            echo Buttons::small_normal('Action'); ?>
      </p>
      <p>
        <?php echo Buttons::mini_primary_normal('Primary action').' '; 
            echo Buttons::mini_normal('Action'); ?>
      </p>
      <br>
      <h3>Disabled state</h3>
      <p>For disabled buttons, add the <code>disabled_</code> to your button function call. 
        Example: <code>Buttons::large_disabled_primary('Primary button')</code>.</p>
      <p>
      <?php echo Buttons::large_disabled_primary_link('Primary link', '#').' '; 
            echo Buttons::large_disabled_link('Link', '#'); ?>
      </p>
      <p>
        <?php echo Buttons::large_disabled_primary_normal('Primary button').' '; 
            echo Buttons::large_disabled_normal('Button'); ?>
      </p>
    </div>
    <div class="span6">
      <h3>Buttons and Link Buttons</h3>
      <p>All color tyes and sizes work for both standard buttons and link buttons.</p>
<pre class="prettyprint linenums">
//Default link button
echo Buttons::link('Primary link', '#');

//Warning link button
echo Buttons::warning_link('Warning link', '#');

//Mini danger link button
echo Buttons::mini_danger_link('Mini Danger link', '#');

//Large disabled primary color link button
echo Buttons::large_disabled_primary_link('Primary link', '#');
</pre>
    </div>
  </div>
</section>