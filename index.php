
<?php include('layouts/base.php') ?>

<body class="container-fluid" id="bg">
    <section class="pu50">
        <div class="text-center main-title">
            <h1>Travel Broke</h1>
        </div>
    </section>
    <section>
        <div id="form-container main-page-container">
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
                            <input type="text" class="form-control" id="date"
                                   placeholder="Enter the number of the month you want to travel (i.e. 04)">
                        </div>
                    </div>
                </form>
                <div class="form-group row">
                    <div class="col-sm-12 text-center padding-top-for-buttom">
                        <form>
                            <button type="submit" class="btn btn-default submit-button">Let's go on an adventure!
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="js/javascript.js"></script>
<script src="js/submit.js"></script>
</html>
