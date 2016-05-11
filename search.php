<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!--Site Title-->
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Stylesheets-->
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/style.css">
<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script><[endif]-->
  </head>

  <body>
    <!--The Main Wrapper-->
    <div class="page">
      <!--
      ========================================================
                              HEADER
      ========================================================
      -->
      <<header class="page-header subpage_header">

        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar bg-white minimal top-panel-none toggles-none" data-layout="rd-navbar-fixed" data-hover-on="false" data-stick-up="false" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-static">
            <div class="rd-navbar-top-panel">
              <div class="rd-navbar-inner">
                <button data-rd-navbar-toggle=".list-inline, .fa-envelope, .fa-phone, .fa-shopping-cart" class="rd-navbar-collapse-toggle"><span></span></button><a href="mailto:#" class="fa-envelope">email@.com</a><a href="callto:#" class="fa-phone">+1 (126) 598-89-75</a>
                <ul class="list-inline pull-right">
                  <li><a href="#" class="fa-facebook"></a></li>
                  <li><a href="#" class="fa-pinterest-p"></a></li>
                  <li><a href="#" class="fa-twitter"></a></li>
                  <li><a href="#" class="fa-google-plus"></a></li>
                  <li><a href="#" class="fa-instagram"></a></li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-inner">

              <!--RD Navbar Panel-->
              <div class="rd-navbar-panel">

                <!--RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar" class="rd-navbar-toggle"><span></span></button>
                <!--END RD Navbar Toggle-->

                <!--RD Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.html"><img src="img/logo_text.png" width="250" alt=""/></a></div>
                <!--END RD Navbar Brand-->
              </div>
              <!--END RD Navbar Panel-->

              <div class="rd-navbar-nav-wrap">
                <!--RD Navbar Search-->
                <div class="rd-navbar-search">
                  <form action="search.php" method="GET" class="rd-navbar-search-form">
                    <label class="rd-navbar-search-form-input">
                      <input type="text" name="s" placeholder="Search.." autocomplete="off">
                    </label>
                    <button type="submit" class="rd-navbar-search-form-submit"></button>
                  </form><span class="rd-navbar-live-search-results"></span>
                  <button data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-live-search-results" class="rd-navbar-search-toggle"></button>
                </div>
                <!--END RD Navbar Search-->

                <!--RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li><a href="index.html">Home</a></li>
 
                  <li class="active"><a href="#">Community</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="contribute.html">How to Contribute</a></li>
                      <li><a href="https://issues.apache.org/jira/browse/iota/">Issue Tracker</a></li>
                      <li><a href="contribute.html#people">People</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Source</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="https://github.com/apache/incubator-iota">Apache iota on GitHub</a></li>
                    </ul>
                  </li>
                 
                  <li><a href="#">Documentation</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="https://cwiki.apache.org/confluence/display/IOTA/iota+Home">Documentation v.0.1</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Apache</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="http://www.apache.org">Apache Homepage</a></li>
                      <li><a href="http://www.apache.org/licenses">License</a></li>
                      <li><a href="http://www.apache.org/foundation/sponsorship">Sponsorship</a></li>
                      <li><a href="http://www.apache.org/foundation/thanks.html">Thanks</a></li>
                      <li><a href="http://www.apache.org/security">Security</a></li>
                    </ul>
                  </li>
                
                </ul>
                <!--END RD Navbar Nav-->
              </div>
            </div>
          </nav>
        </div>
        <!--END RD Navbar-->
        
      </header>
      <!--
      ========================================================
                              CONTENT
      ========================================================
      -->
      <main class="page-content">
        <!--Search Results-->
        <section class="well well-sm">
          <div class="container">
            <h2 class="text-center">Search Results</h2>
            <div class="row">
              <div class="col-xs-12">
                <div class="rd-navbar-search-results"></div>
              </div>
            </div>
          </div>
        </section>
        <!--END Search Results-->
        
      </main>
      <!--
      ========================================================
                              FOOTER
      ========================================================
      -->
      
      <footer class="page-footer footer-centered text-center">
        <section class="footer-content">
          <div class="container">
            <div class="navbar-brand"><img class="center-block" src="img/apache_incubator.png" alt=""/></div>
            <p class="big">iota is an incubator project of the <a href="http://www.apache.org">Apache Software Foundation</a>.</p>
            <ul class="list-inline">
              <li><a href="#" class="fa-facebook"></a></li>
              <li><a href="#" class="fa-twitter"></a></li>
            </ul>
          </div>
        </section>
        <section class="copyright">
          <div class="container">
            <p>&#169; <span id="copyright-year"></span> <a href="http://www.apache.org">The Apache Software Foundation</a><br>
            Apache, Apache iota (incubating), the Apache feather and the iota logo are trademarks of The Apache Software Foundation</p>
          </div>
        </section>
      </footer>
    </div>
    <!--Core Scripts-->
    <script src="js/core.min.js"></script>
    <!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <!--Include all compiled plugins (below), or include individual files as needed-->
    <script src="js/bootstrap.min.js"></script>
    <!--Additional Functionality Scripts-->
    <script src="js/script.js"></script>
  </body>
</html>