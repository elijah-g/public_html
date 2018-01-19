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

    <body data-spy="scroll" data-target=".navbar" data-offset="10">
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
                        <li class="active"><a href="/~s3679959/wp/a2/services.php">SERVICES</a></li>
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
                    <i id='headerquote'>"Make the most of what we have to offer, call today"</i>
                </div>
            </div>
            <!---Container for the service--->
            <div class="centerblock service">
                <h2><b>iPhone Screen Replacement</b></h2>
                <div class='leftcontainer'>
                    <img id="iphonefix" src="/~s3679959/wp/img/iphonefix.jpg">
                </div>
                <div class="rightcontainer">
                    <form name="screen replace" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
                        <input type="hidden" name="id" value="1234">
                        <p id="formtext" class="main">Select your phone:</p>
                        <select name="option">
            <option value="iPhone 6/6s">iPhone 6/6s</option>
            <option value="iPhone 7/7s">iPhone 7/7s</option>
            <option value="iPhone 6+/6s+">iPhone 6+/6s+</option>
            <option value="iPhone 7+/7s+">iPhone 7+/7s+</option>
            <option value="iPhone X">iPhone X</option>
        </select>

                        <p id="formtext" class="main">Select the quantity:</p>
                        <div class="input-group input-number-group">
                            <div class="input-group-button">
                                <span class="input-number-decrement">-</span>
                            </div>
                            <input name="qty" class="input-number" type="number" step="1" value="1" min="0" max="1000">
                            <div class="input-group-button">
                                <span class="input-number-increment">+</span>
                            </div>
                        </div>
                        <input id="submitbutton" type="submit" value="Submit">
                    </form>
                </div>



                <p class="main"><b>Everybody makes mistakes</b> we get that and that's why we want to help. When you find yourself with the dispair of a broken phone, don't hesitate to contact MoonBoot.</p>

                <p class="main">Our Technicians are as good as they come, with years of experience and the highest quality equipment you can be assured your precious device is in good hands!</p>

            </div>


            <!--Container for Social Media Bar-->
            <div id="contact" class="container-fluid centerblock slideanim">
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
            <footer id="footertag" class "container-fluid slideanim">
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
    
    //Javascript to make the quantity buttons function
    $('.input-number-increment').click(function() {
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  $input.val(val + 1);
});

$('.input-number-decrement').click(function() {
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  if(val>0){
    $input.val(val - 1);}
})


    
    
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
