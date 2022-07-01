<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">WebDesigns</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contactUs">Contact Us</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>


        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/img1.jpg" alt="Los Angeles" >
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>   
                </div>
                <div class="carousel-item">
                <img src="images/img2.jpg" alt="Chicago"  >
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>   
                </div>
                <div class="carousel-item">
                <img src="images/img3.jpg" alt="New York" >
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>   
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
   
        <div class="container-fluid">
         <section class="my-5" >
            <div class="text-center py-5" >
                <h3 >About Us</h3>
            </div>
            <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <img src="images/aboutUs.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12  py-4">
                <h4>Web Designs</h4>
                <p class="py-3">
                  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                <br>
                <a href="about.php" style="text-decoration: underline;">Know More</a>
                </p>
            </div>
            </div>
         </section>
        </div>

        <div class="container-fluid" id="services">
         <section class="my-5" >
            <div class="text-center py-5" >
                <h3 >Our Services</h3>
            </div>
            <div class="row services">
            <div class="col-lg-4 col-md-4 col-sm-12" >             
                    <div class="container">
                    <div class="card" >
                        <img class="card-img-top" src="images/guide.jpg" alt="Card image" style="height:50vh">
                        <div class="card-body">
                        <h4 class="card-title">Guides</h4>
                        <p class="card-text">Some example text some example text...</p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                        </div>
                    </div>
                    </div> 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12" >             
                    <div class="container">
                    <div class="card" >
                        <img class="card-img-top" src="images/template.jpg" alt="Card image" style="height:50vh">
                        <div class="card-body">
                        <h4 class="card-title">Templates</h4>
                        <p class="card-text">Some example text some example text...</p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                        </div>
                    </div>
                    </div> 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12" >             
                    <div class="container">
                    <div class="card">
                        <img class="card-img-top" src="images/custom.jpg" alt="Card image" style="height:50vh">
                        <div class="card-body">
                        <h4 class="card-title">Customizations</h4>
                        <p class="card-text">Some example text some example text...</p>
                        <a href="#" class="btn btn-primary stretched-link">See More</a>
                        </div>
                    </div>
                    </div> 
            </div>
            </div>
         </section>
        </div>

        <div class="container-fluid" id="contactUs">
            <div class="text-center py-5" >
               <h3 >Contact Us</h3></div>
               <div class="w-50 m-auto">
               <form action="userinfo.php" method="POST">
                    <div class="form-group ">
                      <label >Name</label>
                      <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group ">
                      <label >Email</label>
                      <input name="email" type="text" class="form-control">
                </div>
                <div class="form-group ">
                      <label >Mobile</label>
                      <input name="mobile" type="text" class="form-control">
                </div>
                <div class="form-group ">
                      <label> Comment</label>
                      <textarea name="comment" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
        </div><br><br>
         
        <footer>
            <p class="p-4 bg-dark text-white text-center">@WebDesign</p>
        </footer>


    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>