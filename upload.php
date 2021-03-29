

    <?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;
}

?>

<?php require 'nav.php' ?>
<body>
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb5.jpg);">
    <div class="bradcumbContent">
        <h2>Uploads</h2>
    </div>
</div>
    




    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-md-3  my-4">
                <div class="card a" style="width: 18rem;">
                    <img src="img/bg-img/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-success">Audio</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <a href="upload_audio.php" class="btn btn-outline-success">Upload Your Audio</a>
                    </div>
                </div>
            </div> 
           
            <div class="col-md-3 my-4  ">
                <div class="card a" style="width: 18rem;">
                    <img src="img/bg-img/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title text-danger">Art</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <a href="upload_art.php" class="btn btn-outline-danger">Upload Your Art</a>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 my-4  ">
                <div class="card a" style="width: 18rem;">
                    <img src="img/bg-img/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title text-warning">Video</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <a href="upload_video.php" class="btn btn-outline-warning">Upload Your Videos</a>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 my-4  ">
                <div class="card a" style="width: 18rem;">
                    <img src="img/bg-img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title text-primary">Photography</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <a href="upload_photo.php" class="btn btn-outline-primary">Upload Your Photographs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

<?php require 'footer.php' ?>
</html>`;
`