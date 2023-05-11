<?php
include 'admin_area\includes\connect.php';
include 'funcions\common_function.php';

?>
<!doctype html>
<html lang="en">

<head>
    <title>NATIVE_ART</title>
    <link rel="icon" href="./indeximages/titleicon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- My OWN CSS -->
    <link rel="stylesheet" href="./FrontPageStyle/style.css">
    <link rel="stylesheet" href="./FrontPageStyle/footer.css">
    <link rel="stylesheet" href="./rajstyle.css">
    <link rel="stylesheet" href="./responsive.css">

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
    <!-- HEADER -->
    <header class="fixed-top">
        <!-- TOP NAV -->

        <!-- TOP NAV -->

        <div class="home-section ">
            <!-- NAV BAR -->
            <nav class="navbar  navbar-expand-lg" id="navbar">
                <div class="container-fluid">
                    <a class="navbar-" href="#" id="nlogo"><img src="" alt=""> NATIVE_ART</a>
                    <!-- navbar-toggler  add this class in button-->
                    <button class="navbar-toggler btn btn-outline-info" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span> <i class="fa-solid fa-bars" style="color:rgb(255, 255, 255)"></i> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home <i
                                        class="fa fa-house"></i></a>
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
                                    <?php getdropdowncategory();?>
                                </ul>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Contact Us <i
                                        class="fa-solid fa-phone"></i></a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#" tabindex="-1">Orders <i class="fa-solid fa-bell"></i></a>
                            </li>
                        </ul>

                        <form id="formbox" class="d-flex me-5" action="search_product.php" method="get">
                            <input id="search-box" name="search_data" class="form-control me-2" type="search"
                                placeholder="Search" aria-label="Search">
                            <button name="search_data_products" type="submit" value="search" class="search-butt">

                                <i class=" fa-solid fa-magnifying-glass" id="search-icon" class="search-butt"></i>
                            </button>
                            <!-- <input type="submit" class="btn btn-danger" value="search" name="search_data_products"> -->
                        </form>
                        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                            <li class="nav-item"><a href="./Final/login.php" class="nav-link"><button class="btn btn-sm
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

    <main class="mt-5">
        <!-- RAJKUMAR ADD HERE -->
        <section id="home" class="home overflow-hidden ">
            <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="home-banner home-banner-1">
                            <div class="home-banner-text">
                                <h1>Women</h1>
                                <h2>32% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-primary text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-2">
                            <div class="home-banner-text">
                                <h1>Women</h1>
                                <h2>42% Discount For This Season</h2>
                                <a href="#" class="btn  btn-outline-primary text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-3">
                            <div class="home-banner-text">
                                <h1>Women</h1>
                                <h2>52% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-primary text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-4">
                            <div class="home-banner-text">
                                <h1>Women</h1>
                                <h2>52% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-primary text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-5">
                            <div class="home-banner-text">
                                <h1>Women</h1>
                                <h2>52% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-primary text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="home-banner home-banner-6">
                            <div class="home-banner-text">
                                <h1>Women</h1>
                                <h2>52% Discount For This Season</h2>
                                <a href="#" class="btn btn-outline-primary text-upparcase mt-4">Our Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <span class="ti-angel-left slider-icon">

                        </span>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <span class="ti-angel-right slider-icon">
                        </span>
                        <span class="visually-hidden">Next</span>
                </button>
            </div>



        </section>


        <section id="counter">

            <section class="counter mt-4">
                <div class="container">
                    <div class="row text-center">
                        <h2>Our Sales </h2>
                        <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
                            <h2>
                                <span id="count1"></span>+
                            </h2>
                            <p>Orders</p>
                        </div>
                        <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
                            <h2>
                                <span id="count2"></span>+
                            </h2>
                            <p>Products</p>
                        </div>
                        <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
                            <h2>
                                <span id="count3"></span>+
                            </h2>
                            <p>Delivered</p>
                        </div>
                        <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
                            <h2>
                                <span id="count4"></span>K+
                            </h2>
                            <p>Customers</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="book-food">
            <div class="book-food mt-4">
                <div class="container book-food-text">
                    <div class="row text-center">
                        <div class="col-lg-9 col-md-12">
                            <!-- <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2> -->
                        </div>
                        <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="service">
            <div class="pt- pb-4">
                <div class="container">
                    <div class="row">
                        <div class="section_head col-sm-12">
                            <h4>Whyee<span>Us ?</span></h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse laborum magni accusantium
                                vel quasi placeat voluptatibus distinctio perspiciatis excepturi dolor iusto ea culpa,
                                consectetur atque ipsam mollitia officia ducimus numquam.</p>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <span class="icon feature_box_col_one">
                                    <i class="fa-solid fa-cart-shopping fa-bounce"></i>
                                </span>
                                <h5>Lorem, ipsum.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat amet ut dicta sint
                                    nulla aliquam.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <span class="icon feature_box_col_two">
                                    <i class="fa-solid fa-truck-fast fa-beat-fade"></i>
                                </span>
                                <h5>Lorem, ipsum.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat amet ut dicta sint
                                    nulla aliquam.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <span class="icon feature_box_col_three">
                                    <i class="fa-solid fa-wallet fa-beat"></i>
                                </span>
                                <h5>Lorem, ipsum.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat amet ut dicta sint
                                    nulla aliquam.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <span class="icon feature_box_col_four">
                                    <i class="fa-solid fa-envelope-circle-check fa-shake"></i>
                                </span>
                                <h5>Lorem, ipsum.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat amet ut dicta sint
                                    nulla aliquam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="button" id="scroolup">
            <a href="#home"><i class="fa-solid fa-arrow-up fa-bounce"></i></a>
        </div>
        <!-- TRENDING PRODUCTS NEW ONLY -->
        <div class="container bg-white">

            <div class="row">
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://images.pexels.com/photos/54203/pexels-photo-54203.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-red">sale</div>
                    <div class="title pt-4 pb-1">Winter Sweater</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span>
                    </div>
                    <div class="price">$ 60.0</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://images.pexels.com/photos/6764040/pexels-photo-6764040.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-black">out of stock</div>
                    <div class="title pt-4 pb-1">Denim Dresses</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span>
                    </div>
                    <div class="price">$ 55.0</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1"> Empire Waist Dresses</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span>
                    </div>
                    <div class="price">$ 70.0</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://images.pexels.com/photos/6311392/pexels-photo-6311392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="title pt-4 pb-1">Pinafore Dresses</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span>
                    </div>
                    <div class="price">$ 60.0</div>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://images.pexels.com/photos/54203/pexels-photo-54203.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-red">sale</div>
                    <div class="title pt-4 pb-1">Winter Sweater</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span>
                    </div>
                    <div class="price">$ 60.0</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://images.pexels.com/photos/6764040/pexels-photo-6764040.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-black">out of stock</div>
                    <div class="title pt-4 pb-1">Denim Dresses</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span>
                    </div>
                    <div class="price">$ 55.0</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="title pt-4 pb-1"> Empire Waist Dresses</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span>
                    </div>
                    <div class="price">$ 70.0</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://images.pexels.com/photos/6311392/pexels-photo-6311392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Pinafore Dresses</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span>
                    </div>
                    <div class="price">$ 60.0</div>
                </div>
            </div>
        </div>

        <!-- TRENDING PRODUCTS NEW ONLY end -->




        <!-- TRENDING PRODUCTS START -->
        <div class="container mt-5 mb-5">

            <div class="d-flex justify-content-center row">

                <div class="col-md-10" id="category">
                    <div class="container text-center">
                        <h1 style="text-decoration: underline;">Trending Products</h1>
                    </div>
                    <div class="row p-2 bg-white border rounded">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                src="./ancient-gd05e0fde5_1280.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant olap shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light
                                    weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For
                                    men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable.<br><br>
                            </p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">&#8377;13.99</h4><span class="strike-text ">&#8377;20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm"
                                    type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2"
                                    type="button">Add to wishlist</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                src="./ancient-gd05e0fde5_1280.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light
                                    weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For
                                    men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable.<br><br>
                            </p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">&#8377;14.99</h4><span class="strike-text">&#8377;20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm"
                                    type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2"
                                    type="button">Add to wishlist</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                src="https://i.imgur.com/Bf4dIaN.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant ruybi shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div><span>123</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light
                                    weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For
                                    men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable.<br><br>
                            </p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">&#8377;13.99</h4><span class="strike-text">&#8377;20.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm"
                                    type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2"
                                    type="button">Add to wishlist</button></div>
                        </div>
                    </div>
                    <div class="row p-2 bg-white border rounded mt-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                src="https://i.imgur.com/HO8e9b8.jpg"></div>
                        <div class="col-md-6 mt-1">
                            <h5>Quant tinor shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div><span>110</span>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light
                                    weight</span><span class="dot"></span><span>Best finish<br></span></div>
                            <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For
                                    men</span><span class="dot"></span><span>Casual<br></span></div>
                            <p class="text-justify text-truncate para mb-0">There are many variations of passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable.<br><br>
                            </p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1">&#8377;15.99</h4><span class="strike-text">&#8377;21.99</span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm"
                                    type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2"
                                    type="button">Add to wishlist</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TRENDING PRODUCTS END -->





        <!-- FAQ SECTION -->
        <section id="faq ">
            <h2 class="text-center text-upparcase mt-4">FAQ</h2>
            <div class="container mt-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                PRO
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the
                                <code>.accordion-flush</code> class. This is the first item's accordion body.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the
                                <code>.accordion-flush</code> class. This is the second item's accordion body. Let's
                                imagine this being
                                filled with some actual content.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the
                                <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing
                                more exciting
                                happening here in terms of content, but just filling up the space to make it look, at
                                least at first
                                glance, a bit more representative of how this would look in a real-world application.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





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
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>

</body>

</html>