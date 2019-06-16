<?php
    define( "TITLE", "Honest Clickbait Headlines");
    include("function.php");

    if ( isset( $_POST["fix_submit"] ) ) {
        checkForClickBait();
    }
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compaatible" conteent="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php echo TITLE; ?></title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>

        <div class="container text-left"><br>
            <h1><?php echo TITLE; ?></h1>
            <p class="lead text-muted">Tired of misleading click bait? Turn those annoying headlines into realistic, honest ones using this simple program.</p>
           
        <div class="row justify-content-left">
            <form class="col-sm-9 col-sm-offset-2" action="" method="post">
                <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg float-right" name="fix_submit">Make Honest!</button>
            </form>
        </div>

        <?php
                if( isset( $_POST["fix_submit"] ) ) {
                    $clickBait = checkForClickBait()[0];
                    $honestHeadline = checkForClickBait()[1];

                    displayHonestHeadline( $clickBait, $honestHeadline );
                }
        ?>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
