
<?php


?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJEK PWPB</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleR.css">

</head>
<body>
    <div class="header">
        <!-- awal navbar -->
        <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
          <div class="container-fluid">
           <b><a class="navbar-brand" href="#"><img src="logo2.png" style="width: 50px;" alt="">BEDEBAH</a></b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <b> <a class="nav-link active" aria-current="page" href="#">Home</a></b>
                </li>
                <li class="nav-item">
               <b>  <a class="nav-link" href="login,php">Login</a></b>
                </li>
               
                <li class="nav-item">
                 <b><a class="nav-link disabled" aria-disabled="true"></a></b>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
    <!-- akhir navbar -->
      </div>
      <div class="content">
        <!--awal carousel-->
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="carousel-gmbr" src="kartun disney.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img class="carousel-gmbr" src="film kiko.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img class="carousel-gmbr" src="film.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
      </div>
    </div>
     <!--akhir carousel-->
<h1><b><center>LIST FILM FAVORIT</center></b></h1>

  </div>
  <div class="footer">

    <!--awal berita-->

  <div class="row d-flex justify-content-center mb-4">
    <div class="card mb-3 col-md-3 ">
      <div class=" g-0">
        <div class="">
          <img src="WISH.jpeg" style="width: 100%;" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="">
          <div class="card-body">
            <h5 class="card-title">FAVORIT </h5>
            <p class="card-text">Film yang banyak digemari</p>
            <p class="card-text"><small class="text-body-secondary">Film ini banyak diminati oleh kalangan anak kecil </small></p>
            
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 col-md-3 " >
      <div class=" g-0">
        <div class="">
          <img src="film kiko.jpg" style="width: 100%;" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="">
          <div class="card-body">
            <h5 class="card-title">FILM </h5>
            <p class="card-text">KIKO THE ADVANTURE</p>
            <p class="card-text"><small class="text-body-secondary">film ini banyak digemari oleh banyak anak kecil yang yang menonton </small></p>
            
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 col-md-3" >
      <div class=" g-0">
        <div class="">
          <img src="toystory.jpg" style="width: 100%;" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="">
          <div class="card-body">
            <h5 class="card-title">FILM </h5>
            <p class="card-text">THE TOY STORY</p>
            <p class="card-text"><small class="text-body-secondary">film ini banyak digemari oleh banyak anak kecil yang yang menonton </small></p>
            
          </div>
        </div>
      </div>
    </div>

   
 
    <!--akhir berita-->

    <!--awal login-->
    <div  class="row justify-content-center">
    <div class ="col-md-4 mb-5">
    <form>
      <div class="mb-3">
       <B> <label for="exampleInputEmail1" class="form-label">LOGIN</label></B>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">masukkan email anda disini</div>
      </div>
      <div class="mb-3">
       <b> <label for="exampleInputPassword1" class="form-label">Password</label></b>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<!--tag copyriht-->
<section>
<footer class="bg-primary mt-5">
  <p class="text-white text-center">Created by
  <a href="https://www.tiktok.com/@roifpratama_?is_from_webapp=1&sender_device=pc" class="text-white"> Roif arhab</a>
  </p>
</footer>
</section>
  </div>
  <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>
