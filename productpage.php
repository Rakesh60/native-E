<!-- Connect File -->
<?php
include 'admin_area\includes\connect.php';

?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <link rel="shortcut icon" href="./cart.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- My OWN CSS -->
    <link rel="stylesheet" href="./FrontPageStyle/style.css">
    <link rel="stylesheet" href="./FrontPageStyle/footer.css">


    <!-- FONT AWSOME LINK -->
    <script src="https://kit.fontawesome.com/ef36600fd6.js" crossorigin="anonymous"></script>

    <!-- Google Fonts apis -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,800;1,100;1,200&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- HEADER -->
    <header class="fixed-top">
        <!-- TOP NAV -->

        <!-- TOP NAV -->

        <div class="home-section ">
            <!-- NAV BAR -->
            <nav class="navbar  navbar-expand-lg" id="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" id="nlogo"><img src="" alt=""> NATIVE_ART</a>
                    <!-- navbar-toggler  add this class in button-->
                    <button class="navbar-toggler btn btn-outline-info" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span> <i class="fa-solid fa-bars" style="color:rgb(255, 255, 255)"></i> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown"
                                    style="background-color: #5959ff" ;>
                                    <li><a class=" dropdown-item" href="#category">products category1</a></li>
                                    <li><a class=" dropdown-item" href="#">products category</a></li>
                                    <li><a class=" dropdown-item" href="#">products category</a></li>
                                    <li><a class=" dropdown-item" href="#">products category</a></li>
                                    <li><a class=" dropdown-item" href="#">products category</a></li>

                                </ul>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Contact Us</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#" tabindex="-1">Orders <i class="fa-solid fa-bell"></i></a>
                            </li>
                        </ul>

                        <form id="formbox" class="d-flex me-5">
                            <input id="search-box" class="form-control me-2" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="search-butt">
                                <i class=" fa-solid fa-magnifying-glass" id="search-icon"></i>
                            </button>
                        </form>
                        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                            <li class="nav-item"><a href="" class="nav-link"><button class="btn btn-sm
                                        btn-light">Login <i class="fa-solid fa-user"></i></button></a></li>
                            <li class="nav-item"><a class="nav-link" href="">Cart <span><i
                                            class="fa-solid fa-cart-shopping"></i></span></a>


                            </li>

                        </ul>


                    </div>
                </div>
            </nav>

            <!-- NAV BAR END-->
        </div>
    </header>
    <!-- main -->

    <main class="my-5  ">
        <div class="container">


            <div class="category container d-flex row">
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>

                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>
                <div class="col-lg-2 col-md-4 col-sm">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="background-color: #5959ff" ;>
                            <li><a class=" dropdown-item" href="#category">products category1</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>
                            <li><a class=" dropdown-item" href="#">products category</a></li>

                        </ul>


                    </li>
                </div>


            </div>



        </div>

        <!-- PRODUCT SECTION ANDCategory  DETAIL -->

        <div class="container-fluid row">




            <div class="col-lg-2 col-md-3 col-sm-12 bg-info p-0 m-0">
                <!-- SIDE NAV -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-warning">
                        <a href="" class="nav-link text-danger">
                            <h4>BRANDS</h4>
                        </a>
                    </li>

                    <?php

$select_brands = "SELECT *FROM `brands`";
$result_brands = mysqli_query($conn, $select_brands);
// $row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
while ($row_data = mysqli_fetch_assoc($result_brands)) {
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    echo "<li class='nav-item bg-success'>
    <a href='productpage.php?brand=$brand_id' class=' nav-link text-light'>
        <h4>$brand_title</h4>
    </a>
</li>";

}
?>





                    <li class="nav-item bg-warning">
                        <a href="" class="nav-link text-danger">
                            <h4>Category</h4>
                        </a>
                    </li>
                    <?php

$select_category = "SELECT *FROM `categories`";
$result_category = mysqli_query($conn, $select_category);
// $row_data=mysqli_fetch_assoc($result_category);
// echo $row_data['category_title'];
while ($row_data = mysqli_fetch_assoc($result_category)) {
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
    echo "<li class='nav-item bg-success'>
    <a href='productpage.php?category=$category_id' class=' nav-link text-light'>
        <h4>$category_title</h4>
    </a>
</li>";

}
?>

                </ul>

            </div>


            <div class=" col-lg-10 col-md-9 col-sm-12">
                <!-- Products -->
                <div class="container row">
                <!-- Fetching products -->
                <?php

$select_query = "SELECT * FROM `products` ORDER BY rand() limit 0,4";
$result_query = mysqli_query($conn, $select_query);
// $row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $description = $row['product_description'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2  '>
    <div class='card' style='width: 18rem;'>
        <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$description </p>

            <a href='#' class='btn btn-primary'>Buy now</a>
            <a href='#' class='btn btn-primary'>Add toCart <i class=''></i> </a>

        </div>
    </div>

</div>";

}
?>


                    <!-- <div class="col-lg-3 col-md-4 col-sm-12 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="./ProductIMG.jpg&text=PRODUCT+IMAGE" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                                <a href="#" class="btn btn-primary">Add toCart <i class=""></i> </a>

                            </div>
                        </div>

                    </div> -->


































                    <!-- Card row wala div end    -->
                </div>

                <!-- col-10 wala div end -->
            </div>








        </div>




    </main>
    <footer>
        <!-- place footer here -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
            integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
        <footer class="bg-dark-gradient footer">
            <div class="footer-top">
                <div class="container">
                    <div class="footer-border-bottom pb-6 mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3">
                                <h4 class="text-white">
                                    Sign up to Get Latest Updates
                                </h4>
                            </div>
                            <div class="col-lg-4 col-xl-6">
                                <form class="d-flex flex-row mb-2 p-1 bg-white input-group">
                                    <input type="email" class="form-control rounded-0 border-0"
                                        placeholder="you@yoursite.com">
                                    <button class="btn btn-secondary rounded-0 flex-shrink-0"
                                        type="submit">Subscribe</button>
                                </form>
                            </div>
                            <div class="col-lg-4 col-xl-3">
                                <div class="text-lg-end text-white">
                                    <span class="h6">Call Us On</span><br>
                                    <span class="h3">1-800-222-000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 my-4">
                            <div class="mb-4">
                                <img src="static/img/logo-light.svg" title="" alt="">
                            </div>
                            <div class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod.</div>
                            <div class="nav footer-socila-icon">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-2 my-4">
                            <h5 class="text-white h6 mb-4">Customer</h5>
                            <ul class="list-unstyled white-link footer-links">
                                <li>
                                    <a href="#">Get Corpo</a>
                                </li>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                                <li>
                                    <a href="#">Help center</a>
                                </li>
                                <li>
                                    <a href="#">Pricing</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-2 my-4">
                            <h5 class="text-white h6 mb-4">Product</h5>
                            <ul class="list-unstyled white-link footer-links">
                                <li>
                                    <a href="#">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Join our team</a>
                                </li>
                                <li>
                                    <a href="#">Elements</a>
                                </li>
                                <li>
                                    <a href="#">Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-2 my-4">
                            <h5 class="text-white h6 mb-4">Company</h5>
                            <ul class="list-unstyled white-link footer-links">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                                <li>
                                    <a href="#">Legal &amp; Security</a>
                                </li>
                                <li>
                                    <a href="#">Terms of use</a>
                                </li>
                                <li>
                                    <a href="#">We're hiring!</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-3 my-4">
                            <h5 class="text-white h6 mb-4">Company</h5>
                            <div class="white-link">
                                <div class="d-flex pb-3">
                                    <div class="avatar avatar-lg rounded">
                                        <img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                                    </div>
                                    <div class="col ps-3">
                                        <small class="text-white-65">29 March 2021</small>
                                        <h6 class="font-w-500 h6 m-0"><a class="text-white" href="#">Rakesh Kumar
                                                Gupta</a></h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="avatar avatar-lg rounded">
                                        <img class="rounded-circle"
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png" title="" alt="">
                                    </div>
                                    <div class="col ps-3">
                                        <small class="text-white-65">29 March 2021</small>
                                        <h6 class="font-w-500 h6 m-0"><a class="text-white" href="#">RajKUmar Behera</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom footer-border-top light py-3">
                <div class="container text-center">
                    <p class="m-0">© 2021 copyright <a href="#" class="text-reset">pxdraft</a></p>
                </div>
            </div>
        </footer>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>