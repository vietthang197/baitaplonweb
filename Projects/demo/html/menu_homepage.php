<link rel="stylesheet" href="/css/customcss/menu_homepage.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="icon" href="/res/img/icon_website.png">
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">

        </div>
        <div class="row row2" style="margin-top: 10px;">
            <div class="col-md-3">
                <button type="button" class="btn btn-lg btn-primary">UET photo <a href="/html/homepage.php"><span class="badge">version 1.0</span></a> </button>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-4 ">

                    <div class="row">
                        <input class="input_search" type="text" name="search" placeholder="Search..">
                        <button type="button" class="btn btn-info">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>

                    </div>

            </div>
            <div class="col-sm-2">
                <a href="#" class="btn btn-info btn-sm">
                    <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?>
</a>
</div>
<div class="col-sm-2">
    <a href="/html/upload.php" class="btn btn-info btn-sm">
        <span class="glyphicon glyphicon-upload"></span> Upload
    </a>
</div>

</div>

</div>
</div>