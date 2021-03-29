<?php

session_start();

if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
  $loggedin=true;
  
}
else{

  $loggedin=false;
}




  

?>
    
    
    <?php
    require 'nav.php'
    ?>
    <?php

if($loggedin){
  echo'<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Please Login Here!</strong> You should logged in first to upload your content.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if(!$loggedin){
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Welcome '.$_SESSION['username'] .'</strong> Let upload your content chek out the content
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
' ;
}
?>
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/start1.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">GITA<span></span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Tested-Selected-Initiated</p>
                   
                </div>
                <!-- Big Text -->
                <h2 class="big-text"></h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/start2.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">GITA<span>GITA</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Excellence Unbridled</p>
                    
                </div>
                <!-- Big Text -->
                <h2 class="big-text"></h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/start3.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">GITA<span>90's</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Bhubaneswar</p>
                    
                </div>
                <!-- Big Text -->
                <h2 class="big-text">GITA</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <div class="bg-gradients"></div>

        <!-- Slide Down -->
        <!--  -->
    </section>
    <!-- ##### Hero Area End ##### -->


     <!-- ##### Music Artists Area Start ##### -->
     <div class="musica-music-artists-area d-flex flex-wrap clearfix" style="display: none;">
        <!-- Music Search -->
        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <a href="music.php"><h2>Music</h2></a>
                <h4>Search for the best music</h4>
            </div>
        </div>

        <!-- Artists Search -->
        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/bg-1.jpg);">
            <!-- Content -->
            <div class="music-search-content">
            <a href="art.php"><h2>Art</h2></a>
                <h4>Search for the best art</h4>
            </div>
        </div>
        <div class="music-search bg-img bg-overlay2 wow fadeInUp my-2" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <div class="music-search-content">
            <a href="video.php"><h2>Videos</h2></a>
                <h4>Search for the best Videos</h4>
            </div>
        </div>
        <div class="music-search bg-img bg-overlay2 wow fadeInUp my-2" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <div class="music-search-content">
            <a href="photography.php"><h2>Photography</h2></a>
                <h4>Search for the best Photographs</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->

   
    <!-- ##### Music Player Area Start ##### -->
    <div class="music-player-area section-padding-100" style="display: none;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="music-player-slides owl-carousel">

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/mp1.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Artist’s/Band Name</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/mp2.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Artist’s/Band Name</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/mp3.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Artist’s/Band Name</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/mp4.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Artist’s/Band Name</h5>
                                    <p>Love is all Around</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Player Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/bg-4.jpg);"></div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h6>Featured album</h6>
                                    <h4>Love is all Around</h4>
                                </div>
                                <div class="album-buy-now">
                                    <a href="music.php" class="btn musica-btn">Go to Music Section</a>
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music active">
                                        <h6>On My Way</h6>
                                        <audio preload="auto" controls>
                                            <source src="music/Alan_Walker_2C_Sabrina_Carpenter__26_Farruko_-_On_My_Way__28_cover_by_J.Fla__29.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Best Part</h6>
                                        <audio preload="auto" controls>
                                            <source src="music/Ed_Sheeran_-_Best_Part_Of_Me__28feat._YEBBA_29__5BOfficial_Lyric_Video_5D.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Something Just Like This</h6>
                                        <audio preload="auto" controls>
                                            <source src="music/The_Chainsmokers__26_Coldplay_-_Something_Just_Like_This__28_cover_by_J.Fla__29.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Bring back the love</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Hey, Mister Dj - Remix</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Message to my future self</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>
                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Drop that beat</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Hey, Mister Dj</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Message to my future self</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Bring back the love</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Hey, Mister Dj - Remix</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Message to my future self</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/dummy-audio.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>

                            <!-- Now Playing -->
                            <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>Playing</p>
                                    <h6>Drop that beat</h6>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->
    

   

 <?php
 require 'footer.php'
 ?>
</body>


</html>