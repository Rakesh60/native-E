<?php
// including connect file
include './admin_area/includes/connect.php';

//Getting products

function getproducts()
{

    global $conn;
//Condition To Check Isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['state'])) {

            $select_query = "SELECT * FROM `products` ORDER BY rand() ";
            $result_query = mysqli_query($conn, $select_query);

            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $state_id = $row['state_id'];
                echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2 d-flex '>
    <div class='card'>

        <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body d-flex flex-column justify-content-end '>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$description </p>

           <div class='d-grid gap-2 d-md-block '>
           <a href='#' class='btn  btn-primary'>Buy now</a>
           <a href='#' class=' btn  btn-primary'>Add to<i class='bi bi-cart3'></i></a>
           <a href='product_details.php?product_id=$product_id' class='ms-1 text-center'><i class='bi bi-eye'></i></a>





           </div>

        </div>

    </div>

</div>";

            }

        }
    }
}
//GETTING unique categories
function get_unique_category()
{

    global $conn;
//Condition To Check Isset or not
    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];

        $select_query = "SELECT * FROM `products` WHERE category_id=$category_id";
        $result_query = mysqli_query($conn, $select_query);
        $num_rows = mysqli_num_rows($result_query);
        if ($num_rows == 0) {
            echo "<h2 class='text-center text-warning'>Stock Not Available for this category</h1><p class='text-center'>We will get the stocks soon</p>
            <div class='alert alert-primary' role='alert'>
            Click this link t browse other item <a href='productpage.php?' class='alert-link'>
            NAtiveart.com
          </div> ";
        }

// $row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $state_id = $row['state_id'];
            echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2 d-flex '>
    <div class='card'>
        <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body d-flex flex-column justify-content-end bg-light bg-gradient'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$description </p>

           <div class='d-grid gap-2 d-md-block '>
           <a href='#' class='btn  btn-primary'>Buy now</a>
           <a href='#' class='btn  btn-primary'>Add to Cart <i class=''></i> </a>
           </div>

        </div>
    </div>

</div>";

        }

    }
}

//GETTING UNique_state
//GETTING unique categories
function get_unique_state()
{

    global $conn;
//Condition To Check Isset or not
    if (isset($_GET['state'])) {
        $state_id = $_GET['state'];

        $select_query = "SELECT * FROM `products` WHERE state_id=$state_id";
        $result_query = mysqli_query($conn, $select_query);
        $num_rows = mysqli_num_rows($result_query);
        if ($num_rows == 0) {
            echo "<h2 class='text-center text-warning'>Stock Not Available for this State</h1><p class='text-center'>We will get the stocks soon</p>
            <div class='alert alert-primary' role='alert'>
            Click this link t browse other item <a href='productpage.php?' class='alert-link'>
            NAtiveart.com
          </div> ";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $state_id = $row['state_id'];
            echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2 d-flex '>
    <div class='card'>
        <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body d-flex flex-column justify-content-end bg-light bg-gradient'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$description </p>

           <div class='d-grid gap-2 d-md-block '>
           <a href='#' class='btn  btn-primary'>Buy now</a>
           <a href='#' class='btn  btn-primary'>Add to Cart <i class=''></i> </a>
           </div>

        </div>
    </div>

</div>";

        }

    }
}

//DISPLAYING state
function getstate()
{
    global $conn;
    $select_state = "SELECT *FROM `state`";
    $result_state = mysqli_query($conn, $select_state);
// $row_data=mysqli_fetch_assoc($result_state);
// echo $row_data['state_title'];
    while ($row_data = mysqli_fetch_assoc($result_state)) {
        $state_title = $row_data['state_title'];
        $state_id = $row_data['state_id'];
        echo "<li class='nav-item bg-success'>
    <a href='productpage.php?state=$state_id' class=' nav-link text-light'>
        <h4>$state_title</h4>
    </a>
</li>";

    }
}

//DISPLAY CATEGORY
function getcategory()
{
    global $conn;
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
}

//DROPDOWN CATEGORY

function getdropdowncategory()
{
    global $conn;
    $select_category = "SELECT *FROM `categories` ORDER BY category_title";
    $result_category = mysqli_query($conn, $select_category);
    // $row_data=mysqli_fetch_assoc($result_category);
    // echo $row_data['category_title'];
    while ($row_data = mysqli_fetch_assoc($result_category)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='bg-primary' ><a class='dropdown-item' href='./Final/login.php'>
                                    $category_title
                                </a>
                            </li>";

    }
}

//GET SEARCH BOX DATA ============+++++++++++

function search_product()
{
    global $conn;
    if (isset($_GET['search_data_products'])) {
        $search_data_value = $_GET['search_data'];
        global $username;

        $search_query = "SELECT * FROM `products` WHERE product_keyword LIKE '%$search_data_value%'";
        $result_query = mysqli_query($conn, $search_query);
        $num_rows = mysqli_num_rows($result_query);
        if ($num_rows == 0) {
            echo "<h2 class='text-center text-warning'>Search not matched </h1><p class='text-center'>Working On Better Search Result </p>
            <div class='alert alert-primary' role='alert'>
            Click this link to browse other item <a href='productpage.php?' class='alert-link'>
            NAtiveart.com
          </div> ";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $state_id = $row['state_id'];
            echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-2 d-flex '>
        <div class='card'>
            <img class='rounded' src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
            <div class='card-body d-flex flex-column justify-content-end bg-light bg-gradient'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$description </p>

               <div class='d-grid gap-2 d-md-block '>
               <a href='#' class='btn  btn-primary'>Buy now</a>
               <a href='#' class='btn  btn-primary'>Add to Cart <i class=''></i> </a>
               </div>

            </div>
        </div>

    </div>";

        }
    }
}
