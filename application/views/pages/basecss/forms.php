<section id="forms">
  <div class="page-header">
    <h1>Forms</h1>
  </div>

  <h2>Four types of forms</h2>
  <p>Bootstrapper extends the Laravel Form class to provide the correct styles for Bootstrap. You can
    open a form the normal Laravel Form way and just pass in the correct constant.</p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Vertical (default)</th>
        <td><code>Form::vertical_open()</code></td>
        <td>Stacked, left-aligned labels over controls</td>
      </tr>
      <tr>
        <th>Inline</th>
        <td><code>Form::inline_open()</code></td>
        <td>Left-aligned label and inline-block controls for compact style</td>
      </tr>
      <tr>
        <th>Search</th>
        <td><code>Form::search_open()</code></td>
        <td>Extra-rounded text input for a typical search aesthetic</td>
      </tr>
      <tr>
        <th>Horizontal</th>
        <td><code>Form::horizontal_open()</code></td>
        <td>Float left, right-aligned labels on same line as controls</td>
      </tr>
    </tbody>
  </table>
  <p>Just like the standard Laravel Form you can use <code>{type}_open_secure()</code>, <code>{type}_open_for_files()</code>, or
   <code>{type}_open_secure_for_files()</code> for all form types.</p>

  <h2>Example forms <small>using just form controls, no extra markup</small></h2>
  <div class="row">
    <div class="span6">
      <h3>Basic form</h3>
      <p>You could use the default <code>Form::open()</code> or a more descriptive <code>Form::vertical_open()</code></p>
      <form class="well">
        <label>Label name</label>
        <input type="text" class="span3" placeholder="Type something…">
        <p class="help-block">Example block-level help text here.</p>
        <label class="checkbox">
          <input type="checkbox"> Check me out
        </label>
        <button type="submit" class="btn">Submit</button>
      </form>
<pre class="prettyprint linenums">
echo Form::vertical_open();
echo Form::label('something', 'Label name');
echo Form::text('something', null, array('class' => 'span3', 'placeholder' => 'Type something...'));
echo Form::block_help('Example block-level help text here.');
echo Form::labelled_checkbox('checker', 'Check me out');
echo Form::submit('Submit');
echo Form::close();
</pre>
    </div>
  <div class="span6">
    <h3>Search form</h3>
    <p>Using <code>Form::search_open()</code> and <code>Form::search_box()</code>. You could also use the standard open and pass in <code>array('class' => Form::TYPE_SEARCH)</code></p>
    <form class="well form-search">
      <input type="text" class="input-medium search-query">
      <button type="submit" class="btn">Search</button>
    </form>

<pre class="prettyprint linenums">
echo Form::search_open();
echo Form::search_box('search',null, array('class' => 'input-medium'));
echo Form::submit('Search');
echo Form::close();
</pre>
      <h3>Inline form</h3>
      <p>Using <code>Form::inline_open()</code></p>
      <form class="well form-inline">
        <input type="text" class="input-small" placeholder="Email">
        <input type="password" class="input-small" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox"> Remember me
        </label>
        <button type="submit" class="btn">Sign in</button>
      </form>

<pre class="prettyprint linenums">
echo Form::inline_open();
echo Form::text('email', null, array('class' => 'input-small', 'placeholder' => 'Email')); 
echo Form::password('pass', array('class' => 'input-small', 'placeholder' => 'Password')); 
echo Form::labelled_checkbox('checkme', 'Remember me'); 
echo Form::submit('Sign in');
echo Form::close();
</pre>
    </div><!-- /.span -->
  </div><!-- /row -->

  <br>

  <h2>Horizontal forms</h2>
  <div class="row">
    <div class="span4">
      <p></p>
      <p>Shown on the right are all the default form controls we support. Here's the bulleted list:</p>
      <ul>
        <li>text inputs (text, password, email, etc)</li>
        <li>checkbox</li>
        <li>radio</li>
        <li>select</li>
        <li>multiple select</li>
        <li>file input</li>
        <li>textarea</li>
      </ul>
      <p>Note that with a Horizontal form you need to wrap your controls in a <code>Form::control_group</code> 
        for the form to layout correctly. See the example on the right for more details</p>
    </div><!-- /.span -->
    <div class="span8">
      <form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="input01">Text input</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input01">
              <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox">Checkbox</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="optionsCheckbox" value="option1">
                Option one is this and that—be sure to include why it's great
              </label>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="select01">Select list</label>
            <div class="controls">
              <select id="select01">
                <option>something</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="multiSelect">Multicon-select</label>
            <div class="controls">
              <select multiple="multiple" id="multiSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="fileInput">File input</label>
            <div class="controls">
              <input class="input-file" id="fileInput" type="file">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="textarea">Textarea</label>
            <div class="controls">
              <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
      <h3>Example form</h3>
      <p></p>
<pre class="prettyprint linenums">
echo Form::horizontal_open();

echo Form::control_group(Form::label('input01', 'Text input'),
   Form::xlarge_text('input01'), '', 
   Form::block_help('In addition to freeform text, any HTML5 text-based input appears like so.'));

echo Form::control_group(Form::label('optionsCheckbox', 'Checkbox'),
   Form::labelled_checkbox('optionsCheckbox', 'Option one is this and that—be sure to include why it\'s great', 'option1'));

echo Form::control_group(Form::label('select01', 'Select list'),
   Form::select('select01', array('something', '2', '3', '4', '5')));

echo Form::control_group(Form::label('multiSelect', 'Select list'),
   Form::multiselect('multiSelect', array('1', '2', '3', '4', '5')));

echo Form::control_group(Form::label('fileInput', 'File input'),
   Form::file('fileInput'));

echo Form::control_group(Form::label('textarea', 'Textarea'),
   Form::xlarge_textarea('textarea', '', array('rows' => '3')));

echo Form::actions(array(Buttons::primary_submit('Save changes'), Form::button('Cancel')));

echo Form::close();
</pre>
    </div>
  </div>

  <br>

  <h2>Form control states</h2>
  <div class="row">
    <div class="span6">
      <h3>Control States</h3>
      <form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="focusedInput">Focused input</label>
            <div class="controls">
              <?php echo Form::xlarge_text('focusedInput', 'This is focused...', array('class' => 'focused')); ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Uneditable input</label>
            <div class="controls">
              <?php echo Form::xlarge_uneditable('Some value here'); ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="disabledInput">Disabled input</label>
            <div class="controls">
              <?php echo Form::xlarge_text('disabledInput', null, array('class' => 'disabled', 'placeholder' => 'Disabled input here...', 'disabled' => '')); ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
            <div class="controls">
              <?php echo Form::labelled_checkbox('optionsCheckbox2', 'This is a disabled checkbox', 'option1', false, array('disabled' => '')); ?>
            </div>
          </div>

<pre class="prettyprint linenums">
//Focused
echo Form::xlarge_text('focusedInput', 'This is focused...', array('class' => 'focused'));

//Uneditable
echo Form::xlarge_uneditable('Some value here');

//Disabled
echo Form::xlarge_text('disabledInput', null, array('class' => 'disabled', 'placeholder' => 'Disabled input here...', 'disabled' => ''));

//Disabled Checkbox
echo Form::labelled_checkbox('optionsCheckbox2', 'This is a disabled checkbox', 'option1', false, array('disabled' => ''));
</pre>
      </fieldset>
      </form>
    </div>
    <div class="span6">
      <h3>Form validation</h3>
      <form class="form-horizontal">
        <fieldset>
        <?php echo Form::control_group(Form::label('inputWarning', 'Input with warning'),
           Form::text('inputWarning'), 'warning', 
           Form::block_help('Something went wrong'));

        echo Form::control_group(Form::label('inputError', 'Input with error'),
             Form::text('inputError'), 'error', 
             Form::inline_help('Please correct the error'));

        echo Form::control_group(Form::label('inputSuccess', 'Input with success'),
               Form::text('inputSuccess'), 'success', 
               Form::inline_help('Woohoo!'));

        echo Form::control_group(Form::label('inputSuccess', 'Select with success'),
               Form::select('select01', array('1', '2', '3', '4', '5')), 'success', 
               Form::inline_help('Woohoo!'));
               ?>

<pre class="prettyprint linenums">
echo Form::control_group(Form::label('inputWarning', 'Input with warning'),
   Form::text('inputWarning'), 'warning', 
   Form::block_help('Something went wrong'));

echo Form::control_group(Form::label('inputError', 'Input with error'),
   Form::text('inputError'), 'error', 
   Form::inline_help('Please correct the error'));

echo Form::control_group(Form::label('inputSuccess', 'Input with success'),
   Form::text('inputSuccess'), 'success', 
   Form::inline_help('Woohoo!'));

echo Form::control_group(Form::label('inputSuccess', 'Select with success'),
   Form::select('select01', array('1', '2', '3', '4', '5')), 'success', 
   Form::inline_help('Woohoo!'));
</pre>
        </fieldset>
      </form>
    </div>
  </div>

  <br>

  <h2>Extending form controls</h2>
  <div class="row">
    <div class="span5">
      <h3>Sizing</h3>
      <?php 
        echo '<div>'.Form::span1_text('t_span1', null, array('placeholder' => 'span1')).'</div>';
        echo '<div>'.Form::span2_text('t_span2', null, array('placeholder' => 'span2')).'</div>';
        echo '<div>'.Form::span3_text('t_span3', null, array('placeholder' => 'span3')).'</div>'; 

        echo '<div>'.Form::span1_select('s_span1', array('1', '2', '3', '4', '5')).'</div>';
        echo '<div>'.Form::span2_select('s_span2', array('1', '2', '3', '4', '5')).'</div>';
        echo '<div>'.Form::span3_select('s_span3', array('1', '2', '3', '4', '5')).'</div>';
      ?>
      <p class="help-block"></p>
    </div>
    <div class="span7">
      <h3>Sizing calls</h3>
      <p>You can size input fields by making your standard call with <code>span*_</code> in front of the function name. 
        All of the same <code>span*</code> that the grid system uses for input sizes will work.</p>
<pre class="prettyprint linenums">
echo Form::span1_text('t_span1', null, array('placeholder' => '.span1'));
echo Form::span2_text('t_span2', null, array('placeholder' => '.span2'));
echo Form::span3_text('t_span3', null, array('placeholder' => '.span3')); 

echo Form::span1_select('s_span1', array('1', '2', '3', '4', '5'));
echo Form::span2_select('s_span2', array('1', '2', '3', '4', '5'));
echo Form::span3_select('s_span3', array('1', '2', '3', '4', '5'));
</pre>
    </div> 
  </div>
  <div class="row">
    <div class="span5">
      <h3>Alternate sizing</h3>
      <?php
          echo '<div>'.Form::mini_text('t_mini', null, array('placeholder' => 'Mini')).'</div>';
          echo '<div>'.Form::small_text('t_small', null, array('placeholder' => 'Small')).'</div>';
          echo '<div>'.Form::medium_text('t_medium', null, array('placeholder' => 'Medium')).'</div>'; 
      ?>
    </div>
    <div class="span7">
      <h3>Alternate sizing calls</h3>
      <p>You may also use static sizes that don't adapt. 
                Available sizes <code>mini, small, medium, large, xlarge, xxlarge</code>.</p>
<pre class="prettyprint linenums">
echo Form::mini_text('t_mini', null, array('placeholder' => 'Mini'));
echo Form::small_text('t_small', null, array('placeholder' => 'Small'));
echo Form::medium_text('t_medium', null, array('placeholder' => 'Medium')); 
</pre>
    </div> 
  </div>
  <hr>
  <div class="row">
    <div class="span5">
      <h3>Prepend &amp; append inputs</h3>
      <?php
          echo '<label>Prepended text</label>';
          echo Form::prepend(Form::span2_text('prependedInput'), '@');
          echo '<label>Appended text</label>';
          echo Form::append(Form::span2_text('prependedInput'), '.00');
          echo '<label>Append and prepend text</label>';
          echo Form::prepend_append(Form::span2_text('prependedInput'), '$', '.00'); 
          echo '<label>Append with button</label>';
          echo Form::append_buttons(Form::span2_text('appendedInputButton'), Form::button('Go!'));
          echo '<label>Two-buttons append</label>';
          echo Form::append_buttons(Form::span2_text('appendedInputButton'), array(Form::button('Search'),Form::button('Options')));
      ?>
    </div>
    <div class="span7">
      <h3>Prepend &amp; append inputs calls</h3>
      <p>These looks are easy with Bootstrapper just pass your control into the function 
        and the text you want appended and/or prepended.</p>
<pre class="prettyprint linenums">
//Prepended text
echo Form::prepend(Form::span2_text('prependedInput'), '@');
//Appended text
echo Form::append(Form::span2_text('prependedInput'), '.00');
//Append and prepend text
echo Form::prepend_append(Form::span2_text('prependedInput'), '$', '.00'); 
//Append with button
echo Form::append_buttons(Form::span2_text('appendedInputButton'), Form::button('Go!'));
//Two-buttons append 
echo Form::append_buttons(Form::span2_text('appendedInputButton'), array(Form::button('Search'),Form::button('Options')));
</pre>
    </div> 
  </div>
  <hr>
  <div class="row">
    <div class="span5">
      <h3>Checkboxes &amp; Radios</h3>
      <form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="inlineCheckboxes">Inline checkboxes</label>
            <div class="controls">
              <?php
              echo Form::inline_labelled_checkbox('inlineCheckbox1', '1', 'option1');
              echo Form::inline_labelled_checkbox('inlineCheckbox2', '2', 'option2');
              echo Form::inline_labelled_checkbox('inlineCheckbox3', '3', 'option3');
              ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckboxList">Checkboxes</label>
            <div class="controls">
              <?php
              echo Form::labelled_checkbox('optionsCheckboxList1', 'Option one is great', 'option1');
              echo Form::labelled_checkbox('optionsCheckboxList2', 'Option two can also be checked', 'option2');
              echo Form::labelled_checkbox('optionsCheckboxList3', 'Option three is excellent also', 'option3');
              ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inlineCheckboxes">Inline radios</label>
            <div class="controls">
              <?php
              echo Form::inline_labelled_radio('inlineRadios', '1', 'option1');
              echo Form::inline_labelled_radio('inlineRadios', '2', 'option2');
              echo Form::inline_labelled_radio('inlineRadios', '3', 'option3');
              ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckboxList">Radios</label>
            <div class="controls">
              <?php
              echo Form::labelled_radio('optionsRadio', 'Option one is great', 'option1');
              echo Form::labelled_radio('optionsRadio', 'Option two can also be checked', 'option2');
              echo Form::labelled_radio('optionsRadio', 'Option three is excellent also', 'option3');
              ?>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="span7">
      <h3>Checkbox &amp; Radio calls</h3>
      <p><?php echo Labels::info('Note:'); ?> Labels surround all the options for much larger click areas and a more usable form.</p>
<pre class="prettyprint linenums">
//Inline checkboxes
echo Form::inline_labelled_checkbox('inlineCheckbox1', '1', 'option1');
echo Form::inline_labelled_checkbox('inlineCheckbox2', '2', 'option2');
echo Form::inline_labelled_checkbox('inlineCheckbox3', '3', 'option3');

//Labelled checkboxes
echo Form::labelled_checkbox('optionsCheckboxList1', 'Option one is great', 'option1');
echo Form::labelled_checkbox('optionsCheckboxList2', 'Option two can also be checked', 'option2');
echo Form::labelled_checkbox('optionsCheckboxList3', 'Option three is excellent also', 'option3');

//Inline radios
echo Form::inline_labelled_radio('inlineRadios', '1', 'option1');
echo Form::inline_labelled_radio('inlineRadios', '2', 'option2');
echo Form::inline_labelled_radio('inlineRadios', '3', 'option3');

//Labelled checkboxes
echo Form::labelled_radio('optionsRadio', 'Option one is great', 'option1');
echo Form::labelled_radio('optionsRadio', 'Option two can also be checked', 'option2');
echo Form::labelled_radio('optionsRadio', 'Option three is excellent also', 'option3');
</pre>
    </div> 
  </div>
</section>