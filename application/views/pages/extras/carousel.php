<section id="carousel">
      <div class="page-header">
        <h1>Carousel <small>Requires bootstrap.js</small></h1>
      </div>
      <div class="row">
        <div class="span3 columns">
          <h3>Carousel create function</h3>
          <p>Creates a Bootstrap Carousel by passing an associative array of Carousel items. <a href="http://twitter.github.com/bootstrap/javascript.html#carousel" class="btn">More Info</a></p>
<pre class="prettyprint linenums">
public static function create($items, $attributes = array())
</pre>

          <h3>Carousel item elements</h3>
          <ul>
          	<li>image (required)</li>
          	<li>alt_text</li>
          	<li>attributes</li>
          	<li>label</li>
          	<li>caption</li>
          </ul>
        </div>
        <div class="span9 columns">
          <h2>Example carousel</h2>
          <p>Watch the slideshow below.</p>

		<?php
		echo Carousel::create(array(
		    array('image'=>'img/bootstrap-mdo-sfmoma-01.jpg', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
		    array('image'=>'img/bootstrap-mdo-sfmoma-02.jpg', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
		    array('image'=>'img/bootstrap-mdo-sfmoma-03.jpg', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
		));
		?>
<pre class="prettyprint linenums">
echo Carousel::create(array(
	array(
		'image'=>'img/bootstrap-mdo-sfmoma-01.jpg',
		'label'=>'First Thumbnail label', 
		'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida 
		at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
	),
	array(
		'image'=>'img/bootstrap-mdo-sfmoma-02.jpg', 
		'label'=>'Second Thumbnail label', 
		'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta 
		gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
	),
	array(
		'image'=>'img/bootstrap-mdo-sfmoma-03.jpg', 
		'label'=>'Third Thumbnail label', 
		'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta 
		gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
	),
));
</pre>
        </div>
      </div>
    </section>
