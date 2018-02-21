<!DOCTYPE html>
<html lang="en">
<title>MoonBoot</title>
<header>
   
    <link rel="icon" href="/~s3679959/wp/img/logo.png">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

    <link type="text/css" rel='stylesheet' href="/moonboot.css">

</header>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <body id="MoonBoot" data-spy="scroll" data-target=".navbar" data-offset="10">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="#">HOME</a></li>
                        <li><a href="/~s3679959/wp/a2/services.php">SERVICES</a></li>
                        <li><a href="/~s3679959/wp/a2/login.php">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="home" class="jumbotron text-center">
            <!--Banner Container-->
            <div class="bg-banner container-fluid">
                <div class="centerblock">
                    <img id="bannerimg" src="/~s3679959/wp/img/moonbootwriting.png">
                    <i id='headerquote'>"To boot your business to the next level, call today"</i>
                </div>
            </div>

            <!-- Container (About Section) -->
            <article id="about" class="centerblock container-fluid">
                <h2><b>ABOUT US</b></h2>
                <p class='main'>Moonboot is a locally owned technology company in the heart of Bunbury. We pride ourselves in providing the highest quality service to all our clients, whilst maintaining the lowest possible prices. We strive to go above and beyond what is expected, to put a smile on your face.</p>
            </article>

            <!--Container for Contact US-->
            <div id="contact" class="centerblock container-fluid slideanim">
                <center>
                    <hr>
                    <div class="text-center center-block">

                        <a target='_blank' href="https://www.facebook.com/moonboottech "><i id="social-fb " class="fa fa-facebook-square fa-3x social "></i></a>
                        <a target='_blank' href="https://plus.google.com/+Moonboottech "><i id="social-gp " class="fa fa-google-plus-square fa-3x social "></i></a>

                        <a href="mailto:admin@moonboottech.com "><i id="social-em " class="fa fa-envelope-square fa-3x social "></i></a>

                    </div>
                    <hr>
                </center>
            </div>
            <footer id="footertag">
                <a href="#home" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span></a>
                <h4>MoonBoot 2018 &copy<br>Designed and Created by Elijah Glass (s3679959)</h4>
            </footer>
        </div>

    </body>

</html>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
    //Jquery Library to assist in slide animation
</script>


<script>
    //implementation of slide animation     
    $(window).scroll(function() {
        $(".slideanim").each(function() {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
</script>
