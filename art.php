<?php require 'nav.php' ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/art.css">
        


      
  
</head>
<body>
    
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb5.jpg);">
    <div class="bradcumbContent">
        <h2>Art</h2>
    </div>
</div>
        
    <div class="swiper-container my-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="imgBX">
                  <img src="img/bg-img/bg-1.jpg"><!-- //300X400 -->
              </div>
             
              
          </div>
          <div class="swiper-slide">
            <div class="imgBX">
                <img src="img/bg-img/bg-2.jpg">
            </div>
            
            
        </div>
        <div class="swiper-slide">
            <div class="imgBX">
                <img src="img/bg-img/bg-3.jpg">
            </div>
            
        </div>
        <div class="swiper-slide">
            <div class="imgBX">
                <img src="img/bg-img/bg-4.jpg">
            </div>
            
            
        </div>
        <div class="swiper-slide">
            <div class="imgBX">
                <img src="img/bg-img/bg-4.jpg">
            </div>
           
        </div>
        <div class="swiper-slide">
            <div class="imgBX">
                <img src="img/bg-img/bg-2.jpg">
            </div>
           
            
        </div>
        <div class="swiper-slide">
            <div class="imgBX">
                <img src="img/bg-img/bg-2.jpg">
            </div>
            <!-- <div class="details">
                <h3>John Doe<br><span>Web Developer</span></h3>
            </div> -->
            
        </div>
          
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>

      <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Art <span class="change">Gallery</span></h3>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="0">
                        <img src="musicImg/1.jpg"> 

                    </a>
                    <h4>Lorem ipsum</h4>
                    <p>lorem ipsum-2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="1">
                        <img src="musicImg/2.jpg">

                    </a>
                    <h4>Lorem ipsum</h4>
                    <p>lorem ipsum-2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="2">
                        <img src="musicImg/3.jpg">

                    </a>
                    <h4>Lorem ipsum</h4>
                    <p>lorem ipsum-2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster"data-switch="3">
                        <img src="musicImg/4.jpg">

                    </a>
                    <h4>Lorem ipsum</h4>
                    <p>lorem ipsum-2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="4">
                        <img src="musicImg/5.jpg">

                    </a>
                    <h4>Lorem ipsum</h4>
                    <p>lorem ipsum-2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="5">
                        <img src="musicImg/6.jpg">

                    </a>
                    <h4>Lorem ipsum</h4>
                    <p>lorem ipsum-2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster"data-switch="6">
                        <img src="musicImg/7.jpg">

                    </a>
                    <h4>Lorem ipsum</h4>
                    <p>lorem ipsum-2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="7">
                        <img src="musicImg/8.jpg">

                    </a>
                    <h4>Lorem ipsum</h4>
                    <p>lorem ipsum-2010</p>
                </div>

            </div>



        
      
    
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script src="js/swiper.min.js">

</script>
<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
<?php require 'footer.php' ?>
</html>