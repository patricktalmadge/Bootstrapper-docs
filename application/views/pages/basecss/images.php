<section id="images">
    <div class="page-header">
        <h1>Images</h1>
    </div>

    <div class="row">
        <div class="span12">
            <div>
                <p>Function declaration :
                    <code>public static function {{SHAPE}}($url, $alt = '', $attributes = array())</code>
                </p>
                <?php echo Image::rounded('http://placehold.it/140x140'); ?>
                <?php echo Image::circle('http://placehold.it/140x140'); ?>
                <?php echo Image::polaroid('http://placehold.it/140x140'); ?>
            </div>
<pre class="prettyprint linenums">
echo Image::rounded('http://placehold.it/140x140');
echo Image::circle('http://placehold.it/140x140');
echo Image::polaroid('http://placehold.it/140x140');
</pre>
            <p><?php echo Label::info('Heads up!'); ?> <code>.img-rounded</code> and <code>.img-circle</code> do not work in IE7-8 due to lack of <code>border-radius</code> support.</p>
        </div>
    </div>
</section>