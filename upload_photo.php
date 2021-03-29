
    <?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;
}

?>

<?php require 'nav.php' ?>
<!doctype html>
<html>
  <head>
    <?php
    include("config.php");
 
    if(isset($_POST['but_upload'])){
       $maxsize = 99942880; // 5MB
 
       $name = $_FILES['file']['name']; // storing file name
       $title=$_POST["title"];
       $target_dir = "photography/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("jpg","jfif","png");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO photography(`name`,`location`,`title`) VALUES('".$name."','".$target_file."','$title')";

              mysqli_query($con,$query);
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> Your Photographs has been posted, will be displayed shortly.
              <p>Your Photographs will be displayed only after manual approval.</p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div> ';
            }
          }

       }else{
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Invalid file extension
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
       }
 
     } 
     ?>
  </head>
  <body>
  <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb5.jpg);">
    <div class="bradcumbContent">
        <h2>Uploaf Photographs</h2>
    </div>
</div>


  <div class="jumbotron bg-dark my-4">
    
    <h1 class="display-4 text-secondary" style="font-family: 'Merriweather', serif; ">Upload your Photographs</h1>
    
    <form method="post" action="upload_photo.php" enctype='multipart/form-data'>
        <div class="form-group">
      <label for="title " class="text-secondary">Title</label>
      <input type="text" class="form-control" name="title" id="title" aria-describedby="title" placeholder="Enter the title" required>
      <small id="title" class="form-text text-muted text-secondary">Enter the title less than 15 word's</small>
    </div>
        <input class="text-warning" type='file' name='file' />
        <input type='submit' value='Upload' name='but_upload'>
      </form>
    
  </div>

  </body>
</html>



    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  
</html>
<?php require 'footer.php' ?>