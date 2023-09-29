<html>
    <head>
        <title></title>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=League+Gothic&family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php include'nav.php'?>


    <!-- carousel -->
    
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img2.jpg" alt="Los Angeles" class="d-block" style="width:100%" height="88%">
    </div>
    <div class="carousel-item">
      <img src="img7.jpg" alt="Chicago" class="d-block" style="width:100%"height="88%">
    </div>
    <div class="carousel-item">
      <img src="img5.jpg" alt="New York" class="d-block" style="width:100%"height="88%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">About us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="img3.jpg"  class="image">
            </div>
            <div class="col-lg-6 col-md-6 col-12" >
                <h1 class="display-4">This is a website</h1>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas id possimus est explicabo iusto harum atque aut autem porro! Molestiae placeat vero perspiciatis voluptatibus commodi eligendi amet inventore deleniti voluptatum?</p>

                <a href="about.php" class="btn btn-success">Check more</a>
            </div>
         </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">Our Services</h2>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class = "col-lg-4 col-md-4 col-12" >
             <div class="card" >
                 <img class="card-img-top" src="img4.jpg" >
                 <div class="card-body">
                    <h4 class="card-title">Beautiful Nature</h4>
                    <p class="card-text">Some example text.</p>
                     <a href="#" class="btn btn-primary">See Profile</a>
                </div>
             </div>
        </div>

        <div class = "col-lg-4 col-md-4 col-12" >
             <div class="card" >
                 <img class="card-img-top" src="img4.jpg" >
                 <div class="card-body">
                    <h4 class="card-title">Beautiful Nature</h4>
                    <p class="card-text">Some example text.</p>
                     <a href="#" class="btn btn-primary">See Profile</a>
                </div>
             </div>
        </div>

        <div class = "col-lg-4 col-md-4 col-12" >
             <div class="card" >
                 <img class="card-img-top" src="img4.jpg" >
                 <div class="card-body">
                    <h4 class="card-title">Beautiful Nature</h4>
                    <p class="card-text">Some example text.</p>
                     <a href="#" class="btn btn-primary">See Profile</a>
                </div>
             </div>
        </div>

    </div>

</div>

</section>

<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">Gallery</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img1.jpg" class="img-fluid pb-4" >    
        </div>
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img2.jpg" class="img-fluid pb-4" >    
        </div>
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img3.jpg" class="img-fluid pb-4" >    
        </div>
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img4.jpg" class="img-fluid pb-4" >    
        </div>
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img5.jpg" class="img-fluid pb-4" >    
        </div>
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img6.jpg" class="img-fluid pb-4" >    
        </div>
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img2.jpg" class="img-fluid pb-4" >    
        </div>
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img3.jpg" class="img-fluid pb-4" >    
        </div>
        <div class = "col-lg-4 col-md-4 col-12" >  
            <img src="img1.jpg" class="img-fluid pb-4" >    
        </div>

     </div>

</section>

<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">Contact</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="info.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" autocomplete="off">

            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control"autocomplete="off">

            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control"autocomplete="off">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea type="text" name="comment" class="form-control"></textarea>
               
            </div>
            <div><br>
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>


    <?php include'footer.php'?>


    </body>
</html>