<section id="typeahead">
      <div class="page-header">
        <h1>Typeahead <small>Requires bootstrap.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>Typeahead create function</h3>
          <p>Creates a Bootstrap Typeahead by passing an array strings as the source. <a href="http://twitter.github.com/bootstrap/javascript.html#typeahead" class="btn">More Info</a></p>
<pre class="prettyprint linenums">
public static function create($source, $items = 8, $attributes = array())
</pre>
        </div>
        <div class="span9 columns">
          <h2>Example</h2>
          <p>Start typing a in the field below to show the typeahead results.</p>
          <div class="well">
            <?php
              $states = array("Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming");
              echo Typeahead::create($states, 4, array('class' => 'span3', 'style' => "margin: 0 auto;"));
            ?> 
          </div>
          <hr>
          <h3>Sample Call</h3>
<pre class="prettyprint linenums">
$states = array("Alabama","Alaska","Arizona","Arkansas", ... ,"Wisconsin","Wyoming");
echo Typeahead::create($states, 4, array('class' => 'span3', 'style' => "margin: 0 auto;"));
</pre>
        </div>
      </div>
    </section>