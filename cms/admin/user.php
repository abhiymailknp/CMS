<?php require_once('inc/top.php');?>
  <body>
  <div id="wrapper">
        <?php require_once('inc/header.php');?>

      <div class="container-fluid body-section">
        <div class="row">
          <div class="col-md-3">
            <?php require_once('inc/sidebar.php');?>
          </div>
          <div class="col-md-9">
            <h1><i class="fa fa-users"></i> Users<small> View all users</small></h1><hr>
            <ol class="breadcrumb">
              <li><a><i class="fa fa-tachometer"></i> Dashboard</a></li>
              <li class="active "><i class="fa fa-users"></i> Users</li>
            </ol>

            <div class="row">
              <div class="col-sm-8">
                <form action="">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="form-group">
                        <select name="" id="" class="form-control">
                          <option value="delete">Delete</option>
                          <option value="author">Change to Author</option>
                          <option value="admin">Change to Admin</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-8">
                      <input type="submit" class="btn btn-success" value="Apply" name="">
                      <a href="#" class="btn btn-primary">Add new</a>
                    </div>
                  </div>
                </form>
              </div>
            </div><hr>

            <table class="table table-hover tabel-bordered tabel-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Post</th>
                    <th>Edit</th>
                    <th>Del</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Video Tutorials</td>
                    <td>12</td>
                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>

      
      <?php require_once('inc/footer.php');?>

    
  </div>  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>