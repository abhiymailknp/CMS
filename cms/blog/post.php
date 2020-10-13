<?php require_once('inc/top.php');?>
<body>
  <?php require_once('inc/header.php');?>

  <?php
    if(isset($_GET['post_id']))
    {
      $post_id = $_GET['post_id'];
      $query = "Select  * from posts where status = 'publish' and id = '$post_id'";
      $run = mysqli_query($con,$query);
      if (mysqli_num_rows($run) > 0){
         $row  = mysqli_fetch_array($run);
         $id = $row['id'];
         $date = getdate($row['date']);
         $day = $date['mday'];
         $month = $date['month'];
         $year = $date['year'];
         $title = $row['title'];
         $author = $row['author'];
         $author_image = $row['author_image'];
         $image = $row['image'];
         $categories = $row['categories'];
         $post_data = $row['post_data'];
       } 
    }

  ?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post"  style="margin-top: 75px">
            <div class="row">
              <div class="col-md-2 post-date">
                <div class="day"><?php echo $day; ?></div>
                <div class="month"><?php echo $month; ?></div>
                <div class="year"><?php echo $year; ?></div>
              </div>
              <div class="col-md-8 post-title">
                <h2><?php echo $title; ?>
                <p>Written By: <span> <?php echo ucfirst($author); ?></span></p>
              </div>
              <div class="col-md-2 profile-picture">
                <img src="images/<?php echo $author_image; ?>" class="img-circle">
              </div>
            </div>
            <a href="#"><img src="images/<?php echo $image; ?>"></a>  
            <p class="description">
              <?php echo $post_data; ?>
            </p>
            <div class="bottom">
              <span class="first"><i class="fa fa-folder"></i><a><?php echo ucfirst($categories); ?></a></span>
              <span class="second"><i class="fa fa-comment"></i><a>Comments</a></span>
            </div></div>
            <div class="related-posts">
              <h2>Related Posts</h2><hr>
              <div class="row">
                <div class="col-sm-4">
                  <a href="#">
                    <img src="images/a.png" alt="slider1">
                    <h4>This is the heading for the post 1</h4>
                  </a>
                </div>
                <div class="col-sm-4">
                  <a href="#">
                    <img src="images/a.png" alt="slider2">
                    <h4>This is the heading for the post 1</h4>
                  </a>
                </div>
                <div class="col-sm-4">
                  <a href="#">
                    <img src="images/a.png" alt="slider3">
                    <h4>This is the heading for the post 1</h4>
                  </a>
                </div>                  
              </div>
            </div>
            <div class="author">
              <div class="row">
                <div class="col-sm-3">
                  <img src="images/india.png" alt="Profile Image" class="img-circle">
                </div>
                <div class="col-sm-9">
                  <h3>Abhishek Gupta</h3>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                </div>
              </div>
            </div>
            <div class="comment">
              <h3>Comments</h3>
              <hr>
              <div class="row single-comment">
                <div class="col-sm-2">FOR IMAGE</div>
                <div class="col-sm-10">
                  <h4> Abhishek Gupta</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
              </div>
            </div>
            <div class="comment-box">
              <div class="row">
                <div class="col-xs-12">
                  <form action="">
                    <div class="form-group">
                      <label for="full-name">Full Name:*</label>
                      <input type="text" id="full-name" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea id="comment" cols="30" rows="10" placeholder="Comment Here" class="form-control" style="resize: none;"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit Comment">
                  </form>
                </div>
              </div>
            </div>
        </div>
        
        <div class="col-md-4" style="margin-top: 55px">
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