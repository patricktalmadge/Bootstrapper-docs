<section id="mediaobject">
    <div class="page-header">
        <h1>Media Object</h1>
    </div>
    <div class="row">
        <div class="span6">
            <h3>Basic Example</h3>
            <?php echo MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.', 'http://placehold.it/64x64'); ?>
        </div>
        <div class="span6">
            <h3>&nbsp;</h3>
<pre class="prettyprint linenums">
//Simple form
echo MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64'); ?>

//With detailed image
echo MediaObject::create('Cras sit amet...')
  ->with_image('http://placehold.it/64x64', 'alt text');
</pre>          
        </div>
    </div>
    <div class="row">
        <div class="span6">
            <h3>With Title</h3>
            <?php echo MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.', 'http://placehold.it/64x64')
  ->with_h4('Media heading');
            ?>
        </div>
        <div class="span6">
            <h3>&nbsp;</h3>
<pre class="prettyprint linenums">
// Add a title to the media object
echo MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
  ->with_title('&lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;');

// Automatic titles wrapping
echo MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
  ->with_h4('Media heading');
</pre>
        </div>
    </div>

    <div class="row">
        <div class="span6">
            <h3>Nested</h3>
            <?php 
echo MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'http://placehold.it/64x64')
    ->with_h4('Media heading')
    ->nest(
        MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
        ->nest(
            MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.', 'http://placehold.it/64x64')
                ->with_h4('Media heading')
        )
    )->nest(
        MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
    )->nest(
        MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'http://placehold.it/64x64')
        ->with_h4('Pull Right')
        ->pull_right()
    );
            ?>
        </div>
        <div class="span6">
            <h3>&nbsp;</h3>
<pre class="prettyprint linenums">
// Add a title to the media object
echo MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
    ->with_h4('Media heading')
    ->nest(
        MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
        ->nest(
            MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
            ->with_h4('Media heading')
        )
    )->nest(
        MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
    )->nest(
        MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Pull Right')
        ->pull_right()
    );
</pre>
        </div>
    </div>

    <div class="row">
        <div class="span6">
            <h3>As List</h3>
            <?php 
                echo MediaObject::open_list();
                    echo MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.', 'http://placehold.it/64x64')
                    ->with_h4('Media heading');
                    echo MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.', 'http://placehold.it/64x64')
                    ->with_h4('Media heading');
                echo MediaObject::close_list();
            ?>
        </div>
        <div class="span6">
            <h3>&nbsp;</h3>
<pre class="prettyprint linenums">
echo MediaObject::open_list();
  echo MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
    ->with_h4('Media heading');
  echo MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
    ->with_h4('Media heading');
echo MediaObject::close_list();
</pre>
        </div>
    </div>
</section>