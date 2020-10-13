<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-brand">
                <a href="index.php">Tech-Duniya</a>
              </div>
          </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">      <i class="fa fa-list-alt"></i> Categories <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                  $query = "SELECT * FROM categories ORDER BY id DESC" ;
                  $run = mysqli_query($con,$query);
                  if (mysqli_num_rows($run)) {
                     while($row = mysqli_fetch_array($run))
                     {
                      $category = ucfirst($row['category']);//yellow colored category is database name.
                      $id = $row['id'];
                      echo "<li><a href='index.php?cat=".$id."'>$category</a></li>";
                     }
                   } 
                   else{
                    echo "<li><a href='#'>No Categories Available.</a></li>";
                   }
                ?>
                
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-phone"></i> Contact Us</a></li>
          </ul>
        </div><!-- /.navbar-c></h1>ollapse -->
      </div><!-- /.container-fluid -->
    </nav>