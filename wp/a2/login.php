<!DOCTYPE html>
<html lang="en">
<title>MoonBoot</title>
<header>
    

    <link rel="icon" href="/~s3679959/wp/img/logo.png">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

    <link type="text/css" rel='stylesheet' href="/~s3679959/moonboot.css">

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
                        <li><a href="/~s3679959/wp/a2/index.php">HOME</a></li>
                        <li><a href="/~s3679959/wp/a2/services.php">SERVICES</a></li>
                        <li class="active"><a href="#">LOGIN</a></li>
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
            <div class="login services">
                <h2>MEMBER LOGIN</h2>
                <div>
                    <form action="/~e54061/wp/processing.php?ref=login">
                        <label for="email">Email Address:</label>
                        <input type="text" id="email" name="email" placeholder="Input Email...">

                        <label for="Password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Input Password">
                        <br>
                        <center>
                            <input id="submitbutton" type="submit" value="Submit">
                        </center>
                    </form>
                </div>
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
