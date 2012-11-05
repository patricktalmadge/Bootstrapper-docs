@layout('templates.main')

@section('content')

<header class="jumbotron subhead" id="overview">
    <h1>Base CSS</h1>
    <p class="lead">Basic Bootstrap goodness from Laravel Bootstrapper.</p>
    <div class="subnav">
    <?php 
        echo Navigation::pills(
            Navigation::links(
                array(
                    array('Typography', '#typography'),
                    array('Tables', '#tables'),
                    array('Forms', '#forms'),
                    array('Buttons', '#buttons'),
                    array('Images', '#images'),
                )
            )
        );
      ?>
    </div>
</header>

<?php 
    include View::path("pages.basecss.typography");

    include View::path("pages.basecss.tables");

    include View::path("pages.basecss.forms");

    include View::path("pages.basecss.buttons");

    include View::path("pages.basecss.images");
?>
@endsection