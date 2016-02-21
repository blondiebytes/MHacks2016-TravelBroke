<?php
/**
 * Created by PhpStorm.
 * User: kathrynhodge
 * Date: 2/20/16
 * Time: 10:55 AM
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
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'  type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

    <script src="js/jquery.js"></script>
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

    </section>

    <section>
        <div class="container text-center" id="places-container">
            <div class="row text-center places-row">
                <!-- Col 1 -->
                <div class="col-xs-12 col-md-3 put-space-right">
                    <div class="row place-row">
                        <div class = "row destination">
                            <!-- Name of Destination-->
                            <p>Chicago</p>
                        </div>
                        <div class = "row image">
                            <!--Image of Destination-->
                            <img src="images/newyork.jpeg" height="100%", width="100%">
                        </div>
                        <div class = "row text-center">
                            <div class="col-xs-12 col-md-6 destination">
                                <p>March 14th</p>
                                <p>Delta</p>

                            </div>
                            <div class="col-xs-12 col-md-6 destination">
                                <p>March 18th</p>
                                <p>$796</p>
                            </div>
                        </div>
                        <div class="row text-center select-button">
                            <form action="http://localhost:8888/mhacks2016/completion.php">
                                <button type="submit" class="btn btn-default submit-button">Choose Me!</button>
                            </form>
                        </div>
                    </div>
                </div>
                    <!-- Col 2 -->
                <div class="col-xs-12 col-md-3">
                    <div class="row place-row">
                        <div class = "row destination">
                            <!-- Name of Destination-->
                            <p>New York City</p>
                        </div>
                        <div class = "row image">
                            <!--Image of Destination-->
                            <img src="images/newyork2.jpeg" height="100%", width="100%">
                        </div>
                        <div class = "row text-center">
                            <div class="col-xs-12 col-md-6 destination">
                                <p>March 3rd</p>
                                <p>Delta</p>

                            </div>
                            <div class="col-xs-12 col-md-6 destination">
                                <p>March 5th</p>
                                <p>$730</p>
                            </div>
                        </div>
                        <div class="row text-center select-button">
                            <!--Select choice button-->
                            <form action="http://localhost:8888/mhacks2016/completion.php">
                                <button type="submit" class="btn btn-default submit-button">Choose Me!</button>
                            </form>
                        </div>
                    </div>
                </div>
                    <!-- Row 3 -->
                <div class="col-xs-12 col-md-3 put-space-left">
                    <div class="row place-row ">
                        <div class = "row destination">
                            <!-- Name of Destination-->
                            <p>Austin</p>
                        </div>
                        <div class = "row image">
                            <!--Image of Destination-->
                            <img src="images/photo.jpeg" height="100%", width="100%">
                        </div>
                        <div class = "row text-center">
                            <div class="col-xs-12 col-md-6 destination">
                                <p>March 26th</p>
                                <p>Delta</p>

                            </div>
                            <div class="col-xs-12 col-md-6 destination">
                                <p>March 30th</p>
                                <p>$600</p>
                            </div>
                        </div>
                        <div class="row text-center select-button">
                            <!--Select choice button-->
                            <form action="http://localhost:8888/mhacks2016/completion.php">
                                <button type="submit" class="btn btn-default submit-button">Choose Me!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section> <!-- Large modal -->
        <div class = "text-center select-button" id="main-title">
            <button type="button" class="btn btn-primary submit-button" data-toggle="modal" data-target=".bs-example-modal-lg">Text when cheap flights are available!</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <form action="">
                            <div class="page-header"><h1>FILL OUT YOUR INFO</h1></div>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="First Name" aria-describedby="sizing-addon1">
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="Last Name" aria-describedby="sizing-addon1">
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="input-group input-group-lg">
                                    <input type="phone" class="form-control" name="phone" placeholder="(800)-867-5309" aria-describedby="sizing-addon1">
                                </div>
                                <div class="row mt-50" id="mb-50">
                                <div class="input-group input-group-btn">
                                    <button type="submit" class="btn btn-default submit-button" style="margin-bottom: 20px">Book It!</button>
                                </div>
                                </div>



                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

</body>
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="js/javascript.js"></script>

</html>
