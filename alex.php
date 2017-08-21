<!DOCTYPE html>
<html dir=rtl>
    <head>
        <title>Alex site</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-jquery/css/bootstrap.min.css">
        <script src="bootstrap-jquery/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap-jquery/js/bootstrap.min.js"></script>
        <style>
            body {
                position: relative; 
            }
            #section1 {padding-top:50px;height:700px;color: #fff; background-color: #ff9800;}
            #section2 {padding-top:50px;height:700px;color: #fff; background-color: #673ab7;}
            #section3 {padding-top:50px;height:700px;color: #fff; background-color: #1E88E5;}
            #section41 {padding-top:50px;height:700px;color: #fff; background-color: #00bcd4;}
            #section42 {padding-top:50px;height:700px;color: #fff; background-color: #009688;}
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 65%;
                margin: auto;
            }
            .carousel-indicators {
                bottom:-50px;
            }

            .carousel-indicators li {
                border-color:#999;
                background-color:#ccc;
            }

            .carousel-inner {
                margin-bottom:50px;
            }
            </style>
        </head>
        <body data-spy="scroll" data-target=".navbar" data-offset="50">

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header navbar-right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#"><img src="Images/logo.jpg" /></a>
                    </div>
                    <div>
                        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                            <ul class="nav navbar-nav">

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">تنمية<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#section41">الموارد</a></li>
                                        <li><a href="#section42">العاملين</a></li>
                                    </ul>
                                </li>
                                <li><a href="#section1">مؤشرات</a></li>
                                <li><a href="#section2">ادارات</a></li>
                                <li><a href="#section3">مشروعات</a></li>
                                <li class="active"><a href="http://www.arabcont.com/">المقاولون العرب</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>    

            <div id="section3" class="container-fluid">
               <br><br/>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img src="images/pro1.jpg" alt="pro1" width="460" height="345">
                            <div class="carousel-caption">
                                <h3></h3>
                                <h1>مشروع انشاءات</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/pro2.jpg" alt="pro2" width="460" height="345">
                            <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/pro4.jpg" alt="pro4" width="460" height="345">
                            <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/sarf.jpg" alt="sarf" width="460" height="345">
                            <div class="carousel-caption">
                               
                            </div>
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

            </div>
           

            <div id="section2" class="container-fluid">
                <h1>ادارات</h1>
            </div>
            <div id="section1" class="container-fluid">
                <h1>مؤشرات</h1>
            </div>
            <div id="section41" class="container-fluid">
                <h1>الموارد</h1>
            </div>
            <div id="section42" class="container-fluid">
                <h1>العاملين</h1>

            </div>

        </body>
    </html>