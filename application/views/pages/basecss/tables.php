<section id="tables">
    <div class="page-header">
        <h1>Tables</h1>
    </div>

    <div class="row">
        <div class="span6">
            <h3>Basic Table</h3>
            <?php
                $body = array(
                    array('id' => '1', 'fname' => 'Patrick', 'lname' => 'Talmadge'),
                    array('id' => '2', 'fname' => 'Maxime', 'lname' => 'Fabre'),
                    array('id' => '3', 'fname' => 'Taylor', 'lname' => 'Otwell'),
                    array('id' => '4', 'fname' => 'John', 'lname' => 'Doe'),
                    array('id' => '5', 'fname' => 'Jane', 'lname' => 'Doe'),
                );
                echo Table::open();
                echo Table::headers('#', 'First Name', 'Last Name');
                echo Table::body($body);
                echo Table::close();
             ?>
        </div>
        <div class="span6">
            <h3>&nbsp;</h3>
<pre class="prettyprint linenums">
$body = array(
    array(
        'id' => '1', 
        'fname' => 'Patrick', 
        'lname' => 'Talmadge'
    ),
    ...
);
echo Table::open();
echo Table::headers('#', 'First Name', 'Last Name');
echo Table::body($body); 
echo Table::open();
</pre>
        </div>
    </div>

    <div class="row">
        <div class="span6">
            <h3>Striped</h3>
            <p>Use <code>Table::striped_open()</code> instead of the default <code>Table::open()</code></p>
            <?php
                echo Table::striped_open();
                echo Table::headers('#', 'First Name', 'Last Name');
                echo Table::body($body);
                echo Table::close();
             ?>
        </div>
        <div class="span6">
            <h3>Bordered</h3>
            <p>Use <code>Table::bordered_open()</code> instead of the default <code>Table::open()</code></p>
            <?php
                echo Table::bordered_open();
                echo Table::headers('#', 'First Name', 'Last Name');
                echo Table::body($body);
                echo Table::close();
             ?>
        </div>
    </div>

    <div class="row">
        <div class="span6">
            <h3>Hover</h3>
            <p>Use <code>Table::hover_open()</code> instead of the default <code>Table::open()</code></p>
            <?php
                echo Table::hover_open();
                echo Table::headers('#', 'First Name', 'Last Name');
                echo Table::body($body);
                echo Table::close();
             ?>
        </div>
        <div class="span6">
            <h3>Condensed</h3>
            <p>Use <code>Table::condensed_open()</code> instead of the default <code>Table::open()</code></p>
            <?php
                echo Table::condensed_open();
                echo Table::headers('#', 'First Name', 'Last Name');
                echo Table::body($body);
                echo Table::close();
             ?>
        </div>
    </div>

    <div class="row">
        <div class="span6">
            <h3>Mix and match</h3>
            <?php
                echo Table::striped_bordered_hover_condensed_open();
                echo Table::headers('#', 'First Name', 'Last Name');
                echo Table::body($body);
                echo Table::close();
             ?>
        </div>
        <div class="span6">
<pre class="prettyprint linenums">
$body = array(
    array(
        'id' => '1', 
        'fname' => 'Patrick', 
        'lname' => 'Talmadge'
    ),
    ...
);
echo Table::striped_bordered_hover_condensed_open();
echo Table::headers('#', 'First Name', 'Last Name');
echo Table::body($body); 
echo Table::open();
</pre>
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <h3>Chainable methods</h3>
        </div>
        <div class="span4">
            <p>You can prevent a column from being generated by passing the array index or object attribute name 
                as a string to <code>ignore()</code> Example: </p>
<pre class="prettyprint linenums">
echo Table::body($body)
    ->ignore('id', 'password');
</pre>
            <p>You can also call the static <code>always_ignore()</code> function to ignore the columns on all new tables.</p>
<pre class="prettyprint linenums">
Tables::always_ignore('id', 'updated_at', 'created_at');
</pre>
        </div>
        <div class="span4">
            <p>You can dynamically set columns to either append columns to the table or replace current ones. If say you 
                create a column named "email" and your content already possesses a column named email, it will overwrite it.</p>
<pre class="prettyprint linenums">
echo Table::body($body)
->reservations(function($client) {
  if(isset($client['reservations'])) {
    return $client['reservations'];
  } else { 
    return 'No reservations';
  }
})
->edit(function($client) {
  return HTML::link('#', 'Edit');
});
</pre>
        </div>
        <div class="span4">
            <p>Also when dynamically creating columns, as their name will be used as classes you can set
             several classes by calling per example <code>->edit_action_center()</code>.</p>
            <p>You can order columns manually by calling <code>order()</code>.</p>
<pre class="prettyprint linenums">
echo Table::body($body)
    ->order('fname', 'lname');
</pre>
        </div>
    </div>    
</section>