@layout('templates.main')

@section('content')

<header class="jumbotron subhead" id="overview">
    <h1>Components</h1>
    <p class="lead">Laravel Bootstraper components provides navigation, alerts, pagination, and much more.</p>
    <div class="subnav">
    <?php 
        echo Navigation::pills(
            array(
            	array('label'=>'Buttons', 'url'=>'#', 'items'=>array(
            		array('label' => 'Button groups', 'url' => '#buttonGroups'),
                    array('label'=>'Button dropdowns', 'url'=>'#buttonDropdowns'),
                  )
                ),
                array('label'=>'Navigation', 'url'=>'#', 'items'=>array(
                    array('label'=>'Nav, tabs, pills', 'url'=>'#navs'),
                    array('label'=>'Navbar', 'url'=>'#navbar'),
                    array('label'=>'Breadcrumbs', 'url'=>'#breadcrumbs'),
                    array('label'=>'Pagination', 'url'=>'#pagination'),
                  )
                ),
                array('label'=>'Labels', 'url' => '#labels'),
                array('label'=>'Badges', 'url'=>'#badges'),
                array('label'=>'Alerts', 'url' => '#alerts'),
                array('label'=>'Progress bars', 'url'=>'#progress'),
            )
        );
      ?>
    </div>
</header>

<?php 


	include View::path("pages.components.buttongroups");

	include View::path("pages.components.dropdownbutton");

	include View::path("pages.components.nav");

	include View::path("pages.components.navbar");

	include View::path("pages.components.breadcrumbs");

  include View::path("pages.components.pagination");

  include View::path("pages.components.labels");

 	include View::path("pages.components.badges");

 	include View::path("pages.components.alerts");

 	include View::path("pages.components.progress");

?>
@endsection