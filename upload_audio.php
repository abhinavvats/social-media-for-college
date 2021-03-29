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
      
      $name = $_FILES['file']['name'];
      $title=$_POST["title"];
      $target_dir = "audio/";
      $target_file = $target_dir . $_FILES["file"]["name"];
      
      // Select file type
      $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
      // Valid file extensions
      $extensions_arr = array("mp3");
      
      // Check extension
      if( in_array($videoFileType,$extensions_arr) ){
        
        // Check file size
        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
          echo "File too large. File must be less than 5MB.";
        }else{
          // Upload
          if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
            // Insert record
            $query = "INSERT INTO audio(`name`,`location`,`title`,`date`) VALUES('".$name."','".$target_file."','$title',current_timestamp())";
            
            mysqli_query($con,$query);
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your Audio has been posted, will be displayed shortly.
            <p>Your Audio will be displayed only after manual approval.</p>
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
        <h2>Upload Audio</h2>
    </div>
</div>
  <div class="jumbotron bg-dark my-5">
    
  <h1 class="display-4 text-secondary" style="font-family: 'Merriweather', serif; ">Upload your Audio</h1>
  <form method="post" action="upload_audio.php" enctype='multipart/form-data'>
      <div class="form-group">
    <label for="title " class="text-secondary">Title</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="title" placeholder="Enter the title" required>
    <small id="title" class="form-text text-muted text-secondary">Enter the title less than 15 word's</small>
  </div>
      <input class="text-success" type='file' name='file' />
      <input type='submit' class="btn btn-success" value='Upload' name='but_upload'>
      
    </form>
    <br>
    <br>
   
  
</div>

  </body>
</html>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  
</html>
<?php require 'footer.php' ?>