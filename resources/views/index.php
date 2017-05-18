<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MCM-API Documentation</title>

    <!-- Bootstrap core CSS -->
    <link href="style.css" type="stylesheet">

    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://v4-alpha.getbootstrap.com/examples/blog/blog.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </head>

  <body>

    <div class="blog-header spacer">
      <div class="container">
        <h1 class="blog-title" style="margin-top:50px; font-size:3em;">The Mall Campaign Manager API</h1>
        <p class="lead blog-description">A Clear and precise description on how to use and utilize the API for the MCM system</p>
      </div>
    </div>

    <div class="container">

      <div class="row">


        <div class="col-sm-4 col-sm-offset-1 blog-sidebar" style="background-color:#F7F9FA;">

          <div class="sidebar-module">
            <h4 style="color:#b7c9d3; margin-left:-10px">Table of contents</h4>
            <ol class="list-unstyled">
              <h6 style="color:#00ade5; margin-left:-10px; margin-bottom: 0px;"> Getting Started </h5>
              <li><a style="color:#768692;" href="#register-for-a-user">Registering for a user</a></li>
              <li><a style="color:#768692;" href="#signing-in">Signing in</a></li>

              <h6 style="color:#00ade5; margin-left:-10px; margin-bottom:0px; margin-top: 10px;"> Campaigns </h5>
              <li><a style="color:#768692;" href="#creating-campaings">Creating campaigns</a></li>
              <li><a style="color:#768692;" href="#Seeing-all-campaigns">Seeing all Campaigns</a></li>
              <li><a style="color:#768692;" href="#Seeing-specific-campaigns">Seeing specific Campaigns</a></li>
              <li><a style="color:#768692;" href="#updating-campaigns">Updating Campaigns</a></li>
              <li><a style="color:#768692;" href="#deleting-campaigns">Deleting Campaigns</a></li>

              <h6 style="color:#00ade5; margin-left:-10px; margin-bottom:0px; margin-top: 10px;"> Shops </h5>
              <li><a style="color:#768692;" href="#creating-shops">Creating a shop </a></li>
              <li><a style="color:#768692;" href="#seeing-all-shops">Seeing all shops</a></li>
              <li><a style="color:#768692;" href="#seeing-specific-shops">Seeing a specific shop</a></li>
              <li><a style="color:#768692;" href="#deleting-campaigns">Deleting a shop</a></li>

              <h6 style="color:#00ade5; margin-left:-10px; margin-bottom:0px; margin-top: 10px;"> Other Options </h5>
              <li><a style="color:#768692;" href="#approve-campaigns">Approving campaign proposals</a></li>
              <li><a style="color:#768692;" href="#user-details">Get specific user information</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->



        <div class="col-sm-7 blog-main">

          <!-- BEGINNING OF GETTING STARTED -->

          <div class="blog-post"> <!-- /.Register User -->
            <h4 style="font-size:2em;" class="blog-post-title" id="register-for-a-user">Register a user</h2>
            <p><span style="font-weight:bold;">Method:</span> POST</p>
            <p><span style="font-weight:bold;">Description:</span> POST details to register a user and get an API token</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/register </span></p>
            <hr>
          </div><!-- / Register User -->


          <div class="blog-post"> <!-- Sign in -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="signing-in">Sign in</h2>
            <p><span style="font-weight:bold;">Method:</span> POST</p>
            <p><span style="font-weight:bold;">Description:</span> POST email and password. User details including API Token will be returned</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/login </span></p>
            <hr>
          </div><!-- / Sign in-->

          <!-- END OF GETTING STARTED -->

          <!-- BEGINNING OF CAMPAIGNS -->

          <div class="blog-post"> <!-- Create Campaigns -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="creating-campaigns">Creating campaigns</h2>
            <p><span style="font-weight:bold;">Method:</span> POST</p>
            <p><span style="font-weight:bold;">Description:</span> POST title, image path, description, dateStarts, dateEnds & shopID</p>
            <p><span style="font-weight:bold;">Parameters:</span> Status - proposal, active or expired</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/campaigns/{status}/create </span></p>
            <hr>
          </div><!-- / Create Campaigns-->


          <div class="blog-post"> <!-- see all Campaigns -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="Seeing-all-campaigns">Seeing all campaigns</h2>
            <p><span style="font-weight:bold;">Method:</span> GET</p>
            <p><span style="font-weight:bold;">Description:</span> Get all campaign information</p>
            <p><span style="font-weight:bold;">Parameters:</span> Status - proposal, active or expired</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/campaigns/{status} </span></p>
            <hr>
          </div><!-- / See all Campaigns-->


          <div class="blog-post"> <!-- see specific campaigns -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="Seeing-specific-campaigns">Seeing a specific campaigns</h2>
            <p><span style="font-weight:bold;">Method:</span> GET</p>
            <p><span style="font-weight:bold;">Description:</span> Get information for a specific campaign</p>
            <p><span style="font-weight:bold;">Parameters:</span> Status - proposal, active or expired</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/campaigns/{status}/{id} </span></p>
            <hr>
          </div><!-- / See specific Campaigns-->


          <div class="blog-post"> <!-- Update campaigns -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="updating-campaigns">Updating a campaign</h2>
            <p><span style="font-weight:bold;">Method:</span> POST</p>
            <p><span style="font-weight:bold;">Description:</span> Update a specific campaign. Include Title, Image path, description, dateStarts, dateEnds & shopID</p>
            <p><span style="font-weight:bold;">Parameters:</span> Status - proposal, active or expired</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/campaigns/{status}/update/{id} </span></p>
            <hr>
          </div><!-- / Update campaigns -->


          <div class="blog-post"> <!-- Delete campaigns -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="deleting-campaigns">Deleting a campaign</h2>
            <p><span style="font-weight:bold;">Method:</span> GET</p>
            <p><span style="font-weight:bold;">Description:</span> Delete a specific campaign </p>
            <p><span style="font-weight:bold;">Parameters:</span> Status - proposal, active or expired</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/campaigns/{status}/delete/{id} </span></p>
            <hr>
          </div><!-- / Delete Campaigns-->

          <!-- END OF CAMPAIGNS -->

          <!-- BEGINNING OF SHOPS -->

          <div class="blog-post"> <!-- Create shops -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="creating-shops">Creating shops</h2>
            <p><span style="font-weight:bold;">Method:</span> POST</p>
            <p><span style="font-weight:bold;">Description:</span> POST shopName, openingHours, phoneNumber & shopImage </p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/shops/create </span></p>
            <hr>
          </div><!-- / Create shops-->


          <div class="blog-post"> <!-- see all shops -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="Seeing-all-shops">Seeing all shops</h2>
            <p><span style="font-weight:bold;">Method:</span> GET</p>
            <p><span style="font-weight:bold;">Description:</span> Get all shop information</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/shops </span></p>
            <hr>
          </div><!-- / See all shops-->


          <div class="blog-post"> <!-- see specific shops -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="Seeing-specific-shops">Seeing specific shops</h2>
            <p><span style="font-weight:bold;">Method:</span> GET</p>
            <p><span style="font-weight:bold;">Description:</span> Get information for a specific shop</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/shops/{id} </span></p>
            <hr>
          </div><!-- / See specific shops-->


          <div class="blog-post"> <!-- Update Shops -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="updating-shops">Updating shops</h2>
            <p><span style="font-weight:bold;">Method:</span> POST</p>
            <p><span style="font-weight:bold;">Description:</span> Update a specific shop. POST shopName, openingHours, phoneNumber & shopImage</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/shops/update/{id} </span></p>
            <hr>
          </div><!-- / Update shops -->


          <div class="blog-post"> <!-- Delete shops -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="deleting-shops">Deleting shops</h2>
            <p><span style="font-weight:bold;">Method:</span> GET</p>
            <p><span style="font-weight:bold;">Description:</span> Delete a specific shop </p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/shops/delete/{id} </span></p>
            <hr>
          </div><!-- / Delete shops-->

          <!-- END OF SHOPS -->

          <!-- BEGINNING OF OTHER OPTIONS -->

          <div class="blog-post"> <!-- /.Register User -->
            <h4 style="font-size:2em;" class="blog-post-title" id="approve-campaigns">Approving campaign proposals</h2>
            <p><span style="font-weight:bold;">Method:</span> GET</p>
            <p><span style="font-weight:bold;">Description:</span> Enter route to approve a specifiv campaign proposal</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/campaigns/proposal/activate/{id} </span></p>
            <hr>
          </div><!-- / Register User -->


          <div class="blog-post"> <!-- Sign in -->
            <h4 style="font-size:2em; margin-top:-30px;" class="blog-post-title" id="user-details">Get user details</h2>
            <p><span style="font-weight:bold;">Method:</span> GET</p>
            <p><span style="font-weight:bold;">Description:</span> Get details for a specific user</p>
            <p><span style="font-weight:bold;">Route: </span> <span style="color:red">/users/{id} </span></p>
            <hr>
          </div><!-- / Sign in-->

          <!-- END OF OTHER OPTIONS -->

        </div><!-- /.blog-main -->



      </div><!-- /.row -->

    </div><!-- /.container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://v4-alpha.getbootstrap.com/assets/js/vendor/jquery.min.js"></script>')</script>
    <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>
