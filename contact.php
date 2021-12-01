<?php

include 'header.php';

if (!isset($_SESSION["sentSuccess"])){
    $_SESSION["sentSuccess"] = false;
}

if (!isset($_SESSION["sentError"])){
    $_SESSION["sentError"] = false;
}

?>
<head>
    <title>Contact Me!</title>
</head>
<?php
  date_default_timezone_set('America/Chicago');
  $date = date('m/d/Y', time());
  $time = date('G:m:s', time());
?>
  <div class="row">
      <div class="col-sm-4">
          <hr>
          <div align="center"><h2>Contact Me</h2></div>
      </div>
      <div class="col-sm-4">
          <hr>
          <form method="post" action="contactHandler.php">
              <table>
                  <div class="form-group" align="left">
                      <label>Email: </label>
                      <input type="email" class="form-control" name="email" placeholder="Enter Title" max=70 required>
                  </div>
                  <div class="form-group" align="left">
                      <label>Subject: </label>
                      <input type="text" class="form-control" name="subject" placeholder = "Enter Subject" required>
                  </div>
                  <div class="form-group" align="left">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="5" id="content" name="comment" placeholder="Enter Comment"></textarea>
                  </div>
                  <div class="form-group" align="left"><input type="submit" value="Send" class="btn btn-warning btn-block">
                  </div>
              </table>
          </form>
      </div>
      <div class="col-sm-4">
          <hr>
          <?php
            if ($_SESSION["sentSuccess"] == true){
                echo "<div class='alert alert-success'>
                        <strong>Success!</strong> Email Sent.
                    </div>";
                    
                $_SESSION["sentSuccess"] = false;
            } elseif ($_SESSION["sentError"] == true){
                echo "<div class='alert alert-danger'>
                        <strong>Error!</strong>Email didn't sent! Please try again.
                    </div>";
                    
                $_SESSION["sentError"] = false;
            }
          ?>
      </div>
  </div>
<?php include 'footer.php'; ?>
