<?php
//include our settings, connect to database etc.
//include dirname($_SERVER['DOCUMENT_ROOT']).'/cfg/settings.php';
//getting required data
//$DATA=dbgetarr("SELECT * FROM links");
//$pagetitle = "Travel Broke";
//etc
//and then call a template:
//$tpl = "layouts/base.php";
include "layouts/base.php";
?>
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
                            <label class="control-label col-sm-3" for="budget">What's your budget?</label>
                            <div class="col-sm-9 skewed">
                                <input type="text" class="form-control" id="budget" placeholder="Enter your budget">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="date">When are we going?</label>
                            <div class="col-sm-9 skewed">
                                <input type="text" class="form-control" id="date" placeholder="Enter a month and year (i.e. April 2016)">
                            </div>
                        </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center padding-top-for-buttom">
                                <form action="http://localhost:8888/mhacks2016/pickTravel.php">
                                    <button type="submit" class="btn btn-default submit-button">Let's go on an adventure!</button>
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
