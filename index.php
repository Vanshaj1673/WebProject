<!-- connecting file -->

<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website using PHP and MySQL</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9C6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./images/Logo.png" alt="Logo" class="logo"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-cart" style="width: 30px;"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price: 100/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./user_area/user_login.php">Login</a>
                </li>
            </ul>
        </nav>

        <!-- Third child -->
        <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communications is at the heart of e-commerce and community</p>
        </div>

        <!-- Fourth child -->
        <div class="row">
            <div class="col-md-10">
                <!-- Products -->
                <div class="row">
                 <!-- fetching products -->
                 <?php
$select_query = "SELECT * FROM products";
$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image = $row['product_image'];
    $product_price = $row['product_price'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    ?>
    <div class="col-md-4 mb-2">
        <div class="card" id="product_card_<?php echo $product_id; ?>">
            <img src="./images/<?php echo $product_image; ?>" class="card-img-top" alt="Product Image">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product_title; ?></h5>
                <p class="card-text"><?php echo $product_description; ?></p>
                <a href="#" class="btn btn-info">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
            </div>
        </div>
    </div>
<?php } ?>



                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Himachali_Topi1.png.jpg" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Himachali Topi</h5>
                                <p class="card-text">#Kangri Topi</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Uttarakhand_Topi2.png.png" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Hiimachaliii Topi</h5>
                                <p class="card-text">#Bilaspuri Topi</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Himachali_Topi3.png.jpg" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Pahari Topi</h5>
                                <p class="card-text">#Pahad</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Uttarakhand_Topi1.png.png" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Uttarakhandi Topi</h5>
                                <p class="card-text">Caps</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Uttarakhand_Topi3.png.jpeg" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Uttarakhandiiii Topi</h5>
                                <p class="card-text">Topi,Cap</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/Uttarakhand_Topi4.png.png" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Pahaaaari Topi</h5>
                                <p class="card-text">#Uttarakhand,#Himachal</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 bg-secondary p-0">
       <!-- brands to be displayed -->
<ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
    </li>
    <?php
    $select_brands = "SELECT * FROM brands";
    $result_brands = mysqli_query($con, $select_brands);
    while ($row_data = mysqli_fetch_assoc($result_brands)) {
        echo "<li class='nav-item'><a href='#' class='nav-link text-light'>{$row_data['brand_title']}</a></li>";
    }
    ?>
</ul>

                <ul class="navbar-nav">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Himachali Topi</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-light">Uttarakhandi Topi</a>
                    </li>
                </ul>


                <!-- Sidenav -->
            </div>
        </div>

        <!-- Last child -->
        <div class="bg-info p-3 text-center">
            <p>All right reserved @-Designed by Vanshaj-2024</p>
        </div>
    </div>

    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VgdZyW93YapYj2CO+8WwO6MfGhl2qQrsuC5mlg1WfC0K5K+khh5N4b0f5FSVYwt4" crossorigin="anonymous"></script>
    <!-- Font Awesome JS link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
