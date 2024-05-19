<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin -registration</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid"></div>
    <h2 class="text-center">New User Registeration</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
    <form action="index.php " method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4">
            <!-- username field -->
            <label for="user_username" class="form-label">User name</label>
            <input type="text" id="user_username" class="form-control" placeholder="Enter your name" autocomplete="off" required="required" name="user_username"/>
            </div>
            <!-- email field -->
            <div class="form-outline mb-4">
            <label for="user_email" class="form-label">E-mail</label>
            <input type="text" id="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" name="user_email"/>
            </div>
             <!-- image field -->
             <div class="form-outline mb-4">
            <label for="user_image" class="form-label">User Image</label>
            <input type="file" id="user_image" class="form-control"  required="required" name="user_image"/>
            </div>
              <!-- password field -->
              <div class="form-outline mb-4">
            <label for="user_password" class="form-label">Password</label>
            <input type="password" id="user_password" class="form-control"  placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
            </div>
            <!--  confirm password field -->
            <div class="form-outline mb-4">
            <label for="user_password" class="form-label"> Confirm Password</label>
            <input type="password" id="conf_user_password" class="form-control"  placeholder="Confirm your password" autocomplete="off" required="required" name="conf_user_password"/>
            </div>
            <!-- address field -->
            <div class="form-outline mb-4">
            <label for="user_address" class="form-label">Address</label>
            <input type="text" id="user_address" class="form-control" placeholder="Enter your Address" autocomplete="off" required="required" name="user_address"/>
            </div>
            <!-- contact  field -->
            <div class="form-outline mb-4">
            <label for="user_numberr" class="form-label">Phone Number</label>
            <input type="text" id="user_number" class="form-control" placeholder="Enter your Phone Number" autocomplete="off" required="required" name="user_number"/>
            </div>
            
            <div class="mt-4 pt-2">
                <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
                <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="admin_login.php" class="text-danger"> Login</a></p>
            </div>    


</form>
</div>
</div>
</div>                
</body>
</html>