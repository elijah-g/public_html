<!DOCTYPE html>
<html lang="en">
<title>MoonBoot</title>    
<header>
    

    <link rel="icon" href="/~s3679959/wp/img/logo.png" type="image/x-icon">
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
                        <li class="active"><a href="#">SERVICES</a></li>
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
                    <i id='headerquote'>"Our service will excel beyond your expectations"</i>
                </div>
            </div>

            <!-- Container for Services Section) -->
            <div class="centerblock services">
                <h2><b>Services</b></h2>
                <div class='leftcontainer'>
                    <img src="/~s3679959/wp/img/webdevelopment.png">
                    <h3>Personalised Web Development</h3>
                    <p class="main">A personalised website will give you the edge your business needs, whether it's one page with just with basic information or multiple pages with member login and item purchases. <b>Moonboot</b> provides world class websites at a fraction of the cost all styled to your specifications.</p>
                </div>
                <div class="rightcontainer">
                    <a href="service.php" alt="Web Development">
            <img src ="/~s3679959/wp/img/screen-replacement.jpg">
            <h3>iPhone Screen Replacement</h3>
            </a>
                    <p class="main">When your precious iPhone becomes comprimised <b>Moonboot</b> will have you back on your feet in no time. It's not plausable to live without a smart phone not to mention uncool. When life gives you lemons give Moonboot a call and we'll gladly make you some lemonade.</p>
                </div>
                <div class="socialmediamanagement">
                    <center><img src="/wp/img/social-media-management.jpg">
                        <h3>Social Media Management</h3>
                    </center>
                    <p class="main"><i>Don't be stuck in the past</i> help your precious business excel with our expert advice and service. <b>MoonBoot</b> offers years of experience excelling in the new age of marketing. It is essential to have a social media presence to continue to grow your client base and leave the competition in the dust. Our promise is that your business will grow and your marketing cost shrink</p>
                </div>
            </div>

            <!--Container for Social Media-->
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
