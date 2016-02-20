<?php
/**
 * Created by PhpStorm.
 * User: kathrynhodge
 * Date: 2/20/16
 * Time: 3:06 AM
 * php-intro.com
*/
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TRAVEL-BROKE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/assets.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'  type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container-fluid" id="bg">
        <section id="pd50">

        </section>
        <section>
            <div class = "text-lg-center" id="main-title">
                <h1>Travel Broke</h1>
            </div>
        </section>
        <section>
            <div class="containerA" id="form-container">
                <div class="jumbotron" id="welcome">
                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="start">Where do we begin?</label>
                            <div class="col-sm-9 skewed">
                                <input type="text" class="form-control" id="start" placeholder="Enter start location">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="num">Who's going?</label>
                            <div class="col-sm-9 skewed">
                                <input type="text" class="form-control" id="num" placeholder="Enter number of people">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="budget">How much $$ ?</label>
                            <div class="col-sm-9 skewed">
                                <input type="text" class="form-control" id="budget" placeholder="Enter the budget per person">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="date">When are we going?</label>
                            <div class="col-sm-9 skewed">
                                <input type="text" class="form-control" id="date" placeholder="Enter the start date and the end date (i.e. 12.01.15 - 12.11.15)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-default" id="submit-button">Let's go on an adventure!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    </body>
</html>
