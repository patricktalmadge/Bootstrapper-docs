<section id="images">
    <div class="page-header">
        <h1>Images</h1>
    </div>

    <div class="row">
        <div class="span6">
            <div>
                <p>Function declaration :
                    <code>public static function {{SHAPE}}($url, $alt = '', $attributes = array())</code>
                </p>
                <p><?php echo Label::info('Heads up!'); ?> <code>.img-rounded</code> and <code>.img-circle</code> do not work in IE7-8 due to lack of <code>border-radius</code> support.</p>

            </div>
        </div>
        <div class="span6">
            <?php echo Image::rounded('http://placehold.it/140x140', '', array('style' => 'margin-right:15px;')); ?>
            <?php echo Image::circle('http://placehold.it/140x140', '', array('style' => 'margin-right:15px;')); ?>
            <?php echo Image::polaroid('http://placehold.it/140x140'); ?>

<pre class="prettyprint linenums" style="margin-top:15px;">
echo Image::rounded('http://placehold.it/140x140');
echo Image::circle('http://placehold.it/140x140');
echo Image::polaroid('http://placehold.it/140x140');
</pre>
        </div>
    </div>
</section>