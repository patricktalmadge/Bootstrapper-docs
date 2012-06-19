@layout('templates.main')

@section('content')

<header class="jumbotron subhead" id="overview">
    <h1>Extras</h1>
    <p class="lead">More Bootstrap goodness from Laravel Bootstrapper.</p>
    <div class="subnav">
    <?php 
        echo Navigation::pills(
            array(
                array('label'=>'Typeahead', 'url'=>'#typeahead'),
                array('label'=>'Carousel', 'url'=>'#carousel'),
            )
        );
      ?>
    </div>
</header>

<?php 

    include View::path("pages.extras.typeahead");

	include View::path("pages.extras.carousel");

?>
@endsection