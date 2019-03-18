<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
    <title>CONTACTS</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/google-map.css">
    <link rel="stylesheet" href="css/search.css">

    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!--<script src="js/rd-smoothscroll.min.js"></script>-->


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div class="container top-sect">
        <a href="index.html"><img src="images/logo.png" style="float:left;" title="AFC logo" alt="logo"></a>

       <!-- <div class="navbar-header">
          <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand'>Knowledge...<small>grow profits</small></a>
          </h1>-->
         <!-- <a class="search-form_toggle" href="#"></a>
        </div>-->

        <div class="help-box text-right">

          <p>Need help?</p>
          <a href="callto:#">+254-7990-87084</a>
          <small><span>Hours:</span>  8am-5pm PST M-Fri; &nbsp;8am-1pm PST Sat</small>

        </div>

        <!--The icons class-->
        <!--  <div class="socialicon-bar">
            <a class="social-active" href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          End of the icons class-->

      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">   
        <nav class="navbar navbar-default navbar-static-top pull-left">            

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li class="active">
                  <a href="./">HOME</a>
                </li>
                <li>
                  <a href="index-1.html">ABOUT</a>
                </li>

                <li class="dropdown">
                  <a href="index-6.html">MEMBERSHIP<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu"> 
                         <li>
                          <a href="register.php" class="btn btn-primary btn-link">Register</a></li>
                          <a href="login.php" class="btn btn-primary btn-link">Login</a></li>
                        </ul>
                </li> 

                <li class="dropdown">
                  <a href="index-2.html">SERVICES<span class="" aria-hidden="true"></span></a>
                  <!--<ul class="dropdown-menu">
                    <li>
                      <a href="#">Lorem ipsum</a>
                    </li>
                    <li>
                      <a href="#">Dolor sit amet  </a>                      
                    </li>
                    <li>
                      <a href="#">Conse ctetur </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="#">Latest</a>
                          </li>
                          <li>
                            <a href="#">Archive</a>
                          </li>                      
                        </ul>
                    </li>
                  </ul>-->


                </li>  

                <li>
                  <a href="index-7.html">AFFAC TV</a>
                </li>              

                <li>
                  <a href="index-3.html">PROJECTS</a>
                </li>
              
                <li>
                  <a href="index-8.html">THE BLOG</a>
                </li>

                <li>
                  <a href="index-4.html">CONTACTS</a>
                </li>
              </ul>                           
            </div>
        </nav>   

       <!-- <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
          <label class="search-form_label">
            <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
            <span class="search-form_liveout"></span>
          </label>
          <button class="search-form_submit fa-search" type="submit"></button>
        </form>-->
             
        </div>

      </div>  
    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section> 
        <div class="map map_height1">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4633440364237!2d36.941267314136375!3d-1.4932729989109774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMjknMzUuOCJTIDM2wrA1NiczNi40IkU!5e0!3m2!1sen!2ske!4v1549979698419" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
        </div>
      </section>

      <section class="well well4">
        <div class="container">
         
              <h2>
                contact 
                <small>
                 form
                </small>
              </h2>
              <form id="contact-form" class='contact-form' method="post" action="contact.php">
                <div class="contact-form-loader"></div>
                <fieldset>
                  <label class="name">
                    <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"/>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid name.</span>
                  </label>              
              
                  <label class="phone">
                    <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@JustNumbers"/>
              
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid phone.</span>
                  </label>

                  <label class="email">
                    <input type="text" name="email" placeholder="Email:" value="" data-constraints="@Required @Email"/>
                    
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid email.</span>
                  </label>
              
                  <label class="message">
                    <textarea name="message" placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*The message is too short.</span>
                  </label>
              
                 <!--  <label class="recaptcha"> <span class="empty-message">*This field is required.</span> </label> -->
              
                  <div class="btn-wr text-primary">
                    <a class="btn btn-primary" href="#" data-type="submit">Submit comment</a>
                  </div>
                </fieldset>
                <div class="modal fade response-message">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                          &times;
                        </button>
                        <h4 class="modal-title">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        You message has been sent! We will be in touch soon.
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
                     
        </div>        
      </section>

      

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
   <section class="well1">
      <div class="container"> 
            <p class="rights">
              Africa Farmers Club &#169; <span id="copyright-year"></span>
              <a href="index-5.html">Privacy Policy</a>
            </p>          
      </div> 
    </section>    
  </footer>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->


  </body>
</html>
