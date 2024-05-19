<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- Font Awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9C6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- CSS file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin-image {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-right: 20px; /* Adjust margin as needed */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/Logo.png" alt="Logo" class="logo">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="admin_login.php" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Manage Details Section -->
        <div class="bg-light manage-details">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Admin Details -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-3 d-flex align-items-center">
                <div>
                    <img src="../images/Hiamchali_Topi2.png.png" alt="" class="admin-image">
                    <p class="text-light">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="#" class="nav-link text-light bg-info my-1">View products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1"><i class="fas fa-plus"></i> Insert Categories</a></button>
                    <button><a href="#" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="#" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="#" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="#" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="#" class="nav-link text-light bg-info my-1">List users</a></button>
                    <button><a href="#" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>
        <!-- fourth child-->
        <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            ?>
    </div>
<!-- Last child -->
<div class="bg-info p-3 text-center">
            <p>All right reserved @-Designed by Vanshaj-2024</p>
        </div>
    </div>
    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VgdZyW93YapYj2CO+8WwO6MfGhl2qQrsuC5mlg1WfC0K5K+khh5N4b0f5FSVYwt4" crossorigin="anonymous"></script>
</body>
</html>
