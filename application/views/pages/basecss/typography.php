<section id="typography">
    <div class="page-header">
        <h1>Typography</h1>
    </div>

    <div class="row">
        <div class="span12">
            <h3>Lead body copy</h3>
            
            <div>
                <?php echo Typography::lead('Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.'); ?>
            </div>
<pre class="prettyprint linenums">
echo Typography::lead('Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.');
</pre>
        </div>
        <div class="span12">
            <h3>Emphasis classes</h3>
            <div>
                <?php echo Typography::muted('Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.'); ?>
                <?php echo Typography::warning('Etiam porta sem malesuada magna mollis euismod.'); ?>
                <?php echo Typography::error('Donec ullamcorper nulla non metus auctor fringilla.'); ?>
                <?php echo Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.'); ?>
                <?php echo Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.'); ?>
            </div>
<pre class="prettyprint linenums">
echo Typography::muted('Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.');
echo Typography::warning('Etiam porta sem malesuada magna mollis euismod.');
echo Typography::error('Donec ullamcorper nulla non metus auctor fringilla.');
echo Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.');
echo Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.');
</pre>
        </div>
        <div class="span12">
            <h3>Description</h3>
            <p>A list of terms with their associated descriptions.</p>
            <div>
                <?php echo Typography::dl(array(
        'Description lists' => 'A description list is perfect for defining terms.',
        'Euismod' => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
        Donec id elit non mi porta gravida at eget metus.',
        'Malesuada porta' => 'Etiam porta sem malesuada magna mollis euismod.',
                    ));
                ?>
            </div>
<pre class="prettyprint linenums">
echo Typography::dl(
    array(
        'Description lists' => 'A description list is perfect for defining terms.',
        'Euismod' => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
        Donec id elit non mi porta gravida at eget metus.',
        'Malesuada porta' => 'Etiam porta sem malesuada magna mollis euismod.',
    )
);
</pre>
            <h4>Horizontal description</h4>
            <div>
                <?php echo Typography::horizontal_dl(array(
        'Description lists' => 'A description list is perfect for defining terms.',
        'Euismod' => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
        Donec id elit non mi porta gravida at eget metus.',
        'Malesuada porta' => 'Etiam porta sem malesuada magna mollis euismod.',
                    ));
                ?>
            </div>

<pre class="prettyprint linenums">
echo Typography::horizontal_dl(
    array(
        'Description lists' => 'A description list is perfect for defining terms.',
        'Euismod' => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
        Donec id elit non mi porta gravida at eget metus.',
        'Malesuada porta' => 'Etiam porta sem malesuada magna mollis euismod.',
    )
);
</pre>
        </div>



</section>