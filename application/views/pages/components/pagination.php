<section id="pagination">
  <div class="page-header">
    <h1>Pagination <small>Two options for paging through content</small></h1>
  </div>

  <h2>Multicon-page pagination</h2>
  <div class="row">
    <div class="span12">
      <p>You can use the Paginator class as a drop in replacement for Laravel's Paginator class because it extends 
        the Laravel version and only changes the output markup. <a class="btn" href="http://laravel.com/docs/views/pagination">View Laravel Pagination Docs</a></p>

      <h3>Link Function</h3>
      <p>As you can see Bootstrapper adds an extra parameter to links, the Laravel's make Paginator function.</p>
<pre class="prettyprint linenums">
public function links($adjacent = 3, $alignment = self::ALIGN_LEFT, $size = self::SIZE_DEFAULT)
</pre>
    </div>
  </div> 
  <div class="row">
    <div class="span7">
      <h3>Sizes</h3>
      <p>Want larger or smaller pagination? Pass in  
        <code>Paginator::SIZE_MINI</code>, <code>Paginator::SIZE_SMALL</code>, or <code>Paginator::SIZE_LARGE</code>.</p>

<pre class="prettyprint linenums">
$orders = DB::table('orders')->paginate(15);

echo $orders->links();

//Right Alignment
echo $orders->links(3, Paginator::ALIGN_LEFT, Paginator::SIZE_LARGE);
echo $orders->links(3);
echo $orders->links(3, Paginator::ALIGN_LEFT, Paginator::SIZE_SMALL);
echo $orders->links(3, Paginator::ALIGN_LEFT, Paginator::SIZE_MINI);
</pre>
    </div>
    <div class="span5">
      <h3>Size examples</h3>
      <div class="pagination pagination-large">
        <ul>
            <li><a href="#">&laquo; Prev</a></li> 
            <li><a href="#">1</a></li> 
            <li><a href="#">2</a></li> 
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
            <li><a href="#">&laquo; Prev</a></li> 
            <li><a href="#">1</a></li> 
            <li><a href="#">2</a></li> 
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
        </ul>
      </div>
      <div class="pagination pagination-small">
        <ul>
            <li><a href="#">&laquo; Prev</a></li> 
            <li><a href="#">1</a></li> 
            <li><a href="#">2</a></li> 
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
        </ul>
      </div>
      <div class="pagination pagination-mini">
        <ul>
            <li><a href="#">&laquo; Prev</a></li> 
            <li><a href="#">1</a></li> 
            <li><a href="#">2</a></li> 
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
        </ul>
      </div>
    </div>
  </div><!-- /row --> 
  <div class="row">
    <div class="span7">
      <h3>Flexible alignment</h3>
      <p>The links function has an optional second parameter for alignment that takes: 
        <code>Paginator::ALIGN_LEFT</code>, <code>Paginator::ALIGN_CENTER</code>, or <code>Paginator::ALIGN_RIGHT</code>.</p>

      <h3>Laravel standard call</h3>
<pre class="prettyprint linenums">
$orders = DB::table('orders')->paginate(15);

echo $orders->links();

//Right Alignment
echo $orders->links(3, Paginator::ALIGN_RIGHT);
</pre>
    </div>
    <div class="span5">
      <h3>Alignment examples</h3>
      <h5>Left <small>(default)</small></h5>
      <div class="pagination">
        <ul>
            <li class=""><a href="#">&laquo; Prev</a></li> 
            <li><a href="#">1</a></li> 
            <li><a href="#">2</a></li> 
            <li class="active"><a href="#">3</a></li>
            <li class=" disabled"><a href="#">Next &raquo;</a></li>
        </ul>
      </div>
      <h5>Right</h5>
      <div class="pagination pagination-right">
        <ul>
            <li class=" disabled"><a href="#">&laquo; Prev</a></li> 
            <li class="active"><a href="#">1</a></li> 
            <li><a href="#">2</a></li> 
            <li><a href="#">3</a></li> 
            <li class=""><a href="#">Next &raquo;</a></li>
        </ul>
      </div>
    </div>
  </div><!-- /row -->

  <h2>Pager <small>For quick previous and next links</small></h2>
  <div class="row">
    <div class="span12">
      <h3>Pager Function</h3>
      <p>Pager is a Bootstrapper function that only add a Previous and Next button. The optional align paramenter 
        left and right aligns the buttons if set to true.</p>
<pre class="prettyprint linenums">
public function pager($align = false)
</pre>
    </div>
  </div>
  <div class="row">
    <div class="span6">
      <h3>Default example</h3>
      <p>By default, the pager centers links.</p>
      <ul class="pager">
        <li class="disabled"><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>
<pre class="prettyprint linenums">
echo $orders->pager();
</pre>
</div>
    <div class="span6">
      <h3>Aligned links</h3>
      <p>Alternatively, you can align each link to the sides:</p>
      <ul class="pager">
        <li class="previous"><a href="#">&larr; Older</a></li>
        <li class="next"><a href="#">Newer &rarr;</a></li>
      </ul>
<pre class="prettyprint linenums">
echo $orders->pager(true);
</pre>
    </div>
  </div><!-- /row -->
</section>