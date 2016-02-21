<?php include('layouts/base.php') ?>

<body class="container-fluid" id="bg">

<section class="pu50" id="section1">
    <div class="text-lg-center main-title">
        <h1>Travel Broke</h1>
    </div>
</section>

<section id="section2">
    <div class="container text-center" id="places-container">
        <div class="row text-center places-row">
            <!-- Col 1 -->
            <div class="col-xs-12 col-md-3 put-space-right">
                <div class="row place-row">
                    <div class="row destination">
                        <!-- Name of Destination-->
                        <p>Chicago</p>
                    </div>
                    <div class="row image">
                        <!--Image of Destination-->
                        <img src="images/newyork.jpeg" height="100%" , width="100%">
                    </div>
                    <div class="row text-center">
                        <div class="col-xs-12 col-md-6 destination">
                            <p>March 14th</p>
                            <p>Sprint</p>

                        </div>
                        <div class="col-xs-12 col-md-6 destination">
                            <p>March 18th</p>
                            <p>$796</p>
                        </div>
                    </div>
                    <div class="row text-center select-button">
                        <form>
                            <button type="submit" class="btn btn-default submit-button">Choose Me!</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Col 2 -->
            <div class="col-xs-12 col-md-3">
                <div class="row place-row">
                    <div class="row destination">
                        <!-- Name of Destination-->
                        <p>New York City</p>
                    </div>
                    <div class="row image">
                        <!--Image of Destination-->
                        <img src="images/newyork2.jpeg" height="100%" , width="100%">
                    </div>
                    <div class="row text-center">
                        <div class="col-xs-12 col-md-6 destination">
                            <p>March 3rd</p>
                            <p>United</p>

                        </div>
                        <div class="col-xs-12 col-md-6 destination">
                            <p>March 5th</p>
                            <p>$730</p>
                        </div>
                    </div>
                    <div class="row text-center select-button">
                        <!--Select choice button-->
                        <form>
                            <button type="submit" class="btn btn-default submit-button">Choose Me!</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Row 3 -->
            <div class="col-xs-12 col-md-3 put-space-left">
                <div class="row place-row ">
                    <div class="row destination">
                        <!-- Name of Destination-->
                        <p>Austin</p>
                    </div>
                    <div class="row image">
                        <!--Image of Destination-->
                        <img src="images/photo.jpeg" height="100%" , width="100%">
                    </div>
                    <div class="row text-center">
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
                        <form>
                            <button type="submit" class="btn btn-default submit-button">Choose Me!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section3"> <!-- Large modal -->
    <div class="text-center">
        <button type="button" class="btn btn-default submit-button select-button" data-toggle="modal"
                data-target=".bs-example-modal-lg">Text when cheap flights are available!
        </button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="page-header main-title"><h1>FILL OUT YOUR INFO</h1></div>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="">

                            <div class="row">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-9 form-group input-group-lg">
                                            <input type="text" class="form-control" placeholder="First Name"
                                                   aria-describedby="sizing-addon1">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-9 form-group input-group-lg">
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                   aria-describedby="sizing-addon1">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-9 form-group input-group-lg">
                                            <input type="text" class="form-control" placeholder="Email"
                                                   aria-describedby="sizing-addon1">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-9 form-group input-group-lg">
                                            <input type="phone" class="form-control" name="phone" placeholder="(800)-867-5309"
                                                   aria-describedby="sizing-addon1">
                                        </div>

                                    </div>

                                    <div class="col-lg-offset-4 col-lg-4 form-group input-group-btn">
                                        <button type="submit" class="btn btn-default submit-button"
                                                style="margin-bottom: 20px">Register!
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
