<?php require_once('inc/top.php');?>
  <body>
    <?php require_once('inc/header.php');?>
    <div class="jumbotron animated fadeInLeft">
      <div class="container">
        <div id="details">
          <h1>Tech<span>Duniya</span></h1>
          <p>Latest and Trending Tech News</p>
        </div>
      </div>
      <img src="images/india.png">
    </div>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12"></div>
              <div class="col-md-12 contact-form">
                <h2>Contact Form</h2><hr>
                <form action="">
                  <div class="form-group">
                    <label for="full-name"> Full Name* :</label>
                    <input type="text" id="full-name" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="email"> Email* :</label>
                    <input type="text" id="email" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label for="website"> Website:</label>
                    <input type="text" id="website" class="form-control" placeholder="Website">
                  </div>
                  <div class="form-group">
                    <label for="message"> Message :</label>
                    <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Your Message Should be here."></textarea>
                  </div>
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <?php require_once('inc/sidebar.php');?>   
          </div>

        </div>
      </div>
    <!--Footer Starts here-->
    <?php require_once('inc/footer.php');?>
    <!--Footer  Ends Here-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 