@layout('templates.main')

@section('content')

<header class="jumbotron subhead" id="overview">
    <h1>Base CSS</h1>
    <p class="lead">Basic Bootstrap goodness from Laravel Bootstraper.</p>
    <div class="subnav">
    <?php 
        echo Navigation::pills(
            array(
                array('label'=>'Forms', 'url'=>'#forms'),
                array('label'=>'Buttons', 'url'=>'#buttons'),
            )
        );
      ?>
    </div>
</header>

<?php 

    include View::path("pages.basecss.forms");

    include View::path("pages.basecss.buttons");
?>
@endsection